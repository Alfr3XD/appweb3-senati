CREATE DATABASE WEB;
USE WEB;

CREATE TABLE REGION
(
	r_id INT PRIMARY KEY,
	r_description VARCHAR(100) NOT NULL
)ENGINE=INNODB;

CREATE TABLE LUGAR
(
	lg_id INT NOT NULL PRIMARY KEY,
	lg_nombre VARCHAR(100) NOT NULL,
	lg_description VARCHAR(100) NOT NULL,
	r_id INT NOT NULL,
	
	CONSTRAINT `FK_distrito_lugar` FOREIGN KEY (`r_id`)
	REFERENCES REGION(`r_id`)
	ON DELETE RESTRICT
   ON UPDATE CASCADE
   
)ENGINE=INNODB;


CREATE TABLE IMAGES
(
	img_id INT NOT NULL PRIMARY KEY,
	img_uri VARCHAR(999) NOT NULL,
	lg_id INT NOT NULL,
	
	CONSTRAINT `FK_lugares_images` FOREIGN KEY (`lg_id`)
	REFERENCES LUGAR(`lg_id`)
	ON DELETE RESTRICT
   ON UPDATE CASCADE
   
)ENGINE=INNODB;

CREATE TABLE IMAGES_I
(
	img_id_i INT PRIMARY KEY AUTO_INCREMENT,
	img_path_i VARCHAR(900)
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

-- lugares
INSERT INTO LUGAR (lg_id, lg_nombre, lg_description, ds_id) VALUES (1, "VIVERO FORESTAL", "Parque grande con un lago de recreación, piscina, atracciones para los niños y un zoológico pequeño.", 1);
INSERT INTO LUGAR (lg_id, lg_nombre, lg_description, ds_id) VALUES (1, "CERRO DE LA PAZ", "Un mirador turístico", 1);

-- IMAGES
INSERT INTO images (img_id, img_description, img_uri, lg_id) VALUES (1, "https://www.lugaresturisticosperu.com/wp-content/uploads/vivero-forestal-de-chimbote.jpg", 1);
INSERT INTO images (img_id, img_description, img_uri, lg_id) VALUES (2, "https://radiorsd.pe/sites/default/files/field/image/vivero_forestal_rsd.jpg", 1);

-- IMAGES DE INICIO

INSERT INTO IMAGES_I (img_path_i) VALUES ("https://tipsparatuviaje.com/wp-content/uploads/2019/07/machu-picchu.jpg");
INSERT INTO IMAGES_I (img_path_i) VALUES ("https://diariocorreo.pe/resizer/5onqOKU3P2cDx2zWdC1hFtFA14k=/1200x1200/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/7Q3AKAPE6BEBZK22SNOTROSL2E.jpg");
INSERT INTO IMAGES_I (img_path_i) VALUES ("https://www.infobae.com/new-resizer/15gz5Eezqt7v4W6Ghyw_LlG16Bk=/1200x628/filters:format(webp):quality(85)//cloudfront-us-east-1.images.arcpublishing.com/infobae/3JKG77X2TBE5TKD64X5SQ74F2Y.jpg");
INSERT INTO IMAGES_I (img_path_i) VALUES ("https://i0.wp.com/adventuretravelperu.com/es/wp-content/uploads/2015/10/huaraz_ancash_peru_travel_turismo.jpg?w=900&ssl=1");
INSERT INTO IMAGES_I (img_path_i) VALUES ("https://www.peru.travel/Contenido/General/Imagen/es/266/1.1/Kuelap.jpg");
INSERT INTO IMAGES_I (img_path_i) VALUES ("https://content.emarket.pe/common/collections/content/99/e9/99e9126a-7185-4e13-82ff-d60514f665ec.png");
INSERT INTO IMAGES_I (img_path_i) VALUES ("https://www.incasperu.com/wp-content/uploads/2020/09/viaje-a-mancora-piura-1024x576.jpg");
INSERT INTO IMAGES_I (img_path_i) VALUES ("https://www.pasosdeviajero.com/viajes-familiares/mancora/images/fulls/mancora.jpg");
INSERT INTO IMAGES_I (img_path_i) VALUES ("https://portal.andina.pe/EDPfotografia3/Thumbnail/2022/03/17/000854339W.jpg");