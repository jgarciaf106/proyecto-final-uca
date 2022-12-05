<?php

class Mypost
{

    use Controller;

    public function index()
    {

        $mascota = new Pet();
        $query_columns = [
            'p.id' => 'id',
            'p.nombre' => 'nombre',
            'p.historia' => 'historia',
            'p.foto' => 'foto',
            'p.fecha_carga' => 'fecha_carga',
            'u.full_name' => 'full_name',
            'u.tel_contacto' => 'tel_contacto'
        ];
        $mascotas = $mascota->join('email_address', 'email_address', 'email_address', 'fecha_carga', 'desc', $_SESSION['USER'][0]->email_address, $query_columns);

        $data = [
            'header' => 'header',
            'footer' => 'footer',
            'mascotas' => $mascotas
        ];

        $this->view('mypost', $data);

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
            if(isset($_POST['edit_id'])){
                $_SESSION['petToEdit'] = $_POST['edit_id'];
                redirect('editpost');
            }

            if(isset($_POST['delete_id'])){

                $mascota->setDeletePet($_POST);
                $deleted_pet = $mascota->deletePet();
                if($deleted_pet){
                    $_SESSION['PET'] = 'Deleted';
                    redirect('mypost');
                }
            }
            
        }

    }
}
