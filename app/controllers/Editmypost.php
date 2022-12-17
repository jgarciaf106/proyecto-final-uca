<?php

class Editmypost
{

    use Controller;

    public function index()
    {


        $data = [
            'header' => 'header',
            'footer' => 'footer'
        ];

        $this->view('editmypost', $data);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if (isset($_POST['edit_pet'])) {
                $mascota = new Pet();
                $image_file = $_FILES["editPhoto"];
                var_dump($image_file);

                if ($image_file['name'] == "") {
                    $_POST['editPhoto'] = $_SESSION['PET_EDIT'][0]->foto;
                } else {
                    $_POST['editPhoto'] = $image_file['name'];
                }
                $mascota->setEditPet($_POST);
                $edited_pet = $mascota->editPet();
                storeImage($image_file);
                $edited_pet ? $_SESSION['UI_MSG'] = [
                    'type' => '2',
                    'message' => 'Mascota editada exitosamente.'
                ] : $_SESSION['UI_MSG'] = [
                    'type' => '1',
                    'message' => 'Error al editar mascota.'
                ];
                redirect('mypost');
            }
        }
    }
}
