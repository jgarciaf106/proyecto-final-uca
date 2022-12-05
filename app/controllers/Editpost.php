<?php

class Editpost
{

    use Controller;

    public function index()
    {

        $mascota = new Pet();
        
        $data = [
            'header' => 'header',
            'footer' => 'footer'
        ];

        $this->view('editpost', $data);

        // if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
            
            
        // }

    }
}
