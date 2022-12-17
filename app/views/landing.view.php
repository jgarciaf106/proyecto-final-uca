<?php
if (isset($_SESSION['UI_MSG'])) {

    alerts($_SESSION['UI_MSG']);
    unset($_SESSION['UI_MSG']);
}
?>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg text-md-start text-center">
                <h1 class="mb-3 fs-9 fw-bold">Casa para una mascota.</h1>
                <div class="card-group">

                    <?php
                    foreach ($mascotas as $mascota) {
                        if ($mascota->disponible != "0") {
                    ?>

                            <div class="card p-3" style="width: 20rem;">
                                <img src="<?php echo APP . "local/" .   $mascota->foto ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $mascota->nombre ?></h5>
                                    <p class="card-text"><?php echo $mascota->historia ?></p>
                                </div>
                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
</section>