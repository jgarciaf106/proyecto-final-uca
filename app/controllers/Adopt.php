<?php 

class Adopt {

    use Controller;

    public function index()
    {
    
        $data = [
            'header' => 'header',
            'footer' => 'footer'
        ];
         
        if(isset($_SESSION['petid'])){
            $mascota = new Pet();
            $mascota = $mascota->first(['id'=>$_SESSION['petid']]);
            $data['mascota'] = $mascota[0];
        }

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $to = $_POST['adoptOwner'];
            $email = $_POST['adoptEmail'];
            $name = $_POST['adoptName'];            
            $phone = $_POST['adoptTelefono'];
            $pet = $_POST['adoptPet'];
            $subject = "Solicitud de Adopción";
            $message = "Hola, mi nombre es $name y me gustaría adoptar a $pet. Mi teléfono y correo electonico son ($phone, $email) me gustaria ponerme en contacto y darle un hogar a $pet.";
            
            // send email using mail function
            mail($to, $subject, $message);
            
        }

        $this->view('adopt', $data);
    }

}