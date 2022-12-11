<?php
if (isset($message)) {
    if ($message == 'Sent') {
?>
        <script type='text/javascript'>
            Swal.fire({
                icon: 'success',
                title: 'Su solicitud fue enviada, pronto el encargado de la mascota se pondra en contacto.',
                showConfirmButton: false,
                timer: 2700
            }).then(function(result) {
                window.location.href = "<?php echo ROOT ?>home";

            })
        </script>
<?php
    }
}

?>

<div class="container pb-10 pt-3">
    <div class="alert alert-secondary text-center" role="alert">
        Solicitud de Adopción.
    </div>
    <div class="col-12 p-5">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <img src="<?php echo APP . "local/" .  $mascota->foto ?>" class="img-fluid" alt="..." style="height:415px; width:600px">
            </div>
            <div class="col">
                <form class="m-4" method="post">
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="validationCustom03" value="" name="adoptName" required>
                    </div>

                    <div class="mb-3">
                        <label for="validationCustom02" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="validationCustom02" value="" name="adoptEmail" required>
                    </div>

                    <div class="mb-3">
                        <label for="validationCustom03" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="validationCustom03" value="" name="adoptTelefono" required>
                    </div>

                    <div class="mb-3">
                        <input class="btn btn-warning" type="submit" name="" value="Quiero adoptar a <?php echo $mascota->nombre ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>