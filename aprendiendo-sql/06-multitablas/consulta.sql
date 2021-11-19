#MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORÍA#
SELECT e.id,e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoría'
FROM entradas e,usuarios u,categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

#INNER JOIN #
SELECT e.id, e.titulo , u.nombre AS 'Autor' c.nombre AS 'Categorías'
FROM entradas e 
INNER JOIN usuarios u ON  e.usuario_id = u.id 
INNER JOIN categorias c ON c.id = e.categoria_id;


#INNER JOIN #
SELECT titulo ,COUNT(id) FROM categorias
GROUP BY id;

#INNER JOIN #
#Mostrar el nombre de las categorías y mostrar cuantas entradadas tienen#
SELECT c.nombre, COUNT(e.categoria_id) AS 'Entradas' FROM entradas e,categorias c
WHERE c.id = e.categoria_id
GROUP BY (e.categoria_id);

#INNER JOIN #
SELECT c.nombre , COUNT(e.id) AS 'Entradas' FROM categorias c 
LEFT JOIN entradas e
ON c.id = e.categoria_id 
GROUP BY c.nombre;

SELECT c.nombre , COUNT(e.id) AS 'Entradas' FROM entradas e
RIGHT JOIN categorias c
ON c.id = e.categoria_id 
GROUP BY c.nombre;




#Mostrar el email de los usuarios y al lado cuantas entradas tienen#
SELECT email,COUNT(e.categoria_id) AS 'Entradas' FROM usuarios u,entradas e
WHERE u.id = e.usuario_id 
GROUP BY email;
