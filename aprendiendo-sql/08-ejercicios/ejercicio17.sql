/* 
    obtener el listado de los encargos realizados por el cliente 
    Ingenieros y asociados WyD. 
 */

SELECT e.cliente_id , e.coche_id,e.cantidad,e.fecha
FROM encargos e
INNER JOIN  cliente c
ON e.cliente_id = c.id
WHERE e.nombre = "Ingenieros y asociados WyD";


SELECT * FROM encargos e 
INNER JOIN cliente c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN
(SELECT id FROM cliente WHERE nombre = "Ingenieros y asociados WyD");

/* Optimiazado */
SELECT e.id AS "Número del pedido",c.nombre,c.ciudad,co.modelo,co.marca,e.cantidad,e.fecha 
FROM encargos e 
INNER JOIN cliente c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN
(SELECT id FROM cliente WHERE nombre = "Ingenieros y asociados WyD");