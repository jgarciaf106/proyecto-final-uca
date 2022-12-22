<?php

class Myprofile
{
	use Controller;

	public function index()
	{
		$data = [
			'header' => 'header',
			'footer' => 'footer'
		];
		$this->view('myprofile', $data);

		if ($_SERVER['REQUEST_METHOD'] == "POST") {

			$user = new User();

			if (isset($_POST['editProfile'])) {
				$user->setUpdateUserDetails($_POST);
				$edited_user = $user->updateUser();
				$edited_user ? $_SESSION['UI_MSG'] = [
					'type' => '2',
					'message' => 'Perfil editado exitosamente.'
				] : $_SESSION['UI_MSG'] = [
					'type' => '1',
					'message' => 'Error al editar perfil.'
				];
				$_SESSION['USER'] = $user->details();
				redirect('home');
			} elseif (isset($_POST['deleteProfile'])) {
				$user->setDeleteUserDetails($_POST);
				$deleted_user = $user->deleteUser();
				$deleted_user ? $_SESSION['UI_MSG'] = [
					'type' => '2',
					'message' => 'Perfil eliminado exitosamente.'
				] : $_SESSION['UI_MSG'] = [
					'type' => '1',
					'message' => 'Error al eliminar perfil.'
				];
				redirect('');
			}
		}
	}
}
