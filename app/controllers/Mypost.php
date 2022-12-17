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
            'p.disponible' => 'disponible',
            'u.full_name' => 'full_name',
            'u.tel_contacto' => 'tel_contacto',
            'u.email_address' => 'email_address'
        ];
        $mascotas = $mascota->join('email_address', 'email_address', 'email_address', 'fecha_carga', 'desc', $_SESSION['USER'][0]->email_address, $query_columns);


        if ($mascotas) {
            $data = [
                'header' => 'header',
                'footer' => 'footer',
                'mascotas' => $mascotas
            ];
        } else {
            $data = [
                'header' => 'header',
                'footer' => 'footer'
            ];
        }

        $this->view('mypost', $data);


        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if (isset($_POST['edit_id'])) {
                $_SESSION['PET_EDIT'] = $mascota->join('email_address', 'email_address', 'id', 'fecha_carga', 'desc', $_POST['edit_id'], $query_columns);
                redirect('editmypost');
            }


            if (isset($_POST['delete_id'])) {

                $mascota->setDeletePet($_POST);
                $deleted_pet = $mascota->deletePet();
                $deleted_pet ? $_SESSION['UI_MSG'] = [
                    'type' => '2',
                    'message' => 'Mascota eliminada exitosamente.'
                ] : $_SESSION['UI_MSG'] = [
                    'type' => '1',
                    'message' => 'Error al eliminar mascota.'
                ];

                redirect('mypost');
            }
        }
    }
}
