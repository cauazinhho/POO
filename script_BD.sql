create database ti21m;
 
use ti21m;
 
create table endereco(

	codigo int not null auto_increment primary key,

    logadouro varchar(150)not null,

    numero int not null,

    bairro varchar(20)not null,

    cidade varchar(20)not null,

    estado varchar(20)not null,

    cep varchar(10)not null,

    pais varchar(25)not null

)engine = innoDB;
 
create table cliente(

	cpf bigInt not null primary key,

    nome varchar(150)not null,

    telefone varchar(13)not null,

    codigoEndereco int not null,

    precoTotal decimal(10,2)not null

)engine = innoDB;
 
alter table cliente add constraint clienteEndereco

foreign key (codigoEndereco) references endereco(codigo);

 