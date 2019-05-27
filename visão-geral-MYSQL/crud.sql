use dbphp7;

create TABLE tb_usuarios (
idusuario INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
deslogin varchar(64) not null,
dessenha varchar(256) not null,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

insert into tb_usuarios (deslogin,dessenha) values('root','!@#$');

select * from tb_usuarios;

update tb_usuarios SET dessenha = '123456' where idusuario = 1;

delete from tb_usuarios where idusuario = 1;
