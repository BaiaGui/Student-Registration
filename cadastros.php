<?php
    include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Aluno Cadastrados</title>
</head>
<body>
    <header>
         <p class="logo">SI401 - PHP</p>
    </header>
    <div class="sideBarMenu">
        <ul>
            <li><a href="index.php" class="menuLink">Cadastrar</a></li>
            <li><a href="cadastros.php" class="menuLink">Alunos Cadastrados</a></li>
        </ul>
    </div>
    <div class="container">
        <h1 class="pageTitle">Alunos Cadastrados</h1>
        <div class="baseContainer cadCont">
            <table>
                <tr class="tableHeader">
                    <th class="tableTitle">RA</th>
                    <th class="tableTitle">Nome</th>
                    <th class="tableTitle">Idade</th>
                    <th class="tableTitle">Sexo</th>
                    <th class="tableTitle">Email</th>
                    <th class="tableTitle">Telefone</th>
                    
                    <th class="tableTitle">Endereço</th> 
                </tr>
                <?php
                    $selectStudents= "SELECT ra, nome, TIMESTAMPDIFF(YEAR, data_nasc, CURDATE()) as idade, sexo, email, telefone, endereco  FROM aluno";
                    $students=$conn->query($selectStudents);

                    while($row = $students->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr class="tableRow">
                                <td class="tableText">'.$row["ra"].'</td>
                                <td class="tableText">'.$row["nome"].'</td>
                                <td class="tableText">'.$row["idade"].'</td>
                                <td class="tableText">'.$row["sexo"].'</td>
                                <td class="tableText">'.$row["email"].'</td>
                                <td class="tableText">'.$row["telefone"].'</td>
                                <td class="tableText">'.$row["endereco"].'</td>
                            </tr>';
                    }
                
                ?>
            </table>
        </div>
    </div>
</body>
</html>