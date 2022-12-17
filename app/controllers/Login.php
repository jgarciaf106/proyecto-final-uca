<?php

class Login
{
    use Controller;

    public function index()
    {

        $data = [
            'header' => 'header',
            'footer' => 'footer'
        ];
        $this->view('login', $data);


        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User();

            $user->setLoginDetails($_POST);
            $access_granted = $user->login();

            if ($access_granted) {
                $_SESSION['LOGIN'] = true;
                $_SESSION['USER'] = $user->details();
                redirect('home');
            } else {
                $_SESSION['UI_MSG'] = [
                    'type' => 1,
                    'message' => 'Usuario o contraseña incorrectos.'
                ];
                redirect('');
            }
        }
    }
}
