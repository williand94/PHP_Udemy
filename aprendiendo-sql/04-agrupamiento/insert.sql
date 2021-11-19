#INSERTS PARA CATEGORIAS#
INSERT INTO categorias VALUES(null,'Acción'),
                             (null,'Rol'),
                             (null,'Deportes'); 




#INSERTS PARA ENTRADAS#
INSERT INTO entradas VALUES(NULL,1,1,'Novedades del GTA 5 online','Review GTA 5',CURDATE()),
                           (NULL,1,2,'Review de LOL online','Todo sobre LOL',CURDATE()),
                           (NULL,1,3,'Nuevos jugadores de FIFA 21','Review FIFA 21',CURDATE()),

                           (NULL,2,1,'Novedades de Assasins Online','Review Assasins online',   CURDATE()),
                           (NULL,2,2,'Review de WOW online','Review WOW Online',CURDATE()),
                           (NULL,2,3,'Review de PES 21','Review PES 21',CURDATE()),

                           (NULL,3,1,'Novedades del CALL OFF DUTY  online','Review COD ',CURDATE()),
                           (NULL,3,1,'Review de FORTNITE online','Todo sobre LOFORTNITE',CURDATE()),
                           (NULL,3,3,'Nuevos jugadores de F1 2021','Review F1 2021',CURDATE());


                           
                           


#PRUEBA#
INSERT INTO entradas (titulo,descripcion,fecha) VALUES ('Dios de la guerra','Juego de aventura y acción cuyo personaje principal se llama Kratos','2018-06-15');
SELECT u.id,c.id 
FROM usuarios u
INNER JOIN categorias c	
ON u.id = entradas.usuario_id,c.id = entradas.categoria_id