<?php

/**
 * User class
 */
class User
{
	use Model;

	protected $table = 'users';

	protected $allowedColumns = [

		'email_address',
		'full_name',
		'password'
	];


	/**
	 * Devuelve los datos del usuario.
	 * 
	 * @return El objeto de usuario.
	 */
	public function details($user_id)
	{
		
		$user = $this->first($user_id);

		return $user;
	}
	

	/**
	 * Si el usuario existe, verifica la contraseña, si la contraseña es correcta, establezca la sesión y
	 * devuelva verdadero, de lo contrario, devuelva falso.
	 * 
	 * @param email La dirección de correo electrónico del usuario
	 * @param password La contraseña que se va a codificar.
	 */
	public function login($email, $password)
	{

		$user = $this->where('email_address', "=", $email);

		if ($user) {
			if ($password == $user[0]->password) {				
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
	public function createUser($data)
	{
		$user = $this->first(['email_address' => $data['email_address']]);

		if ($user) {
			return true;
		} else {
			$this->insert($data);
			return false;
		}
	}
	
}
