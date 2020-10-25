<?php
include 'connection.php';
$id =$_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CRUD</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <br>
    <br>
      <div class="container">
        <div class="starter-template">
          <h1>Small Register</h1>
          <p class="lead">O que deseja alterar?</p>
        </div>
      </div><!-- /.container -->
    <form method="post" action="update.php">
      <div class="container">
        <?php
          $sql="SELECT * FROM cadastro WHERE id = $id";
          $busca = mysqli_query($conn , $sql);
        while ($array = mysqli_fetch_array($busca)){
          
          $id = $array['id'];
          $nome= $array ['nome'];
          $endereco = $array['endereco'];
          $email = $array ['email'];
          $senha = $array ['senha'];
          $datacad = $array ['datacad'];
          ?>
        <div class="form-row">
          <div class="form-group col-md-10">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name = "nome" value = "<?php echo $nome ?>">
          <input type="number" class="form-control" id="nome" name = "id" value = "<?php echo $id ?>" style = "display:none">
          </div>
          <div class="form-group col-md-10">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name = "endereco" value = "<?php echo $endereco ?>">
          </div>
            <div class="form-group col-md-10">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name = "email" value = "<?php echo $email ?>">
            </div>
            <div class="form-group col-md-10">
              <label for="senha">Senha (máximo 8 caractere)</label>
              <input type="password" class="form-control" id="senha" name = "senha" maxlength="8" value = "<?php echo $senha ?>">
            </div>
          
          </div>
          <button type="submit" id= "botao" class="btn btn-primary">Atualizar</button>
          <a href = "view.php" class="btn btn-secondary">Cancelar</a></td>
        </div>
        <?php } ?>
      </div><!-- /.container -->
    </form>
  
    <script src="./assets/js/jquery.js.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

  </body>
</html>
