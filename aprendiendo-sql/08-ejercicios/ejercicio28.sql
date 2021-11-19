/* 
    Mostrar los vendedores y el número de clientes que tengan,pero se tiene que mostrar 
    tengan o no tengan clientes.
*/
SELECT v.id,CONCAT(v.nombre," ",v.apellidos) AS "Vendedor",COUNT(c.id) AS "N° Clientes"
FROM vendedores v
LEFT JOIN cliente c ON v.id = c.vendedor_id
GROUP BY v.id 
ORDER BY v.id ASC;