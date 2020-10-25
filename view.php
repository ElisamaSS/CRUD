<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CRUD</title>
       <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="./assets/style.css" rel="stylesheet">
  </head>
  <body>
      <div class="container">
        <br> </br>
          <div class="starter-template">
            <h1><center>Lista de cadastro </center></h1>
            <br>
            <p class="lead">Nesta tela é possível: Editar, Excluir ou Cancelar a operação. Qual opção deseja?</p>
            <p><a href="http://localhost/CRUD">Voltar a página anterior</a></p>
          </div>
      </div><!-- /.container -->
      
      <div class = "table-responsive col-md-8">
        <table class="table table-bordered table-striped" cellspacing="0" cellpadding= "0">
            <thead>
              <tr>
                <th scope="col"><center>Nome </center></th>
                <th scope="col"><center>Endereço </center></th>
                <th scope="col"><center>E-mail</center></th>
              <th scope="col"><center>Ação</center></th>
              </tr>
            </thead>
          
            <?php
            include 'connection.php';
            
            $sql = "SELECT id, nome, endereco, email, senha, datacad FROM cadastro";
            $busca = mysqli_query($conn , $sql);
            while ($array = mysqli_fetch_array($busca)){
              
              $id = $array['id'];
              $nome= $array ['nome'];
              $endereco = $array['endereco'];
              $email = $array ['email'];
              $senha = $array ['senha'];
              $datacad = $array ['datacad'];
              ?>
                
            <tr class="center">
              <td><?php echo $nome ?></td>
              <td><?php echo $endereco ?></td>
              <td><?php echo $email ?></td>
              <td> 
              <a class="btn btn-warning fas fa-edit" href="edit.php?id=<?php echo $id ?>" role="button"><center> Editar</center></a>
              <a class="btn btn-danger far fa-trash-alt" href="delete.php?id=<?php echo $id ?>" role="button"><center> Excluir</center></a>
              <a href = "http://localhost/CRUD" class="btn btn-secondary fas fa-window-close"><center> Cancelar </center></a></td>
            </tr>
            <?php } ?> 
        </table>
      </div>

      <script src="./assets/js/jquery.js.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>
      <script src="https://kit.fontawesome.com/7b9f6b3a7e.js" crossorigin="anonymous"></script> 

  </body>
</html>