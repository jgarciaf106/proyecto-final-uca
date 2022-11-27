<?php

/**
 * Main Model trait
 */
trait Model
{
	use Database;

	public $errors 		= [];


	public function findAll($order, $order_type)
	{
		$query = "SELECT * FROM " . $this->table . " ORDER BY " . $order . " " . $order_type;
		return $this->query($query);
	}


	public function where($column, $operator, $value)
	{
		$query = "SELECT * FROM " . $this->table . " WHERE " . $column . " " . $operator . " ?";
		return $this->query($query, [$value]);
	}

	//function to get first record input email value to query database limit 1
	public function first($data)
	{
		$query = "SELECT * FROM " . $this->table . " WHERE " . key($data) . " = ? LIMIT 1";
		return $this->query($query, [$data[key($data)]]);
	}
	

	// function insert value in data base receive array and use query from database
	public function insert($data)
	{
		$columns = implode(", ", array_keys($data));
		$values = implode(", ", array_fill(0, count($data), "?"));
		$query = "INSERT INTO " . $this->table . " (" . $columns . ") VALUES (" . $values . ")";
		return $this->query($query, array_values($data));
	}

	public function update($id, $data, $id_column = 'id')
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
		$query = "update $this->table set ";

		foreach ($keys as $key) {
			$query .= $key . " = :" . $key . ", ";
		}

		$query = trim($query, ", ");

		$query .= " where $id_column = :$id_column ";

		$data[$id_column] = $id;

		$this->query($query, $data);
		return false;
	}

	public function delete($id, $id_column = 'id')
	{

		$data[$id_column] = $id;
		$query = "delete from $this->table where $id_column = :$id_column ";
		$this->query($query, $data);

		return false;
	}
}
