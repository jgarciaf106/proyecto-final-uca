<?php
/* Un condicional que verifica si el usuario fue creado o si el usuario ya existe. Mostrando una alerta para cada escenerio*/
if (isset($_SESSION['PET'])) {
    if ($_SESSION['PET'] == 'Created') {
?>
        <script type='text/javascript'>
            Swal.fire({
                icon: 'success',
                title: 'Mascota Publicada.',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
<?php
    }
}
unset($_SESSION['PET']);

?>


<div class="tab-content p-7">
    <?php
    foreach ($mascotas as $mascota) {
        if($mascota->disponible != "0"){      
        
    ?>
        <div class="container " style="width: 50rem;">
            <img src="<?php echo APP . "local/" .  $mascota->foto ?>" class="card-img-top" alt="..." style="height: 30rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $mascota->nombre ?></h5>
                <p class="card-text"><?php echo $mascota->historia ?></p>
                <form action="" method="post">
                    <input type="hidden" class="btn btn-warning" name="id" value="<?php echo $mascota->id ?>">
                    <input type="submit" class="btn btn-warning" value="<?php echo "Adoptar a " . $mascota->nombre  ?>">
                </form>
            </div>
        </div>

    <?php
        }
    }
    ?>
</div>