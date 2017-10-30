<?php
include_once "auto.php";

class AlunoControle {

  function listarAlunos(){
    $alunoDAO = new alunoDAO();
    $retorno = $alunoDAO -> buscarTodosAlunos();
    require_once "view/home.php";
  }

}