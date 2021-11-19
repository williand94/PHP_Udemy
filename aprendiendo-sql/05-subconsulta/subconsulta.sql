/* 
SUBCONSULTAS:
-Son consultas dentro de otras.
-Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal.
-Jugando con las claves ajenas.
 */
 #MOSTRAR USUARIOS QUE TENGAN ENTRADAS CREADAS CON INNER JOIN#
 #EJEMPLO CREADO POR MI#
SELECT DISTINCT(usuarios.id),nombre,apellido,email,usuarios.fecha 
    FROM usuarios 
    INNER JOIN entradas 
    ON usuarios.id = entradas.usuario_id ORDER BY usuario_id;

#MOSTRAR USUARIOS QUE TENGAN ENTRADAS CREADAS CON  UNA SUBCONSULTA#
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas);

#SACAR LOS USUARIOS QUE TENGAN ALGUNA ENTRADA QUE EN SU TÍTULO HABLEN DE GTA#
SELECT nombre,apellido FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%');

#SACAR TODAS LAS ENTRADAS DE LA CATEGORÍA ACCIÓN#
SELECT * FROM entradas WHERE categoria_id
IN(SELECT id FROM categorias WHERE id = 1);

#MOSTRAR LAS CATEGORIAS CON MAS DE 3 ENTRADAS#
SELECT * FROM categorias WHERE id
IN (SELECT COUNT(categoria_id) > 3 FROM entradas WHERE categoria_id);

SELECT * FROM categorias WHERE id
IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);

#MOSTRAR LOS USUARIOS QUE CREARON UNA ENTRADA EL MARTES O UN MIÉRCOLES#
SELECT nombre,apellido FROM usuarios WHERE id 
IN (SELECT usuario_id FROM entradas WHERE DAYNAME(fecha) = "WEDNESDAY");

#MOSTRAR EL NOMBRE DEL USAURIO QUE TENGAS MAS ENTRADAS #
SELECT * FROM usuarios WHERE ID =
SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1;

#MOSTRAR LAS CATEGORIAS SIN ENTRADAS#
SELECT * FROM categorias WHERE id
NOT IN(SELECT categoria_id FROM entradas)
