<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <title>Registrarse</title>
</head>
<body>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary sticky-top">
      <div class="container-fluid mx-5">
        <a class="navbar-brand fw-bold text-white" id="zoom" href="#">Get <span class="text-secondary">organized</span></a>
        <button class="navbar-toggler border-2 menuIcon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="img/three-dots-vertical.svg" alt="">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item" id="hover">
              <a class="nav-link text-white align-self-center" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item me-2" id="hover">
              <a class="nav-link text-white align-self-center" href="index.html">Support</a>
            </li>
            <li class="nav-item me-2" id="hover">
            <a class="nav-link text-white align-self-center" href="logout.php">Cerrar sesión</a>
            </li>

          </ul>
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
      
          <div class="form-outline mb-4">

          <h2 class="fw-bold align-items-center">Fecha de Consulta</h2>
          <input class="form-control" type="text" placeholder="Ingresar Fecha" name="fecha"/>

          </div>


           <div class="form-outline mb-4">

           <h2 class="fw-bold align-items-center">Ingrese Horario</h2>
           <input class="form-control" type="text" placeholder="Ingresar horario" name="hora"/>

           </div>


          <div class="form-outline mb-4">

          <h2 class="fw-bold align-items-center">Nombre del Medico</h2>
          <input class="form-control" type="text" placeholder="Ingresar al Medico" name="nombreMedico"/>

          </div>

          <div class="form-outline mb-4">

          <h2 class="fw-bold align-items-center">Ingresar DNI</h2>
          <input class="form-control" type="text" placeholder="Ingresar DNI" name="dni"/>

          </div>


          <div class="form-outline mb-4">

          <h2 class="fw-bold align-items-center">Consulta</h2>
          <input class="form-control" type="text" placeholder="Ingresar consulta" name="consulta"/>

          </div>


            <div class="row mx-auto">
              <div class="col-12">
                  <button type="submit" value="enviar" class="btn btn-primary btn-lg" name="enviar">
                  Enviar
                  </button>
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