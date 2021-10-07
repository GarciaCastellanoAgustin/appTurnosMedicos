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

    <!--Quick Tasks-->

    <div class="container intro">

      <div class="row mt-5 ">
        <div class="col-lg-12">
          <h2 class="display-4 fw-bold mb-4 text-center">Organize your life <span class="text-secondary">with us</span></h2>
        </div> 
      </div>

      <div class="row my-4">
        <div class="col-md-5">

          <div class="card">
            <div class="card-body">
              
              <form id="formTask">
                <div class="form-group mb-3">
                  <input type="text" id="title" placeholder="Create a task" class="form-control">
                </div>
                <div class="form-group mb-3">
                  <textarea id="description" cols="30" rows="10" placeholder="Create a description" class="form-control"></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-secondary">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-7">
          <div id="tasks">

          </div>
        </div>
      </div>
    </div>

    <!--Calendar and watch-->
    
    <div class="container my-5">

        <div class="row">

          <div class="col-lg-7">
            <iframe src="https://calendar.google.com/calendar/embed?height=550&amp;wkst=1&amp;bgcolor=%230d6efd&amp;ctz=America%2FArgentina%2FBuenos_Aires&amp;src=Z2FyY2lhLmFndXN0aW4uYXJnQGdtYWlsLmNvbQ&amp;src=NnY0bGlrY2RvaTdrcTJ1Z2pvOW1pM3BnNTRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZmFtaWx5MTEwNzI5ODY3NDUwMjM5MzE2NzlAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZXMuYXIjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%233F51B5&amp;color=%2333B679&amp;color=%237CB342&amp;color=%23009688" style="border:solid 1px #777" width="90%" height="550" frameborder="0" scrolling="no"></iframe>
          </div>

            <div class="col-lg-5 my-auto">
  
              <div class="row">
                
                <div class="card bg-light">
    
                  <div class="card-body">
      
                    <div class="row">
                      <div class="col-lg-12 py-4 mt-3">
                        <div class="date">
                                          
                          <ul class="list-inline text-center">
                            <li class="list-inline-item"><p id="dayOfTheWeek" class="dayOfTheWeek lead"></p></li>
                            <li class="list-inline-item"><p id="dateNumbrer" class="dateNumbrer lead"></p></li>
                            <li class="list-inline-item"><p id="month" class="month lead"></p></li>
                            <li class="list-inline-item"><p id="year" class="year lead"></p></li>
                          </ul>
          
                        </div>
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="border-top py-4">
      
                        </div>
                      </div>
                    </div>
  
          
  
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="watch">       
          
                          <ul class="list-inline text-center">
                            <li class="list-inline-item"><p id="hour" class="hour lead"></p></li>
                            <li class="list-inline-item"><p class="lead">:</p></li>
                            <li class="list-inline-item mb-3"><p id="minutes" class="minutes lead"></p></li>
                          </ul>
          
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="border-top py-4">
      
                        </div>
                      </div>
                    </div>
 
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="hi">       
          
                          <ul class="list-inline text-center">
                            <li class="list-inline-item"><p id="hi" class="hi lead"></p></li>
                          </ul>
          
                        </div>
                      </div>
                    </div>
  
                  </div>
      
                </div>
              </div>
    
              
            </div>
  
        </div>
  
      </div>
    


      <!--Footer-->

   <footer class="bg-light pt-4">
    <div class="container pt-2">
      <div class="row mb-3 justify-content-center">

        <div class="col-md-2 mx-5">
          <h3 class="fw-bold mb-3">Find more:</h3>
          <ul class="list-unstyled">
            <li class="mb-3"><a href="index.html" class="text-primary text-decoration-none">Home</a></li>
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
    <script src="../../js/bootstrap.bundle.js"></script>
    <script src="../../js/index.js"></script>
    <script src="../../js/app.js"></script>
  </body>
</html>
