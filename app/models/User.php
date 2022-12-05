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
}
