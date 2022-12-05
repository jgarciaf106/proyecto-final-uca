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
            
            $mascota = new Pet();
            $mascota->setCreatePet($_POST);
            $pet_created = $mascota->createPet();
            $pet_created ? $_SESSION['PET'] = 'Created' : $_SESSION['PET'] = 'Create Failed';
            redirect('home');
        }
    }
}
