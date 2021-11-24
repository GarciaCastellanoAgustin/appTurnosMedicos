<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <title>Login</title>
</head>

<body class="vh-100">

<!--NavBar-->

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid mb-1 mx-3">
  <a class="navbar-brand fw-bold text-white" id="zoom" href="index.php"><img src="../../img/logo.svg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <img src="../../img/three-dots-vertical.svg" class="menuIcon">
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-5 mx-5 mb-lg-0">
        <li class="nav-item mx-3" id="hover">
        <a class="nav-link text-primary" aria-current="page" href="index.php">Inicio</a>
        </li>
      </ul>

      <span class="navbar-text mx-1" id="hover">
      <a class="nav-link text-primary" href="#contact">Registrate</a>
      </span>
      <span class="navbar-text"  id="zoom">
      <a class="btn btn-primary text-white" href="login.php">Iniciar sesión</a>
      </span>

    </div>
  </div>
</nav>

<section class="my-5 d-flex">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">

      <div class="col-md-10 col-lg-6 col-xl-5">
        <img src="../../img/calendario.svg" class="img-fluid">
      </div>

      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-2">
        <form action="" method="post">
      
          <!-- Mail -->
          <div class="form-outline mb-4">

          <h2 class="fw-bold align-items-center">Ingrese DNI</h2>
          <input class="form-control" type="text" placeholder="Ingresar DNI" name="dni"/>

          </div>

          <!-- Pass -->
          <div class="form-outline mb-3">

          <h2 class="fw-bold justify-content-center align-items-center">Contraseña</h2>
          <input class="form-control" type="password" placeholder="Ingresar contraseña" name="pass"/>
            
          </div>
          <?php
          if($bError) {
          ?>
            Usuario y/o contraseña incorrecto/s.
          <?php
          }
          ?>

          <!-- Checkbox -->
          <div class="align-items-center">

            <div class="row mx-auto">
              <div class="col-12">
                  <button type="submit" value="Ingresar" class="btn btn-primary btn-lg">
                  Ingresar
                  </button>
              </div>
            </div>

          </div>


          <!--Register-->


        </form>
      </div>
    </div>
  </div>
</section>

</body>
</html>