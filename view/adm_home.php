<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <title>Início</title>
</head>
<body>
  <div class="container-fluid">
      <div class="row">
          <header class="cabecalho col-md-12">
              <img src="assets/imgs/ListarAlunos/logofatec.png" class=" col-md-2 img-responsive logo" alt="Logo Fatec">                
              <section class="title col-md-6 teste"><h1>Bem Vindo(a) Jaqueline !</h1></section>
          </header>
      </div>

      <div class="row menu">
        <div class="block col-md-3 col-xs-12">
          <img src="assets/imgs/adm_home/lista.png" class="img-responsive" alt="Imagem de uma lista">                
          <p class="box-title col-md-12">Gerenciar Alunos</p>
          <p class="col-md-11 description">Aqui você pode cadastrar os seus alunos bla bla bla bla</p>
          <?php
              echo" <a class='btn-login' href='index.php?controle=AlunoControle&metodo=gerenciarAlunos'>IR</a>";
          ?>
        </div>

        <div class="block col-md-3  col-xs-12">
          <img src="assets/imgs/adm_home/prancheta.png" class="img-responsive" alt="Imagem de uma prancheta">                
          <p class="box-title col-md-12"> Aprovar Tcc's</p>
          <p class="col-md-11 description">Aqui você pode cadastrar os seus alunos bla bla bla bla</p>
          <button class="btn-login" type="submit">IR</button>
        </div>

        <div class="block col-md-3  col-xs-12">
          <img src="assets/imgs/adm_home/grupo.png" class="img-responsive" alt="Imagem de uma prancheta">                
          <p class="box-title col-md-12"> Novas Turmas</p>
          <p class="col-md-11 description">Aqui você pode cadastrar os seus alunos bla bla bla bla</p>
          <button class="btn-login" type="submit">IR</button>
        </div>
      </div>

      <div class="row">
          <footer class="page-footer logout">
            <?php
              echo" <a class='options' href='index.php?controle=AlunoControle&metodo=listarAlunos'><i class='fa fa-sign-out'></i>Sair</a>";
            ?>
          </footer>
      </div>
  </div>
  
  <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>