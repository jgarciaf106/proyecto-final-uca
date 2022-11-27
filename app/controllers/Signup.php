<?php

class Signup
{
    use Controller;

    public function index()
    {
        $user = new User();
        $data = [
            'header' => 'header',
            'footer' => 'footer'
        ];

        $this->view('Signup', $data);

       
        if($_SERVER['REQUEST_METHOD'] == "POST")
		{
            $user = new User();
            $new_user = [
                'email_address' => $_POST['inputEmail'],
                'full_name' => $_POST['inputName'],
                'password' => $_POST['inputPassword']
            ];

            $user_exists = $user->createUser($new_user);

            if($user_exists) {
                $_SESSION['USER'] = 'Exists';
                redirect('');
            } else {
                $_SESSION['USER'] = 'Created';
                redirect('');
            }
        }

        
    }

   
}
