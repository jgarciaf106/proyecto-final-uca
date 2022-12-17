<?php
if (isset($_SESSION['UI_MSG'])) {

    alerts($_SESSION['UI_MSG']);
    unset($_SESSION['UI_MSG']);
}
?>


<div class="tab-content p-7">
    <?php
    foreach ($mascotas as $mascota) {
        if ($mascota->disponible != "0") {

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