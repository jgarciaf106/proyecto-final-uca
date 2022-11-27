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

            $email = $_POST['logEmail'];
            $password = $_POST['logPassword'];

            $access_granted = $user->login($email, $password);

            if ($access_granted) {

                $_SESSION['LOGIN'] = true;
                $_SESSION['USER'] = $user->details(['email_address' => $email]);

                redirect('home');
            } else {
                $_SESSION['USER'] = 'Failed Login';
                redirect('landing');
            }
        }
    }
}
