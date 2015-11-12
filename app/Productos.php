<?php

class Productos extends PDO
{
	function __construct()
	{
		parent::__construct( 'mysql:host=127.0.0.1;dbname=vinos', 'root', 'root' );
		$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
		$this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}

	public function consultar($sql, $values = array(), $oneRow = false, $column = -1) {
		$cmd = $this->prepare($sql);
		$cmd->execute($values);
		$data = NULL;

		if ($oneRow)
		{
			//Devueve una sola fila
			$data = $cmd->fetch();
		}
		elseif ($column >= 0)
		{
			//Devuelve solo lo columna especificada en $colum
			$data = $cmd->fetchColumn($column);
		}
		else
		{
			$data = $cmd->fetchAll();
		}
		$cmd->nextRowset();
		$cmd->closeCursor();

		return $data;
	}
}