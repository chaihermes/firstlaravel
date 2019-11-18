create database laravel;

use laravel;

create table usuarios(
	id int primary key auto_increment,
    nome varchar(300)
);

insert into usuarios values(null, 'Chaiana');
insert into usuarios values(null, 'Pavlos');
insert into usuarios values(null, 'Manu');

select * from usuarios;

create table cidades(
	id int primary key auto_increment,
    nome varchar(300)cidades
);

insert into cidades values(null, 'Sâo Paulo');
insert into cidades values(null, 'Porto Alegre');
insert into cidades values(null, 'Santa Maria');
