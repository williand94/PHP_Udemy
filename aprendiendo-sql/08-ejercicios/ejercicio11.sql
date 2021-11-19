/* 
    Visualizar todos los cargos que hay , y el número de vendedores que hay por cargo.
*/
SELECT cargo, COUNT(id) AS "Número de empleados por cargo" FROM vendedores GROUP BY cargo;
