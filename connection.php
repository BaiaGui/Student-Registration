<?php

$host="localhost";
$user="root";
$pswd="";
$dbname="alunosbd";

try{
    $conn= new PDO("mysql:host=$host; dbname=$dbname", $user, $pswd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    catch(PDOException $e){
        $_SESSION['connError']=1;
        header("location: index.php");
        
    }

?>