/*
Funciones de texto
*/

SELECT nombre FROM vendedores;

SELECT UPPER(nombre) FROM vendedores;

SELECT LOWER(nombre) FROM vendedores;

SELECT CONCAT(nombre, ' ', edad) FROM vendedores;

SELECT LENGTH(CONCAT(nomre, ' ', edad)) AS CONVERSION FROM vendedores;

SELECT CONCAT('         ', nombre, ' ', edad) AS CONVERSION FROM vendedores;

SELECT TRIM(CONCAT('           ', nombre, ' ', edad)) AS CONVERSION FROM vendedores;