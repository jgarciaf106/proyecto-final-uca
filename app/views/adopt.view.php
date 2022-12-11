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
                        <input class="btn btn-warning" type="hidden" name="adoptOwner" value="<?php echo $mascota->email_address ?>">
                        <input class="btn btn-warning" type="hidden" name="adoptPet" value="<?php echo $mascota->nombre ?>">
                        <input class="btn btn-warning" type="submit" value="Quiero adoptar a <?php echo $mascota->nombre ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>