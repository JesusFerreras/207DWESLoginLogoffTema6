create database if not exists DB207DWESLoginLogoffTema6;

create user if not exists 'user207DWESLoginLogoffTema6'@'%' identified by 'paso';
grant all privileges on DB207DWESLoginLogoffTema6.* to 'user207DWESLoginLogoffTema6'@'%';

create table if not exists DB207DWESLoginLogoffTema6.T01_Usuario(
    T01_CodUsuario varchar(8) primary key,
    T01_Password varchar(255) not null,
    T01_DescUsuario varchar(255) not null,
    T01_NumConexiones int default 0 not null,
    T01_FechaHoraUltimaConexion datetime default now() not null,
    T01_Perfil enum('usuario', 'administrador') not null,
    T01_ImagenUsuario blob
)engine=innodb;

create table if not exists DB207DWESLoginLogoffTema6.T02_Departamento(
    T02_CodDepartamento char(3) primary key,
    T02_DescDepartamento varchar(255) not null,
    T02_FechaCreacionDepartamento datetime default now(),
    T02_VolumenDeNegocio float not null,
    T02_FechaBajaDepartamento datetime
)engine=innodb;