/* 
    Mostrar listado de clientes(número de cliente y el nombre)mostrar también 
    el número de vendedor y su nombre.
*/
SELECT c.id, c.nombre, c.vendedor_id AS "NÚMERO VENDEDOR",CONCAT(v.nombre ," ",v.apellidos) AS
"VENDEDOR"
FROM cliente c
INNER JOIN vendedores v ON v.id = c.vendedor_id
WHERE vendedor_id IN 
(SELECT id FROM vendedores );

/* VICTOR ROBLES SOLUCIÓN */
SELECT c.id, c.nombre, v.id,CONCAT(v.nombre ,"", v.apellidos) AS "NOMBRE COMPLETO DEL VENDEDOR"
FROM clientes c,vendedores v
WHERE c.vendedor_id = v.id;


