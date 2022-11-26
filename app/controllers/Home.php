<?php

class Main 
{
    use Controller;

    public function index()
    {
        $mascota = new Pet();

        $mascotas = $mascota->findAll();
        $data = [
            'header' => 'header',
            'footer' => 'footer',
            'mascotas' => $mascotas
        ];

        
        $this->view('home', $data);
        
    }
}
