<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
  }

$host="localhost";
$user="root";
$pswd="";
$dbname="alunosbd";

//form
$ra=$_POST["ra"];
$nome=$_POST["nome"];
$datanasc=$_POST["datanasc"];
$sexo=$_POST["sexo"];
$email=$_POST["email"];
$endereco=$_POST["endereco"];
$telefone=$_POST["telefone"];

try{
$conn= new PDO("mysql:host=$host; dbname=$dbname", $user, $pswd);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){
    $_SESSION['connError']=1;
    header("location: index.php");
    
}

$insertQuery="INSERT INTO aluno (ra, nome, data_nasc, sexo, email, endereco, telefone)
VALUES (".$ra.", '".$nome."', '".$datanasc."', '".$sexo."', '".$email."', '".$endereco."', '".$telefone."')";

try{
    if($conn->exec($insertQuery)){
        $_SESSION['success']=1;
        header("location: index.php");
    }
}
catch(PDOException $e){
    $_SESSION['success']=$e->getMessage();
    header("location: index.php");
}



?>