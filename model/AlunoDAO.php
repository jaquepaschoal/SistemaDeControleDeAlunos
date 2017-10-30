<?php

class alunoDAO extends conexao
	{
		function __construct()
		{
			parent:: __construct();
    }

    function buscarTodosAlunos()
    {
        $sql = "SELECT a.RA, a.nome, c.sigla,a.pag_pessoal,a.ano_ingresso FROM aluno a INNER JOIN curso c ON (a.id_curso = c.id_curso)";
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
    

