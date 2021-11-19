/* 
    Sacar la media de los sueldos de todos los vendedores por grupo
 */
SELECT COUNT(id) / sueldo FROM vendedores
SELECT cargo,(sueldo/COUNT(id))AS "Media de los sueldos" FROM vendedores GROUP BY cargo
SELECT cargo,AVG(sueldo) AS "Media de los sueldos" FROM vendedores GROUP BY cargo

#This is the Same exercise,but  the query is optimized #
SELECT CEIl(AVG(v.sueldo)) AS "Media de los sueldos",g.nombre,g.ciudad
FROM vendedores v
INNER JOIN grupos g
ON v.grupo_id = g.id 
GROUP BY v.grupo_id
