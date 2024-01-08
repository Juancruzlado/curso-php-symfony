/*
Renombrar una tabla en SQL
*/

ALTER TABLE usuario RENAME TO vendedores;

/*
Cambiar la columna de la tabla
*/

ALTER TABLE vendedores CHANGE password contraseña varchar(255) default 'cambiarcontraseña123';

/*
Cambiar columna sin modificar el nombre
*/

ALTER TABLE vendedores MODIFY nombre char(50) not null;

/*
Añadir una columna nueva 
*/

ALTER TABLE vendedores ADD columna varchar(100) not null;

/*
Añadir restricción a una columna UNIQUE
*/
ALTER TABLE vendedores ADD CONSTRAINT uq_email UNIQUE(email);

/*
BORRAR UNA COLUMNA
*/
ALTER TABLE vendedores DROP columna;

/*
Insert avanzado para datos parciales
*/

INSERT INTO vendedores(email, contraseña) VALUES('vendedor@vende.com', 'hola123');