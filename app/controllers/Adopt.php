<?php 

class Adopt {

    use Controller;

    public function index()
    {
    
        $data = [
            'header' => 'header',
            'footer' => 'footer'
        ];
       
        $this->view('adopt', $data);
    }

}