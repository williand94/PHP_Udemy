/* 
    Listar todos los encargos realizados con la marca del coche y el nombre del cliente
 */
/* Posible solucion */
SELECT e.id,e.cliente_id,c.nombre, co.modelo
FROM encargos e,cliente c,coches co
WHERE e.coche_id IN
(SELECT id FROM coches) AND e.cliente_id = c.id AND co.id=e.coche_id 

/* VICTOR ROBLES SOLUCION */
SELECT  e.id,co.marca,c.nombre FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN cliente c ON c.id = e.cliente_id