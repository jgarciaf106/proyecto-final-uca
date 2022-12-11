<?php


/**
 * User class
 */
class Pet
{

	use Model;
	protected $email_address;
	protected $tel_contacto;
	protected $foto;
	protected $historia;
	protected $nombre;
	protected $fecha_carga;
	protected $disponible;

	protected $table = 'pets';
	protected $table2 = 'users';

	protected $allowedColumns = [

		'id',
		'email_address',
		'foto',
		'historia',
		'nombre',
		'disponible',
		'tel_contacto'
	];

	public function setDeletePet($post_data)
	{
		$this->id = $post_data['delete_id'];
	}

	public function setCreatePet($post_data)
	{
		$this->email_address = $_SESSION['USER'][0]->email_address;
		$this->foto = $post_data['givenPhoto'];
		$this->historia = $post_data['givenHistory'];
		$this->nombre = $post_data['givenName'];
		$this->fecha_carga =  $post_data['givenDate'];
		$this->disponible = 1;
	}

	public function setEditPet($post_data)
	{
		$this->foto = $post_data['editPhoto'];
		$this->historia = $post_data['editHistory'];
		$this->nombre = $post_data['editName'];
		$this->fecha_carga = $post_data['editDate'];
		$this->disponible =  $post_data['editDisponibilidad'];
		$this->email_address = $post_data['editEmail'];
		$this->tel_contacto	= $post_data['editPhone'];
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
			'fecha_carga' => $this->fecha_carga,
			'disponible' => $this->disponible
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
		$pet_id = $_SESSION['PET_EDIT'][0]->id;
		$user_id = $_SESSION['USER'][0]->email_address;

		$edited_pet = [
			'foto' => $this->foto,
			'historia' => $this->historia,
			'nombre' => $this->nombre,
			'fecha_carga' => $this->fecha_carga,
			'disponible' => $this->disponible
		];

		$edited_user = [
			'email_address' => $this->email_address,
			'tel_contacto' => $this->tel_contacto
		];

		$this->update($pet_id, $this->table, $edited_pet, $id_column = 'id');
		$this->update($user_id, $this->table2, $edited_user, $id_column = 'email_address');

		return true;
	}
}
