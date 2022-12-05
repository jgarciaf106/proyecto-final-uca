<div class="container pb-10 pt-3">
    <div class="alert alert-secondary text-center" role="alert">
        Dar en Adopción.
    </div>
    <div class="col-12 p-5">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <form class="m-4" method="post">
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Nombre de la Mascota</label>
                        <input type="text" class="form-control" id="validationCustom03" value="" name="giveName" required>
                    </div>

                    <div class="mb-3">
                        <label for="validationTextarea" class="form-label">Historia de la Mascota</label>
                        <textarea class="form-control" id="validationTextarea" name="givenHistory"  required></textarea>

                    </div>

                    <div class="mb-3">
                        <input type="file" class="form-control" aria-label="file example" name="givePhoto" required>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>

                    <div class="mb-3">
                        <input class="btn btn-warning" type="submit" value="Dar en adopcion">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>