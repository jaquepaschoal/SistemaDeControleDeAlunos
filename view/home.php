<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Listar Alunos</title>

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
        </header>
      </div>
       
      <div class="row">
        <div class="col-md-10 col-md-offset-1 tbl-alunos">
            <table id="alunos" class="table table-striped table-main" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Número de Matrícula</th>
                  <th>Ano Ingresso</th>
                  <th>Curso</th>
                  <th>Documentos</th>
                </tr>
              </thead>
                <tbody>
                  <?php
                    foreach($retorno as $dado){
                      echo "<tr>";
                        echo "<td>{$dado->nome}</td>";
                        echo "<td>{$dado->RA}</td>";
                        echo "<td>{$dado->ano_ingresso}</td>";
                        echo "<td>{$dado->sigla}</td>";
                        echo "<td>";
                          echo "<a class='document-btn' title='Página Pessoal' href='{$dado->pag_pessoal}'target='_blank'><i class='fa fa-user-o' ></i></a> ";
                          echo "<a class='document-btn' title='TCC' href='#' target='_blank'><i class='fa fa-book' ></i></a>";
                          echo "<a class='document-btn' title='Sistema' href='#' target='_blank'><i class='fa fa-laptop' ></i></a>";
                          echo "<a class='document-btn' title='Folha de Aprovação' href='#' target='_blank'><i class='fa fa-file-text' ></i></a>";
                        echo "</td>";
                      echo "</tr>";
                    }
                  ?>                       
                </tbody>
            </table>
        </div>
      </div>
       
       <div class="row">
            <footer class="page-footer">
              <?php
                echo"<a class='options' href='index.php?controle=LoginControle&metodo=openLogin'>Administrador</a> | <a class='options' href='#'>Àrea do Aluno</a>";
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