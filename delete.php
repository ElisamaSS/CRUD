<?php
include 'connection.php';
$id =$_GET['id'];

 $sql = "Delete from cadastro where id = $id";

$deletar = mysqli_query($conn , $sql);
 header("location:http://localhost/CRUD/view.php");
 
?>

