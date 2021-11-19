/* 
    Obtener los vendedores con dos o mas clientes
 */

SELECT * FROM vendedores WHERE id IN
(SELECT vendedor_id FROM cliente GROUP BY vendedor_id 
HAVING COUNT(id)>=2);