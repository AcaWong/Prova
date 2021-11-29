<?php

session_start();
require_once "../model/consultas.class.php";
$cad = new Consultas();
$nome= $_POST["campo_nome"];
$email= $_POST["campo_email"];
$senha= $_POST["campo_senha"];
$sexo= $_POST["rad_sexo"];
$numero= $_POST["campo_telefone"];





    
    $cad->inserirUsuario($nome, $email, $senha,$sexo,$numero);
    header("Location:../index.php");      
    
   



?>
