CREATE TABLE usuario (
	id integer NOT NULL AUTO_INCREMENT,
	password varchar(16) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE alumno(
	matricula varchar(6) NOT NULL,
	nombre varchar(60) NOT NULL,
	edad integer NOT NULL,
	carrera varchar(5) NOT NULL,
	grupo varchar(5) NOT NULL,
	semestre integer NOT NULL,
	PRIMARY KEY(matricula)
);

CREATE TABLE personal (
	id_personal integer NOT NULL AUTO_INCREMENT,
	matricula varchar(6) NOT NULL,
	proyecto_personal varchar(50),
	fortaleza1 varchar(50),
	fortaleza2 varchar(50),
	fortaleza3 varchar(50),
	devilidad1 varchar(50),
	devilidad2 varchar(50),
	devilidad3 varchar(50),
	decidir_proyecto boolean,
	describir_proyecto varchar(100),
	PRIMARY KEY(id_personal),
    FOREIGN KEY (matricula) REFERENCES alumno(matricula)
);