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
	 * Si el usuario existe, verifica la contraseña, si la contraseña es correcta, establezca la sesión y
	 * devuelva verdadero, de lo contrario, devuelva falso.
	 * 
	 * @param email La dirección de correo electrónico del usuario
	 * @param password La contraseña que se va a codificar.
	 */
	public function login($email, $password)
	{
		$user = $this->where('email_address', $email);

		print_r($user);

		if ($user) {
			if (password_verify($password, $user['password'])) {

				$_SESSION['login'] = true;
				$_SESSION['user'] = $user;

				return true;
			} else {
				$_SESSION['login'] = false;
				return false;
			}
		}
	}
}
