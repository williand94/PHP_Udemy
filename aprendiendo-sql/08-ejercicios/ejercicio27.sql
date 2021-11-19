/* 
    Visualizar los nombres de los clientes y la cantidad de encargos realizados,
    incluyendo los que no hayan realizado encargos
*/
SELECT c.nombre,SUM(e.cantidad)AS "ENCARGOS" FROM cliente c
LEFT JOIN encargos e ON c.id = e.cliente_id 
GROUP BY c.id

/* VICTOR ROBLES SOLUCION CORRECTA */
SELECT c.nombre,COUNT(e.id)AS "ENCARGOS" FROM cliente c
LEFT JOIN encargos e ON c.id = e.cliente_id 
GROUP BY 1
