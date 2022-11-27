<div class="vh-75 d-flex justify-content-center align-items-center">
  <div class="col-md-4 p-5 shadow-sm border rounded-5 border-secondary">
    <h2 class="text-center mb-4">Inicio de Sesion</h2>
    <form method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
        <input type="email" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="logEmail">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control border border-secondary" id="exampleInputPassword1" name="logPassword">
      </div>
      <div class="d-grid">
        <button class="btn btn btn-warning" type="submit">Ingresar</button>
      </div>
    </form>
    <div class="mt-3">
      <p class="mb-0  text-center">No tienes una cuenta? <a href="<?= ROOT ?>signup" class="fw-bold">Registrarse</a></p>
    </div>
  </div>
</div>