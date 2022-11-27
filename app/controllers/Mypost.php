<?php 

class Mypost {

    use Controller;

    public function index()
    {
    
        $data = [
            'header' => 'header',
            'footer' => 'footer'
        ];
       
        $this->view('mypost', $data);
    }


}