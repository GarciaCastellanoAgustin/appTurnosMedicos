<!DOCTYPE html>
<html lang="es">
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
    <title>Life organized</title>
</head>
<body>

 <!--NavBar-->

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid mb-1 mx-3">
  <a class="navbar-brand fw-bold text-white" id="zoom" href="index.php"><img src="img/logo.svg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <img src="img/three-dots-vertical.svg" class="menuIcon">
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-5 mx-5 mb-lg-0">
        <li class="nav-item mx-3" id="hover">
        <a class="nav-link text-primary" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item mx-3" id="hover">
        <a class="nav-link text-primary" href="#aboutUs">Nosotros</a>
        </li>
        <li class="nav-item mx-3" id="hover">
        <a class="nav-link" href="#contact">Contacto</a>
        </li>
      </ul>

      <span class="navbar-text mx-1" id="hover">
      <a class="nav-link text-primary" href="singin.php">Registrate</a>
      </span>
      <span class="navbar-text"  id="zoom">
      <a class="btn btn-primary btn-lg text-white" href="login.php">Iniciar sesión</a>
      </span>

    </div>
  </div>
</nav>

  <!--Section Main-->

  <section id="#hero">
    <div class="row g-0 h-100">

      <div class="col-lg-6 d-flex intro">
        <div class="content mx-auto align-self-center px-4">
          <small class="text-primary"><span class="badge bg-secondary me-2">Lorem</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
          <h1 class="display-4 fw-bold">Lorem ipsum <span class="text-primary">bar</span></h1>
          <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa modi asperiores pariatur vel, recusandae quis!</p>
          <a href="app.html" class="btn btn-secondary">Abre tu cuenta hoy</a>
        </div>
      </div>

      <div class="col-lg-6 d-flex bg-light">
        <div class="content mx-auto align-self-center px-4 my-5">
          <img src="../../img/pexels-igor-haritanovich-1695052.jpg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section>

   <!--Section About-->

   <main class="d-flex steps" id="aboutUs">
      <div class="container-fluid align-self-center">

        <div class="row">

          <div class="col-lg-6">
            <div class="content mx-auto px-4 my-5"><img src="../../img/woman.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-6 d-flex">
            <div class="align-self-center numbers">
              <h2 class="display-4 fw-bold mb-4">Organize your Life with us.</h2>
              <ul class="list-unstyled">
  
                <li class="d-flex mb-4">
                  <p class="text-secondary lead fw-bold goals">1st</p>
                  <div class="ms-3">
                    <p class="lead fw-bold">Join Us:</p> <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </li>
  
                <li class="d-flex mb-4">
                  <p class="text-secondary lead fw-bold goals">2nd</p>
                  <div class="ms-3">
                    <p class="lead fw-bold">Join Us:</p> <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </li>
  
                <li class="d-flex mb-4">
                  <p class="text-secondary lead fw-bold">3rd</p>
                  <div class="ms-3">
                    <p class="lead fw-bold">Join Us:</p> <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </li>
  
              </ul>
            </div>
          </div>

        </div>

      </div>
   </main>

   <!--Contact-->

   <article class="d-flex mb-5 my-auto" id="contact">
     <div class="container align-self-center mb-5">
       <div class="dw bg-light mb-5">

        <div class="row">

          <div class="col-lg-7 d-flex">

           <div class="align-self-center p-5">
            <h2 class="display-5 fw-bold mb-3">Contact us:</h2>
            <p class="lead mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, recusandae.</p>
            <a href="app.html" class="btn btn-secondary">Join In</a>
           </div>

          </div>
 
          <div class="col-lg-5 d-flex">
            <div class="align-self-center mx-auto p-5">
              <img src="../../img/woman.jpg" class="img-fluid" alt="">
            </div>
           
          </div>
 
        </div>

       </div>
     </div>
   </article>

  <!--Footer-->

   <footer class="bg-light pt-4">
    <div class="container pt-2">
      <div class="row mb-3 justify-content-center">

        <div class="col-md-2 mx-5">
          <h3 class="fw-bold mb-3">Find more:</h3>
          <ul class="list-unstyled">
            <li class="mb-3"><a href="index.html" class="text-primary text-decoration-none">Home</a></li>
            <li class="mb-3"><a href="#aboutUs" class="text-primary text-decoration-none">About us</a></li>
          </ul>
        </div>

        <div class="col-md-2 mx-5">
          <h3 class="fw-bold mb-3">Technologies</h3>
          <ul class="list-unstyled">

            <li class="mb-3"><a href="https://getbootstrap.com/" class="text-primary text-decoration-none">Boostrap 5</a></li>
            <li class="mb-3"><a href="https://scrollrevealjs.org/" class="text-primary text-decoration-none">ScrollReveal</a></a></li>

          </ul>
        </div>

        <div class="col-md-2 mx-5">
          <h3 class="fw-bold mb-3">Contact:</h3>
          <ul class="list-unstyled">
            <li class="mb-3"><a href="#" class="text-primary text-decoration-none">You can contact us by:</a></li>

            <li>
              <ul class="list-inline">
                <li class="list-inline-item me-3"><a href="#"><img src="img/linkedin.svg" alt=""></a></li>
                <li class="list-inline-item me-3"><a href="#"><img src="img/github.svg" alt=""></a></li>
                <li class="list-inline-item me-3"><a href="#"><img src="img/envelope-fill.svg" alt=""></a></li>
              </ul>
            </li>

          </ul>
        </div>

        <div class="col-md-2 ms-5">
          <h3 class="fw-bold mb-3">Join us</h3>
          <ul class="list-unstyled">
            <li class=>
              <a class="btn btn-secondary" href="app.html">Join here</a>
            </li>
          </ul>
        </div>

      </div>

      <div class="border-top py-4">
        <div class="row">

          <div class="col-lg-6 col-md-12">
            <small>Made by: Agustin Garcia Castellano</small>
          </div>

          <div class="col-lg-6 col-md-12">
            <ul class="list-inline text-lg-end">
              <li class="list-inline-item"> <a class="text-primary text-decoration-none" href=""><small>Made with Bootstrap</small></a></li>
            </ul>
          </div>

        </div>
      </div>

    </div>

   </footer>

<!--Scripts-->
<script src="../../js/index.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>

</body>
</html>