/*CRIAR O BANCO DE DADOS*/
CREATE DATABASE IF NOT EXISTS exemplo_crud;

/*CONECTAR-SE À BASE DE DADOS CRIADA*/
USE exemplo_crud;

/*Excluir qualquer coisa que tenha no banco de dados*/
DROP TABLE IF EXISTS produto;

/*Criar a tabela produto*/
CREATE TABLE produto(
    id          int(5) zerofill not null auto_increment,
    nome        varchar(30)     not null,
    descricao   varchar(50)     not null,
    CONSTRAINT pk_produto PRIMARY KEY(id)
);
