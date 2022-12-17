<?php

/**
 * User class
 */
class User
{
	use Model;

	protected $email_address;
	protected $full_name;
	protected $tel_contacto;
	protected $password;

	protected $table = 'users';
	protected $allowedColumns = [
		'email_address',
		'full_name',
		'tel_contacto',
		'password'
	];


	/**
	 * Toma una matriz de publicaciones y establece las propiedades de dirección de correo electrónico y
	 * contraseña de la clase.
	 * 
	 * @param post_data La matriz de datos que se publicó en la página.
	 */
	public function setLoginDetails($post_data)
	{
		$this->email_address = $post_data['logEmail'];
		$this->password = $post_data['logPassword'];
	}

	/**
	 * Esta función establece los valores de las propiedades de la clase en los valores de los datos de la
	 * publicación.
	 * 
	 * @param post_data La matriz de datos que se publicó en el formulario.
	 */
	public function setCreateUserDetails($post_data)
	{
		$this->email_address = $post_data['inputEmail'];
		$this->full_name = $post_data['inputName'];
		$this->tel_contacto = $post_data['inputPassword'];
		$this->password = $post_data['inputPhone'];
	}

	/**
	 * Esta función establece los valores de las propiedades de la clase en los valores de los datos de la
	 * publicación.
	 * 
	 * @param post_data La matriz de datos que se publicó en el formulario.
	 */
	public function setUpdateUserDetails($post_data)
	{
		$this->email_address = $post_data['profileEmail'];
		$this->full_name = $post_data['profileName'];
		$this->tel_contacto = $post_data['profileTelefono'];
		$this->password = $post_data['profilePassword'];
	}

	/**
	 * Esta función establece los valores de las propiedades de la clase en los valores de los datos de la
	 * publicación.
	 * 
	 * @param post_data La matriz de datos que se publicó en el formulario.
	 */
	public function setDeleteUserDetails($post_data)
	{
		$this->email_address = $post_data['deleteProfile'];
	}

	/**
	 * Devuelve los datos del usuario.
	 * 
	 * @return El objeto de usuario.
	 */
	public function details()
	{
		$user = $this->first(['email_address' => $this->email_address]);
		unset($user['password']);

		return $user;
	}

	/**
	 * Si el usuario existe, verifica la contraseña, si la contraseña es correcta, establezca la sesión y
	 * devuelva verdadero, de lo contrario, devuelva falso.
	 * 
	 * @param email La dirección de correo electrónico del usuario
	 * @param password La contraseña que se va a codificar.
	 */
	public function login()
	{
		$user = $this->where('email_address', "=", $this->email_address);

		if ($user) {
			if ($this->password == $user[0]->password) {
				return true;
			} else {

				return false;
			}
		}
	}


	/**
	 * Si el usuario existe, devuelve verdadero. Si el usuario no existe, crea el usuario y devuelva falso
	 * 
	 * @param data Los datos a insertar en la base de datos.
	 * 
	 * @return un valor booleano.
	 */
	public function createUser()
	{
		$user = $this->first(['email_address' => $this->email_address]);

		if ($user) {
			return true;
		} else {
			$new_user = [
				'email_address' => $this->email_address,
				'full_name' => $this->full_name,
				'tel_contacto' => $this->tel_contacto,
				'password' => $this->password
			];
			$this->insert($new_user);
			return false;
		}
	}


	/**
	 * Actualiza la información del usuario en la base de datos.
	 * 
	 * @return un valor booleano.
	 */
	public function updateUser()
	{
		$user = $this->first(['email_address' => $this->email_address]);

		if ($user) {
			$update_user = [
				'email_address' => $this->email_address,
				'full_name' => $this->full_name,
				'tel_contacto' => $this->tel_contacto,
				'password' => $this->password
			];
			$this->update($user[0]->email_address, $this->table, $update_user, $column_id = 'email_address');
			return true;
		} else {
			return false;
		}
	}



	/**
	 * Elimina un usuario de la base de datos.
	 * 
	 * @return El valor devuelto es un valor booleano.
	 */
	public function deleteUser()
	{
		$user = $this->first(['email_address' => $this->email_address]);

		if ($user) {
			$this->delete($user[0]->email_address, $column_id = 'email_address');
			return true;
		} else {
			return false;
		}
	}
}
