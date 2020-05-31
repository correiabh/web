Boa Noite Orlandro 

Para execulta esse script do site Web destinado a empresa seguradora de veiculo 

Fazer instalacão  xampp-windows 
criar Banco de Dados http://localhost/phpmyadmin/

create database seguradora
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;
create table cliente (
id_cliente int primary key not null auto_increment,
nome varchar (50) not null,
cpf int (11)not null unique,
endereco varchar (50) not null,
telefone int(9) not null
);

create table veiculo(
id_veiculo int primary key not null auto_increment,
v_nome varchar(50) not null,
placa varchar(50)not null,
anofabricacao varchar(9) not null,
valor int(3) not null ,
cpf int(11) not null,
constraint fk_cpf foreign key (cpf) references cliente(cpf)
);


create table sinistro(
id_sinistro int primary key not null auto_increment,
dia date,
Observacao varchar(100) not null,
cpf int(11) not null,
id_veiculos int not null,
constraint cpf foreign key(cpf)references cliente (cpf),
constraint id_veiculos foreign key (id_veiculos) references veiculo (id_veiculos)
);

copiar todos arquivos do Github PARA C:\xampp 1\htdocs cria pasta colar
já no navega entra like http://localhost/nomedapasta/ entrará no site 

Fim
