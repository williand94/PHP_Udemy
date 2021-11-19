/* 
    Visualizar los apellidos de los vendedores, su fecha  y su número de grupo,
    ordenado por fecha descendente y limitar o mostrar los cuatro últmimos registros
*/

SELECT apellidos,fecha_alta ,grupo_id FROM vendedores  
ORDER BY fecha_alta DESC LIMIT 4; 