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

        $this->view('signup', $data);

       
        if($_SERVER['REQUEST_METHOD'] == "POST")
		{
            $user = new User();
            $user->setCreateUserDetails($_POST);

            $user_exists = $user->createUser();

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
