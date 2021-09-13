<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Login</title>
</head>

<body class="vh-100">

<!--NavBar-->

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid mx-5">
    <a class="navbar-brand fw-bold text-white" id="zoom" href="index.php"><img src="img/logo.svg" alt=""><</a>
    <button class="navbar-toggler border-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <img src="img/three-dots-vertical.svg" alt="" class="menuIcon">
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 d-flex">
        <li class="nav-item justify-content-start align-items-start" id="hover">
          <a class="nav-link text-primary" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item justify-content-start align-items-start" id="hover">
          <a class="nav-link text-primary" href="#aboutUs">About us</a>
        </li>
        <li class="nav-itemc justify-content-start align-items-start me-2" id="hover">
          <a class="nav-link text-primary" href="#contact">Contact</a>
        </li>
        <li class="nav-item" id="zoom">
          <a class="btn btn-primary" href="login.php">Join In</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="my-5 d-flex">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">

      <div class="col-md-10 col-lg-6 col-xl-5">
        <img src="img/calendario.svg" class="img-fluid" alt="Sample image">
      </div>

      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-2">
        <form action="validar.php" method="post">
      
          <!-- Mail -->
          <div class="form-outline mb-4">

          <h2 class="fw-bold align-items-center">Usuario</h2>
          <input class="form-control" type="text" placeholder="Ingresar mail" name="usuario"/>

          </div>

          <!-- Pass -->
          <div class="form-outline mb-3">

          <h2 class="fw-bold justify-content-center align-items-center">Contraseña</h2>
          <input class="form-control" type="password" placeholder="Ingresar contraseña" name="password"/>
            
          </div>

          <!-- Checkbox -->
          <div class="justify-content-between align-items-center">

          <div class="text-center text-lg-start mt-4 pt-2">

            <button type="submit" value="Ingresar" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">No tenes cuenta? 
            <a href="#!" class="link-danger">Registrarse</a></p>

          </div>
            
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value=""/>
              <label class="form-check-label">estoy roto</label>
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