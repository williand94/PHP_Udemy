/* 
    Visualizar todos los coches en cuya marca exista la letra "A", y cuyo modelo empiece por 
    "F".
*/

SELECT * FROM coches WHERE marca LIKE "%A%" AND modelo  LIKE "%X%"; 

SELECT marca FROM coches where marca LIKE "%A%"
