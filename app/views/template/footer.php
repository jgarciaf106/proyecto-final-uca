<section class="text-center py-0">

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

<!-- Modal Registro -->
<div class="modal fade" id="modalRegistro" tabindex="-1" aria-labelledby="modalRegistroLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalRegistroLabel">Crear Cuenta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="inputName" class=" form-label">Nombre Completo</label>
            <input type="text" class="form-control" id="inputName1" name="inputName" aria-describedby="nameHelp">
          </div>
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="inputEmail1" name="inputEmail" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="inputPassword" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword1" name="inputPassword">
          </div>
          <button type="submit" class="btn btn-warning">Registrarse</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary-outline" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Ingresar -->
<div class="modal fade" id="modalIngresar" tabindex="-1" aria-labelledby="modalIngresarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalIngresarLabel">Inicio de Sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" id="ingresar1">
          <div class="mb-3">
            <label for="logEmail" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="logEmail1" name="logEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="logPassword" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="logPassword1" name="logPassword1">
          </div>
          <button type="submit" class="btn btn-warning">Ingresar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary-outline" data-bs-dismiss="modal" name="andres">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Condicional -->
<div class="modal fade" id="modalAdoptar" tabindex="-1" aria-labelledby="modalAdoptarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAdoptarLabel">Te gustaria adoptar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <ul class="nav nav-pills mb-3 justify-content-center pt-2" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Ingresar</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Registro</button>
        </li>
      </ul>


      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane container-fluid show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <form method="post" action="" id="ingresar2">
            <div class="mb-3">
              <label for="logEmail" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="logEmail2" name="logEmail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="logPassword" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="logPassword2" name="logPassword">
            </div>
            <button type="submit" class="btn btn-warning">Ingresar</button>
          </form>
        </div>
        <div class="tab-pane  container-fluid" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <form method="POST" action="../../controllers/Home.php">
            <div class="mb-3">
              <label for="inputName" class=" form-label">Nombre Completo</label>
              <input type="text" class="form-control" id="inputName" name="inputName2" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="inputEmail" name="inputEmail2" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="inputPassword2" name="inputPassword">
            </div>
            <button type="submit" class="btn btn-warning">Registrarse</button>
          </form>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary-outline" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1d3efbf411.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
</body>

</html>