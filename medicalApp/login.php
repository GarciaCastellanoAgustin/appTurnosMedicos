<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Login</title>
</head>

<body>

<section>
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">

      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid"
          alt="Sample image">
      </div>

      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="validar.php" method="post">

          <!-- Mail -->
          <div class="form-outline mb-4">

          <input type="text" placeholder="Ingresar mail" name="usuario"/>
          <label class="form-label">Ingresar Usuario</label>

          </div>

          <!-- Pass -->
          <div class="form-outline mb-3">
          <input type="password" placeholder="Ingresar contraseña" name="password"/>
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <!-- Checkbox -->
          <div class="d-flex justify-content-between align-items-center">
            
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value=""/>
              <label class="form-check-label">
                un estoy roto
              </label>
            </div>

          </div>

          <!--Register-->
          <div class="text-center text-lg-start mt-4 pt-2">

            <button type="button" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;"><input type="submit" value="Ingresar"></button>
            <p class="small fw-bold mt-2 pt-1 mb-0">No tenes cuenta? <a href="#!"
                class="link-danger">Registrarse</a></p>

          </div>

        </form>
      </div>
    </div>
  </div>
</section>

</body>
</html>