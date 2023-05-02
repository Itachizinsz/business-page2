<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Template de login, usando Bootstrap.</title>

    <!-- link JS -->
    <script src="../js/script.js"></script>

    <!-- Principal CSS do Bootstrap -->
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/cadastro2.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="php/cadastrarUsuario.php">
     <h1 class="h3 mb-3 font-weight-normal">cadastre-se</h1>

      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Seu email" required autofocus>

      <label for="inputName" class="sr-only">Nome</label>
      <input type="nome" id="nome" name="nome" class="form-control" placeholder="Seu nome" required autofocus>

      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="senha" required>
      <div class="checkbox mb-3">

        <label>
          <input type="checkbox" value="remember-me" id="remember-me"> Lembrar de mim
        </label>

      </div>
      <button id="login"class="btn btn-lg btn-primary btn-block" type="submit">cadastro</button>
      <label>
        <a href="index.php" id="cadastro" >Faça Login</a>
        </label>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>


  </body>
</html>