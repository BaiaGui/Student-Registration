CREATE TABLE aluno(
    ra int(6) NOT NULL PRIMARY KEY,
    nome varchar(60),
    data_nasc date,
    sexo char(1),
 	email varchar(60),
    endereco varchar(100),
    telefone varchar(30)
)