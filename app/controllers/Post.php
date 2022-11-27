<?php 

class Post {

    use Controller;

    public function index()
    {
    
        $data = [
            'header' => 'header',
            'footer' => 'footer'
        ];
       
        $this->view('post', $data);
    }


}