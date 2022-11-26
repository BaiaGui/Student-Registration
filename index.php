<?php 
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
      }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar Aluno</title>
</head>
<body>
    <header>
        <p class="logo">SI401 - PHP</h1>
    </header>
    <div class="sideBarMenu">
        <ul>
            <li><a href="index.php" class="menuLink">Cadastrar</a></li>
            <li><a href="cadastros.php" class="menuLink">Alunos Cadastrados</a></li>
        </ul>
    </div>
    <div class="container">
    <?php 
                if(isset($_SESSION['connError'])){
                    echo "<p class='errorMsg'>Conexão com o banco falhou!</p>";
                    unset($_SESSION['connError']);
                }
                if(isset($_SESSION['success'])){
                    if($_SESSION['success']==1){
                        echo '<p class="successMsg">Cadastro realizado com sucesso!</p>';
                        unset($_SESSION['success']);
                    }else{
                        echo '<p class= "errorMsg">Erro ao cadastrar: <br>' .$_SESSION['success'].'</p>';
                        unset($_SESSION['success']);
                    }
                }

        ?>
        <h1 class="pageTitle">Cadastrar Aluno</h1>
        <div class="baseContainer formCont">
            <form action="processForm.php" name="formUserCad" method="POST">
                <input type="text" placeholder="RA" id="ra" name="ra" required>
                <input type="text" placeholder="Nome" id="nome" name="nome" required>
    
                <input type="text" placeholder="Data Nascimento" id="dataNasc" onfocus="(this.type='date')"  onblur="(this.type='text')" name="datanasc" required>
                <!-- <input type="text" placeholder="Sexo" id="sexo" name="sexo" required> -->
                <select name="sexo" id="sexo" placeholder="Sexo" required>
                    <option value="" disabled selected>Sexo</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
                <input type="email" placeholder="Email" id="email" name="email" required>
    
                <input type="text" placeholder="Endereço" id="endereco" name="endereco" required>
                <input type="tel" placeholder="Telefone" id="telefone" name="telefone" required>
    
                <input type="submit" value="Cadastrar" id="sendFormBtn" name="cadUser">
                <!--
                    RA
                    Nome
                    Data Nasc
                    Sexo
                    Email
                    Endereço
                    Telefone
    
                    Cadastrar
                -->
            </form>
        </div>

    </div>
</body>
</html>