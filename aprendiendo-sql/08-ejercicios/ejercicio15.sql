/* 
    Mostrar los clientes que más pedidos hicieron y cuantos han hecho.
*/

SELECT c.nombre,e.cantidad AS "Pedidos"
FROM encargos e
INNER JOIN cliente c ON c.id=e.cliente_id
GROUP BY e.cliente_id
ORDER BY e.cantidad DESC LIMIT 2


