/* 
    Crear una vista llamada vendedores A que incluirá todos los vendedores
    del grupo que se llamen "vendedores A"-
 */

CREATE VIEW
vendedoresA AS
SELECT g.nombre AS "Grupo",CONCAT(v.nombre," ", v.apellidos) AS "Vendedores"
FROM grupos g
INNER JOIN vendedores v ON g.id = v.grupo_id
WHERE g.nombre = "Vendedores A";

/* Victor RObles Solución */
CREATE VIEW
vendedoresA AS
SELECT * FROM vendedores WHERE grupo_id IN
(SELECT id FROM grupos WHERE nombre = "Vendedores A");