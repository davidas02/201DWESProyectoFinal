create database if not exists DAW201DBLoginLogoff;
use DAW201DBLoginLogoff;
create table if not exists T01_Usuario(
T01_CodUsuario varchar(8) primary key,
T01_Password varchar(255)NOT NULL,
T01_DescUsuario varchar(255),
T01_FechaHoraUltimaConexion datetime,
T01_NumConexiones int default 1,
T01_Perfil enum('usuario','administrador') default 'usuario',
T01_ImagenUsuario MEDIUMBLOB NULL
)engine=innoDB;
create table if not exists T02_Departamento(
    T02_CodDepartamento varchar(3) primary key,
    T02_DescDepartamento varchar(255) NULL,
    T02_FechaBaja int NULL,
    T02_VolumenNegocio float NULL,
    T02_FechaAlta datetime NULL 
)engine=Innodb;
create user if not exists 'userDAW201LoginLogoff'@'%' identified by "paso";
grant all privileges on DAW201DBLoginLogoff.* to 'userDAW201LoginLogoff'@'%';
