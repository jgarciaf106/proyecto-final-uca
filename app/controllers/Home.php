<?php

class Home
{
    use Controller;

    public function index()
    {

        $mascota = new Pet();
        $mascotas = $mascota->findAll('fecha_carga', 'desc');


        $data = [
            'header' => 'header',
            'footer' => 'footer',
            'mascotas' => $mascotas
        ];

        $this->view('home', $data);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_SESSION['petid'] = $_POST['id'];
            redirect('adopt');
        }
    }
}
