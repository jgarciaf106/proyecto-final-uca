<?php
if (isset($_SESSION['PET'])) {
    if ($_SESSION['PET'] == 'Deleted') {
?>
        <script type='text/javascript'>
            Swal.fire({
                icon: 'success',
                title: 'La mascota publicada se elimino exitosamente.',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    <?php
    }
    if ($_SESSION['PET'] == 'Edited') {
    ?>
        <script type='text/javascript'>
            Swal.fire({
                icon: 'success',
                title: 'La mascota publicada se actualizo exitosamente.',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
<?php

    }
    unset($_SESSION['PET']);
}
?>


<div class="mx-5">
    <div" class="row">
        <h1>Mis Publicaciones</h1>
        <table class="table table-striped align-middle mb-8">
            <thead class="text-nowrap text-center">
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Historia</th>
                    <th scope="col">Fecha Disponibilidad</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Editar/Eliminar</th>
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                <?php
                if (isset($mascotas)) {
                    foreach ($mascotas as $mascota) {
                ?>
                        <tr>
                            <td><img src="<?php echo APP . "local/" . $mascota->foto ?>" class="img-fluid" width="150" height="150"></td>
                            <td><?php echo $mascota->nombre ?></td>
                            <td><?php echo $mascota->historia ?></td>
                            <td><?php echo $mascota->fecha_carga ?></td>
                            <td><?php echo $mascota->disponible ? "Disponible" : "Adoptado" ?></td>
                            <td>

                                <form action="" method="post" class="" id="myForm">
                                    <input type="hidden" class="btn btn-danger" name="edit_id" value="<?php echo $mascota->id ?>">
                                    <button type="submit" class="btn btn-warning mb-2 mx-3">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>

                                </form>

                                <form action="" method="post" class="px-3">

                                    <input type="hidden" class="btn btn-danger" name="delete_id" value="<?php echo $mascota->id ?>">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>

                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                } else {

                    ?>
            </tbody>
        </table>

        <div class="container-fluid mt-5 mb-10 alert alert-success" role="alert">
            <h4 class="alert-heading">No hay Publicaciones</h4>
            <p>Puedes crear una nueva publicacion en el siguiente boton.</p>
            <a class="btn btn-warning" aria-current="page" href="<?= ROOT ?>post">Publicar Mascota</a>
        </div>;
    <?php
                } ?>
</div>
</div>