/* 
    Los clientes que ha hecho algún encargo del coche clio(MODELO)
 */

SELECT * FROM cliente c
INNER JOIN encargos e ON e.cliente_id = c.id
WHERE c.id IN
(SELECT cliente_id FROM encargos WHERE coche_id = 4);


SELECT e.id AS "Número de pedido",c.nombre,c.ciudad,co.modelo,co.marca,e.coche_id,
e.cantidad,e.fecha 
FROM encargos e
INNER JOIN cliente c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE co.id IN
(SELECT id FROM coches WHERE modelo = "clio");

/* Victor Robles solución */
SELECT * FROM cliente WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id
    IN(SELECT id FROM coches WHERE modelo LIKE'%clio%'));
