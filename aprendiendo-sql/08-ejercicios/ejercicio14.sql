/*
    Visualizar las unidades totales vendidas de cada coche a cada cliente 
    mostrando el nombre del coche el nombre del cliente y la suma de unidades.

*/

SELECT c.modelo AS "Coche",cl.nombre AS "Cliente",e.cantidad,SUM(e.cantidad) AS "Total Unidades"
FROM encargos e 
INNER JOIN coches c ON c.id = e.coche_id    
INNER JOIN cliente cl ON cl.id = e.cliente_id
GROUP BY e.coche_id,e.cliente_id

/* No estuvo correcta mi solucion,puesto que había clientes que compraban
   diferentes modelos de coches y mi solución no optimizaba eso.     
 */SELECT c.modelo,cl.nombre,e.cantidad,SUM(e.cantidad) AS "Total Unidades"
FROM encargos e 
INNER JOIN coches c ON c.id = e.coche_id    
INNER JOIN cliente cl ON cl.id = e.cliente_id
GROUP BY cl.nombre