/* 
    obtener los nombres y las ciudades de los clientes con encargos
*/

SELECT nombre, ciudad FROM cliente WHERE id IN
(SELECT cliente_id FROM encargos WHERE cantidad >= 3)