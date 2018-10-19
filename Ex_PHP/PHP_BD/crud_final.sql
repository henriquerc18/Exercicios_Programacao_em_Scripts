CREATE DATABASE IF NOT EXISTS crud_final;
USE crud_final;
DROP TABLE IF EXISTS produto;
CREATE TABLE produto (
	id int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    nome varchar(30) NOT NULL,
    descricao varchar(40) NOT NULL,
    constraint pk_produto PRIMARY KEY(id)
    );
    
    DESCRIBE produto;
    
    
insert into produto (Nome, Descricao) VALUES ('Feijão', 'fhgsfg');
SELECT * FROM produto;