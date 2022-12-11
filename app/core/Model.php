<?php

/**
 * Main Model trait
 */
trait Model
{
	use Database;

	public $errors 	= [];

	/**
	 * Devuelve el resultado de una consulta que selecciona todas las filas de la tabla y las ordena por
	 * los parámetros order y order_type
	 * 
	 * @param order el nombre de la columna para ordenar por
	 * @param order_type ASC o DESC
	 * 
	 * @return La consulta está siendo devuelta.
	 */
	public function findAll($order, $order_type)
	{
		$query = "SELECT * FROM " . $this->table . " ORDER BY " . $order . " " . $order_type;
		return $this->query($query);
	}

	public function join($join_column1, $join_column2, $where_column, $order, $order_type, $where_value, $sel_colums = [],)
	{
		$columns = implode(", ", array_keys($sel_colums));
		$query = "SELECT " . $columns . " FROM " . $this->table . " AS p INNER JOIN " . $this->table2 . " AS u ON p." . $join_column1 . " = u." . $join_column2 . " WHERE p." . $where_column . " = '" . $where_value . "' ORDER BY p." . $order . " " . $order_type;
		return $this->query($query);
	}

	/**
	 * Devuelve el resultado de la consulta.
	 * 
	 * @param column El nombre de la columna en la que desea buscar.
	 * @param operator =, !=, &gt;, &lt;, &gt;=, &lt;=, COMO, NO COMO, EN, NO EN, ENTRE, NO ENTRE, ES
	 * NULO, NO ES NULO
	 * @param value El valor que se utilizará en la consulta.
	 * 
	 * @return El método de consulta se llama con la consulta y el valor.
	 */
	public function where($column, $operator, $value)
	{
		$query = "SELECT * FROM " . $this->table . " WHERE " . $column . " " . $operator . " ?";
		return $this->query($query, [$value]);
	}


	/**
	 * Devuelve la primera fila de la tabla.
	 * 
	 * @param data Los datos que se utilizarán en la consulta.
	 * 
	 * @return La primera fila de la tabla que coincide con la clave y el valor de la matriz de datos.
	 */
	public function first($data)
	{
		$query = "SELECT * FROM " . $this->table . " WHERE " . key($data) . " = ? LIMIT 1";
		return $this->query($query, [$data[key($data)]]);
	}

	/**
	 * Toma una matriz de datos y la inserta en la base de datos.
	 * 
	 * @param data Los datos a insertar en la base de datos.
	 * 
	 * @return El método de consulta se llama con la consulta y la matriz de valores.
	 */
	public function insert($data)
	{
		$columns = implode(", ", array_keys($data));
		$values = implode(", ", array_fill(0, count($data), "?"));
		$query = "INSERT INTO " . $this->table . " (" . $columns . ") VALUES (" . $values . ")";
		return $this->query($query, array_values($data));
	}

	/**
	 * Toma una matriz de datos y actualiza la base de datos con los datos
	 * 
	 * @param id La identificación de la fila que desea actualizar
	 * @param data una matriz de datos para ser insertada en la base de datos
	 * @param id_column El nombre de la columna de la clave principal.
	 * 
	 * @return El valor devuelto es el número de filas afectadas por la última instrucción SQL.
	 */
	public function update($id, $table, $data, $id_column)
	{

		/** remove unwanted data **/
		if (!empty($this->allowedColumns)) {
			foreach ($data as $key => $value) {

				if (!in_array($key, $this->allowedColumns)) {
					unset($data[$key]);
				}
			}
		}

		$keys = array_keys($data);
		$query = "update $table set ";

		foreach ($keys as $key) {
			$query .= $key . " = :" . $key . ", ";
		}

		$query = trim($query, ", ");

		$query .= " where $id_column = :$id_column ";

		$data[$id_column] = $id; 

		$this->query($query, $data);
		return false;
	}

	
	/**
	 * Elimina un registro de la base de datos.
	 * 
	 * @param id La identificación de la fila que desea eliminar
	 * @param id_column El nombre de la columna de la clave principal.
	 * 
	 * @return El valor de retorno es falso.
	 */
	
	public function delete($id, $id_column = 'id')
	{
		$query = "DELETE FROM " . $this->table . " WHERE " . $id_column . " = ?";
		$this->query($query, [$id]);
		return True;
	}
}
