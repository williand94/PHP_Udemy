/* 
    incrementar el precio de los coches en un 0.2
*/
/* # Error hacerlo UPDATE coches SET precio = (precio + 1.02);# */

UPDATE coches SET precio = (precio *0.02)+precio;
/* Mostramos los coches con un 2% mas caros */
SELECT marca, (precio*0.02) +precio "Subimos un 2% los precios" FROM coches