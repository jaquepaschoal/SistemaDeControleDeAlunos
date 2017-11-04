<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <title>Login</title>
</head>
<body>
  <div class="container-fluid">
      <div class="row">
          <header class="cabecalho col-md-12">
              <img src="assets/imgs/ListarAlunos/logofatec.png" class=" col-md-2 img-responsive logo" alt="Logo Fatec">                
              <section class="title col-md-4 teste"><h1>Àrea Administrativa</h1></section>
          </header>
      </div>

      <div class="row ">
        
            <form class="col-md-4 col-xs-12 col-md-offset-4 box">
              <div class="conteudo">
                    <div>
                     <img class="img-user" src="assets/imgs/Login/user.png" alt="">
                    </div>
                    <div class="form-group inpt-login">
                      <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Usuário">
                    </div>
                    <div class="form-group inpt-login">
                      <input type="password" class="form-control"  placeholder="Senha">
                    </div>
                    <?php
                      echo"<a class='btn-login' href='index.php?controle=LoginControle&metodo=openHome'>Entrar</a>";
                    ?>
              </div>
              
            </form>
      </div>

      <div class="row">
          <footer class="page-footer">
            <?php
              echo"<a class='options' href='index.php?controle=AlunoControle&metodo=listarAlunos'><i class='fa fa-chevron-left'></i>Voltar</a>";
            ?>
          </footer>
      </div>
  </div>
  
  <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>