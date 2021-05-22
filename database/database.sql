/*Elimina la base de datos si existe*/
DROP DATABASE IF EXISTS siscert;
/*Crea la base de datos si no existe*/
CREATE DATABASE IF NOT EXISTS siscert;
/*Usa la base de datos para crear las tablas */
USE siscert;

--Estructura de la tabla alumno
create table tb_alumno(
    id int,
    nombre varchar(25),
    appat varchar(50),
    apmat varchar(50),
    telefono varchar(12),
    estado varchar(10),
    primary key(id))engine=InnoDB;

--Estructura de la tabla curso
create table tb_curso(
    id int,
    nombre varchar(30),
    estado varchar(1),
    primary key(id))engine=InnoDB;

--Estructura de la tabla profesor
create table tb_profesor(
    id int,
    nombre varchar(25),
    appat varchar(50),
    apmat varchar(50),
    telefono varchar(12),
    estado varchar(1),
    primary key(id))engine=InnoDB;

--Estructura de la tabla usuarios
create table tb_users(
    id int,
    usuario varchar(20),
    email varchar(50),
    pswd varchar(100),
    estado varchar(1),
    tipo varchar(15),
    primary key(id))engine=InnoDB;

--Volcado de datos de la tabla alumno
insert into tb_alumno(id, nombre, appat, apmat, telefono, estado) values(NULL, 'Emmanuel', 'Espinoza', 'Estrada', '9612699924', '1');

--Volcado de datos de la tabla curso
insert into tb_curso(id, nombre, estado) values(NULL, 'Programación web', '1');

--Volcado de datos de la tabla profesor
insert into tb_profesor(id, nombre, appat, apmat, telefono, estado) values (NULL, 'Joel de Jesús', 'Monterrosa', 'López', '9612235587', '1');

--Volcado de datos de la tabla users, la contraseña encriptada es Contraseña: 12345
insert into tb_users(id, usuario, email, pswd, estado, tipo) values (NULL, 'Admin', 'admin@correo.com', '$2y$10$wazTGyt8b0eB7LeNopOBLe1r.jkdtt4MRAPYEBXJyu86HckHWYmb.', '1', 'Administrador');