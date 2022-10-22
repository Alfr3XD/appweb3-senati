CREATE DATABASE WEB;
USE WEB;

CREATE TABLE REGION
(
	r_id INT PRIMARY KEY,
	r_description VARCHAR(100) NOT NULL
)ENGINE=INNODB;

CREATE TABLE PROVINCIA
(
	pr_id INT PRIMARY KEY NOT NULL,
	pr_description VARCHAR(100) NOT NULL,
	r_id INT NOT NULL,
	
	CONSTRAINT `FK_region_provincia` FOREIGN KEY (`r_id`)
	REFERENCES REGION(`r_id`)
	ON DELETE RESTRICT
   ON UPDATE CASCADE
)ENGINE=INNODB;

CREATE TABLE DISTRITO
(
	ds_id INT PRIMARY KEY NOT NULL,
	ds_description VARCHAR(100) NOT NULL,
	pr_id INT NOT NULL,
	
	CONSTRAINT `FK_provincia_distrito` FOREIGN KEY (`pr_id`)
	REFERENCES PROVINCIA(`pr_id`)
	ON DELETE RESTRICT
   ON UPDATE CASCADE
)ENGINE=INNODB;


CREATE TABLE LUGAR
(
	lg_id INT NOT NULL PRIMARY KEY,
	lg_nombre VARCHAR(100) NOT NULL,
	lg_description VARCHAR(100) NOT NULL,
	ds_id INT NOT NULL,
	
	CONSTRAINT `FK_distrito_lugar` FOREIGN KEY (`ds_id`)
	REFERENCES DISTRITO(`ds_id`)
	ON DELETE RESTRICT
   ON UPDATE CASCADE
   
)ENGINE=INNODB;


CREATE TABLE IMAGES
(
	img_id INT NOT NULL PRIMARY KEY,
	img_description VARCHAR(100) NOT NULL,
	img_uri VARCHAR(999) NOT NULL,
	lg_id INT NOT NULL,
	
	CONSTRAINT `FK_lugares_images` FOREIGN KEY (`lg_id`)
	REFERENCES LUGAR(`lg_id`)
	ON DELETE RESTRICT
   ON UPDATE CASCADE
   
)ENGINE=INNODB;

-- inserts
--- regiones
INSERT INTO region (r_id, r_description) VALUES (1, "ÁNCASH");
INSERT INTO region (r_id, r_description) VALUES (2, "LIMA");
INSERT INTO region (r_id, r_description) VALUES (3, "TRUJILLO");
INSERT INTO region (r_id, r_description) VALUES (4, "TUMBES");
INSERT INTO region (r_id, r_description) VALUES (5, "LAMBAYEQUE");
INSERT INTO region (r_id, r_description) VALUES (6, "CAJAMARCA");
INSERT INTO region (r_id, r_description) VALUES (7, "CUSCO");
INSERT INTO region (r_id, r_description) VALUES (8, "ICA");

-- provincias
-- ANCASH
INSERT INTO provincia (pr_id, pr_description, r_id) VALUES (1, "SANTA", 1);
INSERT INTO provincia (pr_id, pr_description, r_id) VALUES (2, "HUARAZ", 1);
INSERT INTO provincia (pr_id, pr_description, r_id) VALUES (3, "CASMA", 1);

-- distritos
-- SANTA
INSERT INTO DISTRITO (ds_id, ds_description, pr_id) VALUES (1, "CHIMBOTE", 1);
INSERT INTO DISTRITO (ds_id, ds_description, pr_id) VALUES (2, "COISHCO", 1);
INSERT INTO DISTRITO (ds_id, ds_description, pr_id) VALUES (3, "MORO", 1);
INSERT INTO DISTRITO (ds_id, ds_description, pr_id) VALUES (4, "NUEVO CHIMBOTE", 1);

-- lugares
-- CHIMBOTE
INSERT INTO LUGAR (lg_id, lg_nombre, lg_description, ds_id) VALUES (1, "VIVERO FORESTAL", "Parque grande con un lago de recreación, piscina, atracciones para los niños y un zoológico pequeño.", 1);
INSERT INTO LUGAR (lg_id, lg_nombre, lg_description, ds_id) VALUES (2, "CERRO DE LA PAZ", "Un mirador turístico", 1);

-- IMAGES
-- VIVERO
INSERT INTO images (img_id, img_description, img_uri, lg_id) VALUES (1, "VIVERO 1", "https://www.lugaresturisticosperu.com/wp-content/uploads/vivero-forestal-de-chimbote.jpg", 1);
INSERT INTO images (img_id, img_description, img_uri, lg_id) VALUES (2, "VIVERO 2", "https://radiorsd.pe/sites/default/files/field/image/vivero_forestal_rsd.jpg", 1);