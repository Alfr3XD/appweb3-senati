-- TRABAJO DEL CURSO PE CAUSA
USE WEB;

CREATE TABLE REGION
(
	id INT PRIMARY KEY,
	r_description VARCHAR(100) NOT NULL
)ENGINE=INNODB;

CREATE TABLE PROVINCIA
(
	id INT PRIMARY KEY NOT NULL,
	p_description VARCHAR(100) NOT NULL,
	r_id INT NOT NULL,
	
	CONSTRAINT `FK_region_provincia` FOREIGN KEY (`r_id`)
	REFERENCES REGION(`id`)
	ON DELETE RESTRICT
   ON UPDATE CASCADE
)ENGINE=INNODB;

CREATE TABLE DISTRITO
(
	id INT PRIMARY KEY NOT NULL,
	d_description VARCHAR(100) NOT NULL
	p_id INT NOT NULL,
	
	CONSTRAINT `FK_provincia_distrito` FOREIGN KEY (`p_id`)
	REFERENCES PROVINCIA(`id`)
	ON DELETE RESTRICT
   ON UPDATE CASCADE
)ENGINE=INNODB;


CREATE TABLE LUGAR
(
	id INT NOT NULL PRIMARY KEY,
	nombres VARCHAR(100) NOT NULL,
	l_description VARCHAR(100) NOT NULL,
	ds_id INT NOT NULL,
	
	CONSTRAINT `FK_distrito_lugar` FOREIGN KEY (`ds_id`)
	REFERENCES DISTRITO(`id`)
	ON DELETE RESTRICT
   ON UPDATE CASCADE
   
)ENGINE=INNODB;


CREATE TABLE IMAGES
(
	id INT NOT NULL PRIMARY KEY,
	i_description VARCHAR(100) NOT NULL,
	image_uri VARCHAR(999) NOT NULL,
	lg_id INT NOT NULL,
	
	CONSTRAINT `FK_lugares_images` FOREIGN KEY (`lg_id`)
	REFERENCES LUGAR(`id`)
	ON DELETE RESTRICT
   ON UPDATE CASCADE
   
)ENGINE=INNODB;cdk

-- inserts
 

