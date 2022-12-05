<?php 

Trait Database
{

	/**
	 * Se conecta a la base de datos. 
	 * Toma los datos de DBHOST y DBNAME como variables desde config.php
	 * @return La conexión a la base de datos.
	 */
	private function connect()
	{
		$string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
		$con = new PDO($string,DBUSER,DBPASS);
		return $con;
	}

	/**
	 * Toma una consulta y una matriz de datos, se conecta a la base de datos, prepara la consulta,
	 * ejecuta la consulta y devuelve el resultado.
	 * 
	 * @param query La consulta que desea ejecutar.
	 * @param data Los datos a insertar en la base de datos.
	 * 
	 * @return Una matriz de objetos.
	 */
	public function query($query, $data = [])
	{

		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
		if($check)
		{
			$result = $stm->fetchAll(PDO::FETCH_OBJ);
			if(is_array($result) && count($result))
			{
				return $result;
			}
		}

		return false;
	}	
}


