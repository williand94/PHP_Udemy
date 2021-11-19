

CREATE VIEW entradas_con_nombre AS
SELECT e.id, e.titulo , u.nombre AS 'Autor' ,c.nombre AS 'Categorías'
FROM entradas e 
INNER JOIN usuarios u ON  e.usuario_id = u.id 
INNER JOIN categorias c ON c.id = e.categoria_id;
