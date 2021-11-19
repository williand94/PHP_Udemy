/* 
    Diseñar y crear la BBDD de un concesionario.  
*/


CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;
SET FOREIGN_KEY_CHECKS = 0;
CREATE TABLE coches(
    id          int(11) auto_increment not null,        
    modelo      varchar(100) not null,
    marca       varchar(255),
    precio      float(12,2) unsigned not null,    
    stock       int(255) not null,
    CONSTRAINT pk_coches PRIMARY KEY(id) 
)ENGINE=InnoDB;

CREATE TABLE grupos(
    id          int(11) auto_increment not null,
    nombre      varchar(100) not null,
    ciudad      varchar(100) ,
    CONSTRAINT  pk_grupos PRIMARY KEY(id)    
)ENGINE=InnoDB;

CREATE TABLE vendedores(
    id          int(11) auto_increment not null,
    grupo_id    int(11) not null,
    jefe        int(10) ,
    nombre      varchar(100) not null,    
    apellidos   varchar(100) not null,
    cargo       varchar(100) not null,
    fecha_alta  date not null,
    sueldo      float(10,2) unsigned,
    comision    float(8,2)  unsigned,    
    CONSTRAINT  pk_vendedores PRIMARY KEY(id),
    CONSTRAINT  fk_vendedores_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id) ON UPDATE CASCADE ON DELETE CASCADE ,
    CONSTRAINT  fk_vendedores_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id) ON UPDATE CASCADE ON DELETE CASCADE 
)ENGINE=InnoDB;

CREATE TABLE cliente(
    id          int(11) auto_increment not null,
    vendedor_id int(11) not null,
    nombre      varchar(100) not null,
    ciudad      varchar(100),
    gastado     float(50,2),
    fecha       date
    CONSTRAINT  pk_cliente PRIMARY KEY(id),
    CONSTRAINT  fk_cliente_vendedores FOREIGN KEY(vendedor_id) REFERENCES vendedores(id) ON UPDATE CASCADE ON DELETE CASCADE 

)ENGINE=InnoDB;

CREATE TABLE   encargos(
    id          int(11) auto_increment not null,
    cliente_id  int(11) not null,
    coche_id    int(11) not null,
    cantidad    int(100),
    fecha       date not null,
    CONSTRAINT  pk_encargos PRIMARY KEY(id),
    CONSTRAINT  fk_encargos_cliente FOREIGN KEY(cliente_id) REFERENCES cliente(id) ON UPDATE CASCADE ON DELETE CASCADE ,
    CONSTRAINT  fk_encargos_coche FOREIGN KEY(coche_id) REFERENCES coches(id) ON UPDATE CASCADE ON DELETE CASCADE 
)ENGINE=InnoDB;

#RELLENAR LA BBDD CON INFORMACION-INSERTS#

#COCHES#

INSERT INTO coches VALUES (null,'Captiva','Chevrolet',93990000,5),
                          (null,'Sedan','Mazda 2',60200000,30),
                          (null,'CX-30','Mazda',84400000,8),
                          (null,'Clio','Renault',22200000,12),                      
                          (null,'Camaro Zl1','Chevrolet',274200000,8),                      
                          (null,'Fiesta Coupet','Ford',43500000,8)                      




#GRUPOS#
INSERT INTO grupos VALUES(NULL,'Vendedores A','Cali'),
                         (NULL,'Vendedores B','Medellín'),
                         (NULL,'Directores Mecánicos','Bogotá'),
                         (NULL,'Vendedores B','Manizales'),
                         (NULL,'Vendedores C','Pereira'),
                         (NULL,'Vendedores B','Cali'),
                         (NULL,'Vendedores A','Medellín'),
                         (NULL,'Directores Mecánicos','Cali'),
                         (NULL,'Vendedores C','Cali')


#vendedores#

INSERT INTO vendedores VALUES(NULL,1,NULL,'Willian David','Vallecilla Riascos','Administrador',CURDATE(),25000000,5),
                             (NULL,1,1,'Angie Daniela','Vallecilla Riascos','Cajera',CURDATE(),15000000,2),
                             (NULL,2,2,'Jhonny','Riascos','Gerente',CURDATE(),3000000,6),
                             (NULL,2,3,'Mildrey Yuset','Cundumí','Asesora de Ventas',CURDATE(),1700000,3),
                             (NULL,4,NULL,'Ayda Rosa','Riascos Alomía','Asesora Comercial',CURDATE(),12000000,3),
                             (NULL,3,NULL,'Joaquín Antonio','Vallecilla','Director de Mecánicos',CURDATE(),19000000,4),
                             (NULL,2,NULL,'Jhon James','Benitez','Gerente de Publicidad',CURDATE(),12000000,5),
                             (NULL,6,NULL,'Samuel','Bonilla','Desarrollador Web',CURDATE(),22000000,5),
                             (NULL,6,NULL,'Luis Fernando','Ibarguen Sinisterra','Programador',CURDATE(),20000000,4);


#CLIENTES#
INSERT INTO cliente VALUES (NULL,1,"Ingenieros y Asociados WyD","Cali",(60200000*5),CURDATE()),
                           (NULL,2,"Livistong Creativos","Buenaventura",(93990000*4),CURDATE()),
                           (NULL,3,"Willian David Vallecilla Riascos","Buenaventura",(22200000*8),CURDATE()),
                           (NULL,7,"Almacenes Èxitos","Tulúa",(43500000*6),CURDATE()),
                           (NULL,4,"Celsia","Cartago",(93990000*3),CURDATE()), 
                           (NULL,5,"Clínicia Santasofía","Medellín",(84400000*2),CURDATE());

#ENCARGOS#
INSERT INTO encargos VALUES(NULL,1,2,5,CURDATE()),
                           (NULL,2,1,4,CURDATE()),
                           (NULL,3,4,8,CURDATE()),
                           (NULL,4,6,6,CURDATE()),
                           (NULL,4,1,3,CURDATE()),
                           (NULL,5,3,2,CURDATE());