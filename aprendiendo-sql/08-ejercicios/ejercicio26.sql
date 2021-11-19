/* 
    Sacar vendedores que tengan jefes y motrar el nombre del jefe.
*/

SELECT CONCAT(v1.nombre," ",v1.apellidos ) AS "Jefe", CONCAT(v2.nombre," ",v2.apellidos) AS "Vendedor"
FROM vendedores v1
INNER JOIN vendedores v2 ON v2.jefe = v1.id