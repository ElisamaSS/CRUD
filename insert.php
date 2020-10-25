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
        <h1>Cadastre-se</h1>
        <p class="lead">Seja bem-vindo, informe seus dados por gentileza.</p>
		  <form method="post" action="data.php">
      </div>
    </div><!-- /.container -->

    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-10">
              <label for="nome">Nome Completo</label>
              <input type="text" class="form-control" id="nome" name = "nome" required autofocus>
            </div>
            <div class="form-group col-md-10">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" id="endereco" name = "endereco" required>
            </div>
            <div class="form-group col-md-10">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name = "email" required>
            </div>
            <div class="form-group col-md-10">
              <label for="senha">Senha (máximo 8 caractere)</label>
              <input type="password" class="form-control" id="senha" name = "senha"  maxlength="8" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href = "http://localhost/CRUD" class="btn btn-secondary">Cancelar</a></td>
    </div>
    </form>
  
    <script src="./assets/js/jquery.js.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    
  </body>
</html>
