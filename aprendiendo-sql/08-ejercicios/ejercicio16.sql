/* 
    Obtener un listado de los clientes atendidos por el vendedor Willian Vallecilla
 */
SELECT c.nombre,c.ciudad FROM cliente c
INNER JOIN vendedores v ON c.vendedor_id = v.id
WHERE v.nombre = "Willian David" ;

SELECT * FROM cliente WHERE vendedor_id in
(SELECT id FROM vendedores WHERE nombre = "Willian David");

/* Victor Robles' solución 
    Aplicando todo lo visto en una sola consulta
*/
SELECT e.id AS "Número de pedido",e.cantidad,c.nombre,co.modelo,
co.marca,e.fecha FROM encargos e 
INNER JOIN cliente c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN
(SELECT id FROM cliente WHERE nombre = "Ingenieros y asociados WyD");