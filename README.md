# Student-Registration
![Student Registration Thumb](https://raw.githubusercontent.com/BaiaGui/Student-Registration/main/studentRegistrationThumb.png)
Sistema de cadastro e visualização de alunos utilizando HTML, CSS, PHP e MySQL. Este projeto simplifica e agiliza o processo de cadastro e consulta de informações de alunos através de uma interface intuitiva.
## Instruções de configuração:
1) O nome do banco deve ser `alunosbd`
2) Para a criação da tabela, utilize a seguinte query:
```
    CREATE TABLE aluno(
       ra int(6) NOT NULL PRIMARY KEY,
       nome varchar(60),
       data_nasc date,
       sexo char(1),
       email varchar(60),
       endereco varchar(100),
       telefone varchar(30)
    )
```
3) Altere os valores de configuração do banco no arquivo `connection.php`. <br>
   As variáveis `$host`, `$user`, `$pswd`, `$dbname` (host, usuário, senha, nome do banco) armazenam os dados para a conexão com banco.
