<?php

class Adopt
{

    use Controller;

    public function index()
    {

        $data = [
            'header' => 'header',
            'footer' => 'footer'
        ];

        if (isset($_SESSION['petid'])) {
            $mascota = new Pet();
            $mascota = $mascota->first(['id' => $_SESSION['petid']]);
            $data['mascota'] = $mascota[0];
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data['message'] = "Sent";
        }

        $this->view('adopt', $data);
    }
}
