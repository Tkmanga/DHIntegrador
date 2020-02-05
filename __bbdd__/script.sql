create database ecommerce; 
use ecommerce;

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

create table empleados(
	idEmpleado int unsigned not null  primary key auto_increment,
    nombre varchar(255) NOT NULL,
    apellido varchar (255) not null, 
    email varchar(255) not null, 
    foto varchar (255), /*ACA DEBE IR LA FOTO DE LEJAGO */
    ingreso datetime not null
);

create table marcas (
	idMarca int unsigned not null  primary key auto_increment, 
    nombre varchar(255) not null 
);

create table categorias (
	idCategoria int unsigned not null  primary key auto_increment,
    nombre varchar(255) not null 
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

create table productos (
	idProducto int unsigned not null auto_increment, 
	nombre varchar (255) not null, 
    precio float not null,
    categoria int unsigned, 
    marca int unsigned,
    stock int unsigned,
    primary key (idProducto),
    foreign key (marca) references marcas(idMarca),
	foreign key (categoria) references categorias(idCategoria)
); 

alter table productos 
add constraint producto_stock foreign key (stock) references stock(idStock);

/*falta resolver el login para crear registros en la base de datos*/