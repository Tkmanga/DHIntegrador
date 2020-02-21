create database ecommerce; 
use ecommerce;

create table marcas (
	idMarca int unsigned not null  primary key auto_increment, 
    nombre varchar(255) not null 
);

create table categorias (
	idCategoria int unsigned not null  primary key auto_increment,
    nombre varchar(255) not null 
);

create table empleados(
	idEmpleado int unsigned not null  primary key auto_increment,
    nombre varchar(255) NOT NULL,
    apellido varchar (255) not null, 
    email varchar(255) not null, 
    foto varchar (255), /*ACA DEBE IR LA FOTO DE LEJAGO */
    ingreso datetime not null
);

/*hay que averiguar como se utiliza para autenticar usuarios en laravel*/
create table login (
	idLogin int unsigned not null primary key auto_increment, 
    userId int unsigned,
    contrasenia varchar (100) not null,
    acceso bool, 
    nombreUsuario varchar(100) not null 
);

create table usuarios(
	idUsuario int unsigned not null  primary key auto_increment, 
    nombre varchar(255) not null , 
    apellido varchar(255) not null,
    email varchar(255) not null, 
    telefono varchar (255) not null, 
    direccion varchar (255) not null,
    avatar varchar (45) /*ACA DEBERIA IR EL AVATAR DEL USUARIO SI ELIGIO UNO*/
);

create table productos (
	idProducto int unsigned not null auto_increment, 
	nombre varchar (255) not null, 
    precio float not null,
    descripcion varchar (255), 
    categoria int unsigned, 
    marca int unsigned,
    primary key (idProducto),
    foreign key (marca) references marcas(idMarca),
	foreign key (categoria) references categorias(idCategoria)
); 

create table stock (
	idStock int unsigned not null  primary key auto_increment,
    cantidad int not null, 
    fecha datetime not null, 
    producto int unsigned, 
    usuario int unsigned not null,
    foreign key (producto) references productos(idProducto),
    foreign key (usuario) references empleados(idEmpleado)
); 

create table detOrden(
	idDetOrden int unsigned not null  primary key auto_increment, 
    productoId int unsigned not null, 
    cantidad int not null, 
    foreign key (productoId) references productos(idProducto)
); 

create table orden (
	idOrden int unsigned not null  primary key auto_increment, 
    cliente int unsigned, 
    fecha datetime, 
    nroDetOrden int unsigned, 
	foreign key (cliente) references usuarios(idUsuario),
	foreign key (nrodetOrden) references detOrden(idDetOrden)
);	

/*configuraciones adicionales */
alter table empleados 
add  telefono varchar (255) not null;

alter table productos
add imagen varchar (255) not null;

/*falta resolver el login para crear registros en la base de datos!!*/
select * from productos;


/*Creacion de productos para probar conectividad con el proyecto laravel*/
insert into marcas(nombre)values("marca 1");
insert into marcas(nombre)values("marca 2");
insert into marcas(nombre)values("marca 3");
insert into marcas(nombre)values("marca 4");
insert into marcas(nombre)values("marca 5");

insert into categorias(nombre)values("categoria 1");
insert into categorias(nombre)values("categoria 2");
insert into categorias(nombre)values("categoria 3");
insert into categorias(nombre)values("categoria 4");
insert into categorias(nombre)values("categoria 5");


insert into empleados(nombre,apellido,email,foto,ingreso,telefono)values("pepe","uno","pepe@uno.com","img\empleados\avatar.jpg","2009-10-10","1234-5678");
insert into empleados(nombre,apellido,email,foto,ingreso,telefono)values("pepe","dos","pepe@dos.com","img\empleados\avatar.jpg","2009-11-10","1234-6678");
insert into empleados(nombre,apellido,email,foto,ingreso,telefono)values("pepe","tres","pepe@tres.com","img\empleados\avatar.jpg","2009-12-10","1234-7678");
insert into empleados(nombre,apellido,email,foto,ingreso,telefono)values("pepe","cuatro","pepe@cuatro.com","img\empleados\avatar.jpg","2009-10-11","1234-8678");
insert into empleados(nombre,apellido,email,foto,ingreso,telefono)values("pepe","cinco","pepe@cinco.com","img\empleados\avatar.jpg","2009-10-12","1234-9678");

insert into usuarios(nombre,apellido,email,telefono,direccion,avatar) values("user","uno","user@uno.com","3216-4561","calle falsa 123","img\usuarios\usuario_avatar.jpg");
insert into usuarios(nombre,apellido,email,telefono,direccion,avatar) values("user","dos","user@dos.com","3216-4562","calle falsa 223","img\usuarios\usuario_avatar.jpg");
insert into usuarios(nombre,apellido,email,telefono,direccion,avatar) values("user","tres","user@tres.com","3216-4563","calle falsa 323","img\usuarios\usuario_avatar.jpg");
insert into usuarios(nombre,apellido,email,telefono,direccion,avatar) values("user","cuatro","user@cuatro.com","3216-4564","calle falsa 423","img\usuarios\usuario_avatar.jpg");
insert into usuarios(nombre,apellido,email,telefono,direccion,avatar) values("user","cinco","user@cinco.com","3216-4565","calle falsa 523","img\usuarios\usuario_avatar.jpg");

insert into productos(nombre,precio,descripcion,categoria,marca,imagen) values("producto uno",300,"asd asd",1,1,"1.jpg");
insert into productos(nombre,precio,descripcion,categoria,marca,imagen) values("producto dos",600,"asd asd",2,2,"2.jpg");
insert into productos(nombre,precio,descripcion,categoria,marca,imagen) values("producto tres",900,"asd asd",3,3,"3.jpg");
insert into productos(nombre,precio,descripcion,categoria,marca,imagen) values("producto cuatro",1000,"asd asd",4,4,"4.jpg");
insert into productos(nombre,precio,descripcion,categoria,marca,imagen) values("producto cinco",1200,"asd asd",5,5,"5.jpg"); 

insert into stock(cantidad,fecha,producto,usuario) values(100,"2010-09-09",1,1);
insert into stock(cantidad,fecha,producto,usuario) values(200,"2011-09-09",2,2);
insert into stock(cantidad,fecha,producto,usuario) values(300,"2012-09-09",3,3);
insert into stock(cantidad,fecha,producto,usuario) values(400,"2013-09-09",4,4);
insert into stock(cantidad,fecha,producto,usuario) values(500,"2014-09-09",5,5); 


