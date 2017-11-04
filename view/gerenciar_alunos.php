<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Gerenciar Alunos</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <header class="cabecalho">
          <img src="assets/imgs/ListarAlunos/logofatec.png" class="img-responsive logo" alt="Logo Fatec">
          <section class="title col-md-4 teste"><h1>Gerencie seus alunos</h1></section>
        </header>
      </div>
       
      <div class="row">
        <div class="col-md-10 col-md-offset-1 tbl-alunos">
            <table id="alunos" class="table table-striped table-main" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Número de Matrícula</th>
                  <th>Nome</th>
                  <th>Curso</th>
                  <th>Ações</th>
                </tr>
              </thead>
                <tbody>
                  <tr>
                    <td>oi</td>
                    <td>ola</td>
                    <td>ola</td>
                    <td class="actions">
                      <a title="Alterar" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a title="Excluir" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </td>
                  </tr>  
                  <tr>
                    <td>oi</td>
                    <td>ola</td>
                    <td>ola</td>
                    <td class="actions">
                      <a title="Alterar" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a title="Excluir" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </td>
                  </tr>  
                  <tr>
                    <td>oi</td>
                    <td>ola</td>
                    <td>ola</td>
                    <td class="actions">
                      <a title="Alterar" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a title="Excluir" class="delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </td>
                  </tr>                     
                </tbody>
            </table>
        </div>
      </div>
      
      <div class="row test">
        <?php
          echo"<a class='btn-gerenciar col-md-offset-1' href='index.php?controle=LoginControle&metodo=openHome'><i class='fa fa-plus' aria-hidden='true'></i>Novo Aluno</a>";
        ?>
      </div>
     
      <div class="row">
        <footer class="page-footer">
          <?php
            echo"<a class='options' href='index.php?controle=LoginControle&metodo=openHome'><i class='fa fa-chevron-left'></i>Voltar</a>";
          ?>
        </footer>
      </div>
    </div>
   
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    
  </body>
</html>