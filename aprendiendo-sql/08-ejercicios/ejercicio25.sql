/* 
    Obtener una lista de los nombres de los clientes con el importe de sus encargos acumulados.
*/

SELECT c.id,c.nombre, (co.precio*e.cantidad) AS "Importe del cliente" FROM cliente c
INNER JOIN encargos e ON e.cliente_id = c.id
INNER JOIN coches co ON co.id = e.coche_id;

/* Victor Robles solucion
    Agrega la función SUM y optimiza la consulta puesto que los clientes con mas de una compra se le hace un total único (Se tiene que agrupar la consulta con un GRUOUP BY )
 */
SELECT c.id,c.nombre, SUM(co.precio*e.cantidad) AS "Importe del cliente" FROM cliente c
INNER JOIN encargos e ON e.cliente_id = c.id
INNER JOIN coches co ON co.id = e.coche_id
GROUP BY c.nombre
ORDER BY 3 ASC