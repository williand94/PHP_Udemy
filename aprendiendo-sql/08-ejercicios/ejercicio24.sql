/* 
    Listar los encargos con el nombre del coche, el nombre del cliente,el nombre de la ciudad,per únicamente cuando sean de Buenventura.
*/

SELECT e.id,co.modelo,c.nombre,c.ciudad FROM encargos e
INNER JOIN coches co ON co.id = e.id
INNER JOIN cliente c ON c.id = e.cliente_id
WHERE c.ciudad = "Buenaventura";