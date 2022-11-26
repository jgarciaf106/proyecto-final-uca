<?php

class Auth 
{
    use Controller;

    public function login()
    {
        $user = new User();

        // get post from modal and validate login
        if (isset($_POST['andres'])) {
            $email = $_POST['logEmail'];
            $password = $_POST['logPassword'];

            $access_granted = $user->login($email, $password);
            if($access_granted) {
                $_SESSION['user'] = $email;
                $_SESSION['login'] = true;
                redirect('home');
            } else {
                $_SESSION['login'] = false;
                redirect('landing');
            }
        }

    }

    public function register()
    {
        $user = new User();

    }
}
