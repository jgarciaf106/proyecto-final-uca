<?php 


/**
 * User class
 */
class Pet
{
	
	use Model;
	protected $email_address;
	protected $foto;
	protected $historia;
	protected $nombre;
	protected $fecha_cargar;

	protected $table = 'pets';
	protected $table2 = 'users';

	protected $allowedColumns = [

		'id',
		'email_address',
		'foto',
		'historia',
		'nombre'
	];

	public function setDeletePet($post_data){
		$this->id = $post_data['delete_id'];		
	}

	public function setCreatePet($post_data){
		$this->email_address = $_SESSION['USER'][0]->email_address;
		$this->foto = $post_data['givePhoto'];
		$this->historia = $post_data['givenHistory'];
		$this->nombre = $post_data['giveName'];		
		$this->fecha_cargar =  date("Y-m-d");
	}

	
	/**
	 * Crea un nuevo registro en la base de datos.
	 */
	public function createPet()
	{
		$new_pet = [
			'email_address' => $this->email_address,
			'foto' => $this->foto,
			'historia' => $this->historia,
			'nombre' => $this->nombre,
			'fecha_carga' => $this->fecha_cargar
		];
		$this->insert($new_pet);
		return true;
		
	}

	
	/**
	 * Elimina el objeto de la base de datos.
	 */
	public function deletePet()
	{
		$this->delete($this->id);
		return true;
	}

	/**
	 * Actualiza el objeto en la base de datos.
	 */
	public function editPet()
	{
		$this->update($this->id,"tt");
	}

}