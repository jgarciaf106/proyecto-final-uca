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
				$edited_user ? $_SESSION['USER_EDIT'] = 'Edited' : $_SESSION['USER_EDIT'] = 'Edit Failed';
				redirect('myprofile');

			} elseif (isset($_POST['deleteProfile'])) {
				$user->setDeleteUserDetails($_POST);
				$deleted_user = $user->deleteUser();
				$deleted_user ? $_SESSION['USER_EDIT'] = 'Deleted' : $_SESSION['USER_EDIT'] = 'Edit Failed';
				redirect('');
				
			}
		}
	}
}

