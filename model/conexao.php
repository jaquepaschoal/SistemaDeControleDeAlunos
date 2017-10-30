<?php
	abstract class conexao
	{
		protected $bd;
		
		function __construct()
		{
			//par?metros de conex?o(qual banco de dados, qual ? o servidor e nome banco de dados)
			$parm = "mysql:host=localhost;dbname=controle";
			try
			{
				$this->db = new PDO($parm, "administrador", "9hoKnxRy");
			}
			catch(Exeption $e)
			{
				die($e->getMessage());
			}
		}//construct
	}//classe
?>