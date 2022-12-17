<?php

class Post
{

    use Controller;

    public function index()
    {

        $data = [
            'header' => 'header',
            'footer' => 'footer'
        ];

        $this->view('post', $data);

        if ($_SERVER['REQUEST_METHOD'] == "POST") {


            if (isset($_POST['post_pet'])) {

                $mascota = new Pet();
                $image_file = $_FILES["givenPhoto"];
                $_POST['givenPhoto'] = $image_file['name'];
                $mascota->setCreatePet($_POST);
                $pet_created = $mascota->createPet();
                storeImage($image_file);
                $pet_created ? $_SESSION['UI_MSG'] = [
                    'type' => '2',
                    'message' => 'Mascota creada exitosamente.'
                ] : $_SESSION['UI_MSG'] = [
                    'type' => '1',
                    'message' => 'Error al crear mascota.'
                ];
                redirect('home');
            }
        }
    }
}
