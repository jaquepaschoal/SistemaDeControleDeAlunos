<?php

class alunoDAO extends conexao
	{
		function __construct()
		{
			parent:: __construct();
    }

    function buscarTodosAlunos()
    {
        $sql = "SELECT * FROM aluno";
        try
        {
            $f = $this->db->prepare($sql);
            $ret = $f->execute();
            $this->db = null;
            if(!$ret)
            {
                die("Erro ao buscar Todos os alunos");
            }
            else
            {
                $retorno = $f->fetchAll(PDO::FETCH_OBJ);
                return $retorno;
            }
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

  }
    

