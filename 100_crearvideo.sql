-- Crea la BD si no existe
CREATE DATABASE IF NOT EXISTS video;

-- La activa
USE video;

--
-- Si la BD ya existe debemos eliminar las tablas
-- Hay que eliminar antes las tablas hijas que las tablas padres
--
drop table if exists F_P;
drop table if exists FAC;
drop table if exists PEL;
drop table if exists CLI;

--
-- Creacion de la tabla de peliculas
--

create table PEL(
P_NUM mediumint unsigned not null,
TITULO varchar(100) not null,
TIPO varchar(50) not null,
CLASIF varchar(3) not null,
ARTISTA varchar(50) null,
COPIAS smallint unsigned not null,
PRECIO decimal(5,2) not null,
primary key(P_NUM)
);

-- Carga de los datos
LOAD DATA LOCAL INFILE 'C:\\xampp\\htdocs\\cargasSQL\\100_pel.txt' INTO TABLE pel LINES TERMINATED BY '\r\n';


--
-- Creacion de la tabla de clientes
--

create table CLI(
CLIID varchar(5) not null,
APEL varchar(100) not null,
NOMBRE varchar(50) not null,
CIUD varchar(50) not null,
PROV varchar(50) null,
primary key(CLIID)
);

-- Carga de los datos
LOAD DATA LOCAL INFILE 'C:\\xampp\\htdocs\\cargasSQL\\100_cli.txt' INTO TABLE cli LINES TERMINATED BY '\r\n';


--
-- Creacion de la tabla de cabecera de facturas
--

create table FAC(
F_NUM int unsigned not null,
CLIID varchar(5) not null,
TOTAL decimal(8,2) not null,
ALQ date not null,
DEV date null,
primary key(F_NUM)
);

-- Carga de los datos
LOAD DATA LOCAL INFILE 'C:\\xampp\\htdocs\\cargasSQL\\100_fac.txt' INTO TABLE fac LINES TERMINATED BY '\r\n';


--
-- Creacion de la tabla de líneas de factura
--

create table F_P(
F_NUM int unsigned not null,
P_NUM mediumint unsigned not null,
primary key(F_NUM,P_NUM)
);

-- Carga de los datos
LOAD DATA LOCAL INFILE 'C:\\xampp\\htdocs\\cargasSQL\\100_f_p.txt' INTO TABLE f_p LINES TERMINATED BY '\r\n';


--
-- Definicion de claves externas
--

-- Si se modifica la clave primaria de la tabla padre 
-- se actualiza el valor de la clave externa.
--
-- El intento de eliminar un registro de la clave primaria 
-- de la tabla padre será prohibido si existen registros 
-- para esa clave en la tabla hija.

ALTER TABLE FAC ADD FOREIGN KEY fk_cliid(CLIID) REFERENCES CLI(CLIID) ON UPDATE CASCADE ON DELETE RESTRICT;
ALTER TABLE F_P ADD FOREIGN KEY fk_f_num(F_NUM) REFERENCES FAC(F_NUM) ON UPDATE CASCADE ON DELETE RESTRICT;
ALTER TABLE F_P ADD FOREIGN KEY fk_p_num(P_NUM) REFERENCES PEL(P_NUM) ON UPDATE CASCADE ON DELETE RESTRICT;
