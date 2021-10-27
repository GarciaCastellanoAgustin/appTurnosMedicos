<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!--Fonts-->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
       <!-- Boostrap 5-->
       <link rel="stylesheet" href="../../css/bootstrap.css">
       <!--ScrollReveal-->
       <script src="../../js/scrollreveal.js"></script>
    <title>Organize You</title>
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


    <!-- App -->

    <div class="align-self-center p-5">
            <h2 class="display-5 fw-bold mb-3">Agregar Tarea</h2>
            <p class="lead mb-3">Agregar tarea aqui</p>
            <a href="addTask.php" class="btn btn-secondary">Agregar</a>
    </div>

    <div class="align-self-center p-5">
            <h2 class="display-5 fw-bold mb-3"><?php echo $row['nombre_medico']?></h2>
            <p class="lead mb-3">Agregar tarea aqui</p>
            <a href="addTask.php" class="btn btn-secondary">Agregar</a>
    </div>


    <!--Scripts-->
    <script src="../../js/bootstrap.bundle.js"></script>
    <script src="../../js/index.js"></script>
    <script src="../../js/app.js"></script>
    
  </body>
</html>
