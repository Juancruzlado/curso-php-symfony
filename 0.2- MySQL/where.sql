/*
Select general de los atributos de la tabla
*/
SELECT email, nombre, edad FROM vendedores;

/*
Seleccionar todos los campos
*/

SELECT * FROM vendedores;

/*
Select con Where
Para especificar a que dato hay que cambiar de que columna
*/

SELECT nombre, edad FROM vendedores WHERE email = 'admin@juan.com';

/*
Select con Where puede utilizar distintos operadores logicos tambien

OR AND 
= 
== 
!= 
*/

SELECT nombre, edad FROM vendedores WHERE email != 'admin@juan.com';

/*
Select con WHERE y caracteres especiales 
*/

SELECT email FROM vendedores WHERE nombre LIKE '%a%' AND contraseña = 23;