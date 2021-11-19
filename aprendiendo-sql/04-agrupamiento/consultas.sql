#CONSULTAS DE AGRUPAMIENTO#
SELECT COUNT(titulo) AS 'NÚMERO DE ENTRADAS',categoria_id FROM entradas GROUP BY categoria_id;

#CONSULTAS DE AGRUPAMIENTOS CON CONDICIONES#
SELECT COUNT(titulo) AS 'NÚMERO DE ENTRADAS',categoria_id FROM entradas GROUP BY categoria_id
HAVING COUNT(titulo) >= 4 ;

/* 
    AVG Nos permite sacar la media
    COUNT  cuenta registro
    MAX valor máximo del grupo
    MIN valor mínimo del grupo
    SUM sumar contenido del grupo
 */

 SELECT AVG(id) AS 'MEDIA ID' FROM entradas;

 SELECT MAX(id) AS 'MAX ID', titulo FROM entradas;

