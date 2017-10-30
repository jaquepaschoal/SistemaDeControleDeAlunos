<?php
  class Aluno  
  {
    private $id_aluno;
    private $ra;
    private $nome;
    private $curso;
    private $ano_ingresso;
    private $tcc;
    private $data_tcc;
    private $titulo_tcc;
    private $pag_pessoal;
    private $sistema;
    private $folha_aprovacao;
    private $senha;
    private $email;

    function  __construct($id_aluno="", $ra="", $nome="", $curso="",
                          $ano_ingresso = "", $tcc = "", $data_tcc = "", 
                          $titulo_tcc = "", $pag_pessoal = "", $sistema = "", 
                          $folha_aprovacao = "", $senha = "", $email = "")
		{
			$this->id_aluno = $id_aluno;
			$this->ra = $ra;
			$this->nome = $nome;
			$this->curso = $curso;
      $this->ano_ingresso = $ano_ingresso;
      $this->tcc = $tcc;
			$this->data_tcc = $data_tcc;
			$this->titulo_tcc = $titulo_tcc;
      $this->pag_pessoal = $pag_pessoal;
      $this->sistema = $sistema;
			$this->folha_aprovacao = $folha_aprovacao;
			$this->senha = $senha;
			$this->email = $email;
			
		}
  }
  
?>