create database dipsa;
use dipsa;

create table inicio(
	idInicio				int	not null AUTO_INCREMENT,
	bienvenidaHeading 		varchar(150) null,
	bienvenidaSubHeading	varchar(100) null,
	quienesTitulo			varchar(150) null,
	quienesTexto			text null,
	mision					text null,
	vision					text null,
	valores					text null,
	ultimosProyectos1		varchar(30) null,
	ultimosProyectos2		varchar(30) null,
	ultimosProyectos3		varchar(30) null,
	ultimosProyectos4		varchar(30) null,
	ultimosProyectos5		varchar(30) null,
	ultimosProyectos6		varchar(30) null,
    PRIMARY KEY(idInicio)
);					

create table despacho(
	idDespacho				int	not null AUTO_INCREMENT,
	arqTitulo 				varchar(150) null,
	arqTexto				text null,
	ventajasTitulo1			varchar(50) null,
	ventajasTitulo2			varchar(50) null,
	ventajasTitulo3			varchar(50) null,
	ventajasTitulo4			varchar(50) null,
	ventajasTexto1			text null,
	ventajasTexto2			text null,
	ventajasTexto3			text null,
	ventajasTexto4			text null,
	testimoniosPersona1		varchar(50) null,
	testimoniosPersona2		varchar(50) null,
	testimoniosPersona3		varchar(50) null,
	testimoniosTexto1		text null,
	testimoniosTexto2		text null,
	testimoniosTexto3		text null,
    PRIMARY KEY(idDespacho)
);

create table servicios(
	idServicios			int	not null AUTO_INCREMENT,
	servicioTitulo1		varchar(30) null,
	servicioTitulo2		varchar(30) null,
	servicioTitulo3		varchar(30) null,
	servicioTitulo4		varchar(30) null,
	servicioTitulo5		varchar(30) null,
	servicioTitulo6		varchar(30) null,
	servicioTexto1		text null,
	servicioTexto2		text null,
	servicioTexto3		text null,
	servicioTexto4		text null,
	servicioTexto5		text null,
	servicioTexto6		text null,
    PRIMARY KEY(idServicios)
);

create table proyectos(
	idProyectos		int	not null AUTO_INCREMENT,
	numero 			int not null,
	proyectoTitulo	varchar(30) null,
	proyectoTexto	varchar(150) null,
    PRIMARY KEY(idProyectos)
);

create table tipos(
	idTipos	int	not null AUTO_INCREMENT,
	clase	varchar(30) null,
    PRIMARY KEY(idTipos)
);

create table contacto(
	idContacto	int	not null AUTO_INCREMENT,
	direccion	varchar(150) null,
	longitud	float(8,5) null,
	latitud		float(8,5) null,
    PRIMARY KEY(idContacto)
);