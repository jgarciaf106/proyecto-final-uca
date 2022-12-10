<section class="text-center py-0" style="position: absolute; bottom: 0; width: 100%; height: 2.5rem">

  <div class="container">
    <div class="container border-top py-3">
      <div class="row justify-content-between">
        <div class="col-12 col-md-auto mb-1 mb-md-0">
          <p class="mb-0">III Cuatrimestre 2022 - Programación III</p>
        </div>
        <div class="col-12 col-md-auto">
          <p class="mb-0">
            Desarrollado por <a class="text-decoration-none ms-1">Andres Garcia</a>
          </p>
        </div>
      </div>
    </div>
  </div>

</section>
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Publicacion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post">
          <div class="mb-3">
            <label for="inputFoto" class="form-label">Foto</label>
            <input type="text" class="form-control" id="inputFoto" name="inputPhoto">
          </div>
          <div class="mb-3">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputName" name="inputName">
          </div>
          <div class="mb-3">
            <label for="inputHistory">Historia</label>
            <textarea class="form-control" id="inputHistory" name="inputHistory"></textarea>
          </div>
          <div class="mb-3">
            <label for="inputPersonInCharge" class="form-label">Persona a cargo</label>
            <input type="text" class="form-control" id="inputPersonInCharge" name="inputPersonInCharge">
          </div>
          <div class="mb-3">
            <label for="inputPhone" class="form-label">Teléfono Contacto</label>
            <input type="text" class="form-control" id="inputPhone" name="inputPhone">
          </div>
          <div class="mb-3">
            <label for="inputDate" class="form-label">Fecha Publicación</label>
            <input type="date" class="form-control" id="inputDate" name="inputDate">
          </div>
          <input type="submit" class="btn btn-warning" name="edit_id" value="Guardar cambios">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Descartar cambios</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1d3efbf411.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
<script src="<?php ROOT ?>js/global.js"></script>
</body>

</html>