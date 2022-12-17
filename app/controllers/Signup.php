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


        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User();
            $user->setCreateUserDetails($_POST);

            $user_exists = $user->createUser();

            $user_exists ?
                $_SESSION['UI_MSG'] = [
                    'type' => 1,
                    'message' => 'El usuario ya existe.'
                ]

                : $_SESSION['UI_MSG'] = [
                    'type' => 2,
                    'message' => 'Usuario creado con éxito.'
                ];
            redirect('');
        }
    }
}
