<?php

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id = 0;
    date_default_timezone_set('America/Sao_Paulo');
    $datacad = date('Y-m-d H:i:s');

    $sql = "insert into cadastro values ($id, '$nome', '$endereco', '$email', '$senha', '$datacad')";



    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "cadastro";

    try {
        $con = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        // set the PDO error mode to exception
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $con->exec($sql);
        header("location:http://localhost/CRUD/view.php");
    }
    catch(PDOException $e){
        echo "Sem conexão: " . $e->getMessage();
    }
?>