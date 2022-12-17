<?php

class Landing
{
    use Controller;

    public function index()
    {
        $mascota = new Pet();
        $mascotas = randomize($mascota->findAll("id", "asc"));

        $data = [
            'header' => 'header',
            'footer' => 'footer',
            'mascotas' => $mascotas
        ];

        $this->view('landing', $data);
    }
}
