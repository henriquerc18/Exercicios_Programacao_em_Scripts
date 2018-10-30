CREATE DATABASE IF NOT EXISTS acesso;
USE acesso;
DROP TABLE IF EXISTS tb_acesso;

CREATE TABLE tb_acesso (
	id_acesso   int(11) not null auto_increment,
    desc_acesso varchar(255) not null,
    constraint pk_acesso primary key (id_acesso)
);

insert into tb_acesso(desc_acesso)
values ('Usuario Comum'),
	   ('Administrador');
       
       
drop table if exists tb_usuario;
create table tb_usuario (
	id_usuario int(11) not null auto_increment,
    login_usuario varchar(150) not null,
    senha_usuario varchar(255) not null,
    id_tipo_acesso int(11) not null,
    constraint pk_usuario primary key (id_usuario),
    constraint fk_usuace foreign key (id_tipo_acesso)
			   references tb_acesso (id_acesso)
               on delete cascade
               on update cascade
);

select * from tb_acesso;

