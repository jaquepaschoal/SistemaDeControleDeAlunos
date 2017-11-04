<?php
include_once "auto.php";

class AlunoControle {

  function listarAlunos(){
    $alunoDAO = new alunoDAO();
    $retorno = $alunoDAO -> buscarTodosAlunos();
    require_once "view/home.php";
  }

  function gerenciarAlunos() {
    require_once "view/gerenciar_alunos.php";
  }
}