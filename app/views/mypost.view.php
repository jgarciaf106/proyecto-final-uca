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
        unset($_SESSION['PET']);
    }
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
                    <th scope="col">Persona a cargo</th>
                    <th scope="col">Teléfono Contacto</th>
                    <th scope="col">Fecha Publicación</th>
                    <th scope="col">Editar/Eliminar</th>
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                <?php
                foreach ($mascotas as $mascota) {
                ?>
                    <tr>
                        <td><img src="<?php echo $mascota->foto ?>" class="img-fluid" width="150" height="150"></td>
                        <td><?php echo $mascota->nombre ?></td>
                        <td><?php echo $mascota->historia ?></td>
                        <td><?php echo $mascota->full_name ?></td>
                        <td><?php echo $mascota->tel_contacto ?></td>
                        <td><?php echo $mascota->fecha_carga ?></td>
                        <td>
                            <form action="" method="post" class="px-3">

                                <input type="hidden" class="btn btn-warning" name="edit_id" value="<?php echo $mascota->id ?>">
                                <button type="submit" class="btn btn-warning mb-2">
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
                ?>
            </tbody>
        </table>
</div>
</div>