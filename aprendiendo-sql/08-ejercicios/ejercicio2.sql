/* 
    2.Modificar la comisión de los vendedores y ponerla al 0.5 cuando ganan mas de 15000000.
 */

UPDATE vendedores SET comision = 0.5 where sueldo >= 15000000;