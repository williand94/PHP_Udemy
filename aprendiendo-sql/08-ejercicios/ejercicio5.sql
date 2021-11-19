/* 
    MOstrar todos los vendedores con su nombre y el número de días que llevan
    trabajando en el concesionario.
 */

SELECT nombre, DAY("2021-05-24")-DAY(fecha_alta) AS "Días laborados" FROM vendedores;

SELECT nombre, DATEDIFF(CURDATE(),fecha_alta) AS "Días laborados" FROM vendedores;
