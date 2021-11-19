/* 
    Mostrar los datos del vendedor con mas antiguedad en el concesionario.
*/
SELECT * FROM vendedores ORDER BY ASC;


#Obtner los coches con mas unidades vendidas#
SELECT * FROM coches WHERE id IN
    (SELECT coche_id FROM encargos WHERE cantidad IN
        (SELECT MAX(cantidad) FROM encargos));

