<?php
include 'connection.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$email =  $_POST['email'];
$senha =  $_POST['senha'];
date_default_timezone_set('America/Sao_Paulo');
$datacad = date('Y-m-d H:i:s');


 $sql = "UPDATE cadastro SET nome= '$nome',endereco='$endereco',email='$email',senha='$senha', datacad='$datacad' WHERE id = $id";
 
 $atualizar= mysqli_query($conn , $sql);
 
 header("location:http://localhost/CRUD/view.php");
?>