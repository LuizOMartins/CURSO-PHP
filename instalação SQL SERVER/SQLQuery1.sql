
CREATE TABLE tb_usuarios(
idusuario INT NOT NULL IDENTITY PRIMARY KEY,
deslogin varchar(64) not null,
dessenha varchar(256) not null,
drcadastro DATETIME NOT NULL DEFAULT GETDATE()   
);


SELECT * FROM tb_usuarios;

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('user','@#%');