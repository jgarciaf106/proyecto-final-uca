<div class="container pb-10 pt-3">
    <div class="alert alert-secondary text-center" role="alert">
        Editar Publicación.
    </div>
    <div class="col-12 p-5">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <form class="m-4" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Nombre de la Mascota</label>
                        <input type="text" class="form-control" id="validationCustom03" value="<?= $_SESSION['PET_EDIT'][0]->nombre ?>" name="editName" required>
                    </div>

                    <div class="mb-3">
                        <label for="validationTextarea" class="form-label">Historia de la Mascota</label>
                        <textarea class="form-control" id="validationTextarea" name="editHistory" required><?= $_SESSION['PET_EDIT'][0]->historia ?></textarea>

                    </div>

                    <div class="mb-3">
                        <input type="file" class="form-control" aria-label="file example" name="editPhoto" accept="image/*"  value="<?= $_SESSION['PET_EDIT'][0]->foto ?>">
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>

                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Fecha disponibilidad</label>
                        <input type="date" class="form-control" id="validationCustom03" value="<?= $_SESSION['PET_EDIT'][0]->fecha_carga ?>" name="editDate" required>
                    </div>

                    <div class="mb-3 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="editDisponibilidad" id="flexRadioDefault1" value="1" <?php if($_SESSION['PET_EDIT'][0]->disponible == "1") { ?> checked="checked" <?php }?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Disponible
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="editDisponibilidad" id="flexRadioDefault2" value="0" <?php if($_SESSION['PET_EDIT'][0]->disponible == "0") { ?> checked="checked" <?php }?>>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Adoptado
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="editEmail" value="<?= $_SESSION['PET_EDIT'][0]->email_address ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPhone1" class="form-label">Numero Telefonico</label>
                        <input type="text" class="form-control " id="exampleInputPhone1" name="editPhone" value="<?= $_SESSION['PET_EDIT'][0]->tel_contacto ?>">
                    </div>

                    <div class="mb-3">
                        <input class="btn btn-warning" type="submit" name="edit_pet" value="Actualizar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>