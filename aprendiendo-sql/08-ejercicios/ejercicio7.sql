/* 
    Mostrar el cargo y el sueldo de los vendedores con cargo de "Desarrollador Web"
 */

SELECT cargo,sueldo FROM vendedores WHERE cargo = "DESARROLLADOR WEB";
SELECT cargo,sueldo FROM vendedores WHERE cargo LIKE "%Asesora%"