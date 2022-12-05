<div class="vh-75 d-flex justify-content-center align-items-center ">
  <div class="col-md-4 p-5 shadow-sm border rounded-5 border-secondary mb-6">
    <h2 class="text-center mb-4">Formulario de Registro</h2>
    <form method="post">
    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Nombre Completo</label>
        <input type="text" class="form-control border border-secondary" id="exampleInputName1" name="inputName">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
        <input type="email" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="inputEmail">
      </div>
      <div class="mb-3">
        <label for="exampleInputPhone1" class="form-label">Numero Telefonico</label>
        <input type="text" class="form-control border border-secondary" id="exampleInputPhone1" name="inputPhone">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control border border-secondary" id="exampleInputPassword1" name="inputPassword">
      </div>
      <div class="d-grid">
        <button class="btn btn btn-warning" type="submit">Crear Cuenta</button>
      </div>
    </form>
    <div class="mt-3">
      <p class="mb-0  text-center">Tienes una cuenta? <a href="<?= ROOT ?>login" class="fw-bold">Iniciar Sesion</a></p>
    </div>
  </div>
</div>