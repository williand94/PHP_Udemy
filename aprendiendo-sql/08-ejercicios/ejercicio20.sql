/* 
    Seleccionar el grupo en el que trabaja vendedor con mayor salario y visualizar el nombre del grupo.
*/
SELECT * FROM grupos WHERE id 
    IN (SELECT grupo_id FROM vendedores HAVING MAX(sueldo));

SELECT * FROM grupos WHERE id 
    IN (SELECT grupo_id FROM vendedores WHERE sueldo =(
    SELECT MAX(sueldo) FROM vendedores));    