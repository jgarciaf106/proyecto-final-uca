<?php
/* Un condicional que verifica si el usuario fue creado o si el usuario ya existe. Mostrando una alerta para cada escenerio*/
if (isset($_SESSION['USER'])) {
    if ($_SESSION['USER'] == 'Created') {
?>
        <script type='text/javascript'>
            Swal.fire({
                icon: 'success',
                title: 'Usuario creado.',
                showConfirmButton: false,
                timer: 1500
            })
        </script>

    <?php
    } else if ($_SESSION['USER'] == 'Exists') {
    ?>
        <script type='text/javascript'>
            Swal.fire({
                icon: 'error',
                title: 'El usuario ya existe.',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    <?php
    } else if ($_SESSION['USER'] == 'Failed Login') {
    ?>
        <script type='text/javascript'>
            Swal.fire({
                icon: 'error',
                title: 'Correo electronico o contraseña son incorrectos.',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    <?php
    }
    ?>
<?php
    unset($_SESSION['USER']);
}
?>


<section >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg text-md-start text-center">
                <h1 class="mb-3 fs-9 fw-bold">Casa para una mascota.</h1>
                <div class="card-group">

                    <?php
                    foreach ($mascotas as $mascota) {
                    ?>

                        <div class="card p-3" style="width: 20rem;">
                            <img src="<?php echo $mascota->foto ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $mascota->nombre ?></h5>
                                <p class="card-text"><?php echo $mascota->historia ?></p>
                                <a href="<?= ROOT ?>login" class="btn btn-warning">Adoptar</a>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
</section>
