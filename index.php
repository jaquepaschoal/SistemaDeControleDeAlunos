<?php
    if($_GET){
        $controle = $_GET['controle'];
        $metodo = $_GET['metodo'];
        require_once "controller/$controle.php";
        $obj = new $controle;
        $obj -> $metodo();
    }
    else{
        require_once "controller/AlunoControle.php";
        $ini = new AlunoControle();
        $ini -> listarAlunos();
    }

