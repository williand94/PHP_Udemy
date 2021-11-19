/*
    Visualizar el nombre y apellido de los vendeores en una misma columna,
    su fecha de registro y el día de la semana en la que se registraron
*/

SELECT CONCAT(nombre , '' , apellidos) 'Nombre completo',
       fecha_alta AS 'Fecha de registro', DAYNAME(fecha_alta) AS 'Día de registro'
       FROM vendedores; 