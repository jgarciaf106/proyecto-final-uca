<?php
echo $header;
?>

<div class="tab-content">

    <?php
    foreach ($mascotas as $mascota) {
    ?>
        <div class="container " style="width: 50rem;">
            <img src="<?php echo $mascota['foto'] ?>" class="card-img-top" alt="..." style="height: 30rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $mascota['nombre'] ?></h5>
                <p class="card-text"><?php echo $mascota['historia'] ?></p>
                <a href="#" class="btn btn-warning"><?php echo "Adoptar a " . $mascota['nombre'] ?></a>
            </div>
        </div>

    <?php
    }
    ?>
</div>



<?php
echo $footer
?>