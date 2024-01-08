CREATE TABLE usuario(
id          int(11) auto_increment not null,
nombre      varchar(100) not null,
edad        int(11) null,
password    varchar(255) default 'cambiarcontraseña123',
telefono    int(15),
email       varchar(100) not null,
CONSTRAINT pk_usuario PRIMARY KEY(id)
);

/*
Hay que especificar el tipo de dato para que funcione la consulta
int(nro de cifras)
integer(nro de cifras)
varchar(numero de caracteres)
char(numero de caracteres)
float(numero de cifras)
date
time
timestamp
tinyint
mediumint
bigint
text
mediumtext
longtext
*/

/*
Borrar una tabla 
drop table *nombre de la tabla*
*/
