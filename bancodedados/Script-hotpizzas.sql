create table hotpizza;

use hotpizza;

create table produtos(
id int not null auto_increment,
nome varchar(45) not null,
ingredientes varchar(45) not null,
preco decimal(8,2) not null,
imagem varchar(450) not null,
);

create table cliente(
id int not null auto_increment,
nome varchar(45) not null,
endereco varchar(90) not null,
telefone vatchar(11) not null,
email varchar(450) not null,
cpf varchar(11) not null,
senha varchar(45) not null,
);

create table pedidos(
id int not null auto_increment,
quantidade INT not null,
preco decimal(8,2) not null,
);

create table status_do_pedido(
id int not null auto_increment,
status varchar(45) not null,
);