<?php
if (isset($_SESSION['UI_MSG'])) {

    alerts($_SESSION['UI_MSG']);
    unset($_SESSION['UI_MSG']);
}
?>


<div class="container pb-10 pt-3">
    <div class="alert alert-secondary text-center" role="alert">
        Editar mi Perfil.
    </div>
    <div class="col-12 p-5">
        <div class="row justify-content-center align-items-center g-2">

            <div class="col">
                <form class="m-4" method="post">
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="validationCustom03" value="<?= $_SESSION['USER'][0]->full_name ?>" name="profileName" required>
                    </div>

                    <div class="mb-3">
                        <label for="validationCustom02" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="validationCustom02" value="<?= $_SESSION['USER'][0]->email_address ?>" name="profileEmail" required>
                    </div>

                    <div class="mb-3">
                        <label for="validationCustom03" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="validationCustom03" value="<?= $_SESSION['USER'][0]->tel_contacto ?>" name="profileTelefono" required>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom03" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="validationCustom03" value="<?= $_SESSION['USER'][0]->password ?>" name="profilePassword" required>
                    </div>

                    <div class="mb-3">
                        <input class="btn btn-warning" type="submit" value="Actualizar Perfil" name="editProfile">
                    </div>
                </form>
                <form class="m-4" method="post">
                    <div class="mb-3">
                        <input class="btn btn-warning" type="hidden" value="<?= $_SESSION['USER'][0]->email_address ?>" name="deleteProfile">
                        <input class="btn btn-danger" type="submit" value="Eliminar Perfil" name="delete">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>