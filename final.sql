USE dbname;
CREATE TABLE usuarios (
	id_usuario integer NOT NULL AUTO_INCREMENT,
	nombre varchar(50) NOT NULL,
	usuario varchar(50) NOT NULL,
	password varchar(16) NOT NULL,
	PRIMARY KEY(id_usuario)
);

CREATE TABLE alumnos(
	matricula varchar(6) NOT NULL,
	nombre varchar(60) NOT NULL,
	edad integer NOT NULL,
	carrera varchar(5) NOT NULL,
	grupo varchar(5) NOT NULL,
	semestre integer NOT NULL,
	PRIMARY KEY(matricula)
);

CREATE TABLE informacion_personal (
	id_informacion_personal integer NOT NULL AUTO_INCREMENT,
	matricula varchar(6) NOT NULL,
	proyecto_personal varchar(50),
	fortaleza1 varchar(50),
	fortaleza2 varchar(50),
	fortaleza3 varchar(50),
	debilidad1 varchar(50),
	debilidad2 varchar(50),
	debilidad3 varchar(50),
	decidir_proyecto boolean,
	describir_proyecto varchar(100),
	PRIMARY KEY(id_informacion_personal),
    FOREIGN KEY (matricula) REFERENCES alumnos(matricula)
);