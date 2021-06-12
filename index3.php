<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BOOTSTRAP 4.5</title>
    
    <!-- CSS (1°) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- PARA LLAMAR A NUESTRO ARCHIVO CSS (2°) -->
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  
  <body>
    

    <!-- BARRA -->
    <nav class="navbar navbar-expand-lg navbar-light bg-darkblue py-4" id="barra">
      <div class="container">
        <div class="row w-100">
          <div class="col-lg-12 d-flex">
            <a class="navbar-brand text-white fs-25" href="#">
              <strong>START BOOTSTRAP</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="#">PORTFOLIO</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">CONTACT</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- -->
    <main>
      <div class="container mb-5">
        <div class="row">
          <div class="col-12 text-center">
            <img class="wh mb-4" src="https://startbootstrap.github.io/startbootstrap-freelancer/assets/img/avataaars.svg" alt="">
            <h1 class="text-white mt-2 fs-70 mb-0"><strong>START BOOTSTRAP</strong></h1>
            <div class="col-12">
              <section class="d-flex align-items-center justify-content-center my-4">
                <div class="linea bg-white mr-3"></div>
                <svg class="altura text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                <div class="linea bg-white ml-3"></div>
              </section>
              <div>
                <p class="text-white fs-25">Graphic Artist - Web Designer - Illustrator</p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </main>


    <!-- PORTAFOLIO E IMAGENES -->
    <div class="container my-5 py-4">
      <div class="row">
          <div class="col-12 text-center mb-3">
            <h1><strong>PORTAFOLIO</strong></h1>
          </div>
          <div class="col-12 mb-4">
            <section class="d-flex align-items-center justify-content-center">
              <div class="linea mr-3"></div>
              <svg class="altura" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
              <div class="linea ml-3"></div>
            </section>
          </div>
      </div>
      <div class="row">
        <div class="col-4">
          <section class="p-2 ">
            <img class="w-100 br" src="https://startbootstrap.github.io/startbootstrap-freelancer/assets/img/portfolio/cabin.png">
          </section>  
        </div>
        <div class="col-4">
          <section class="p-2 ">
            <img class="w-100 br" src="https://startbootstrap.github.io/startbootstrap-freelancer/assets/img/portfolio/cake.png">
          </section>
        </div>
        <div class="col-4">
          <section class="p-2 ">
            <img class="w-100 br" src="https://startbootstrap.github.io/startbootstrap-freelancer/assets/img/portfolio/circus.png">
          </section>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <section class="p-2 pt-4">
            <img class="w-100 br" src="https://startbootstrap.github.io/startbootstrap-freelancer/assets/img/portfolio/game.png">
          </section>
        </div>
        <div class="col-4">
          <section class="p-2 pt-4">
            <img class="w-100 br" src="https://startbootstrap.github.io/startbootstrap-freelancer/assets/img/portfolio/safe.png">
          </section>
        </div>
        <div class="col-4">
          <section class="p-2 pt-4">
            <img class="w-100 br" src="https://startbootstrap.github.io/startbootstrap-freelancer/assets/img/portfolio/submarine.png">
          </section>
        </div>
      </div>
    </div>

    <section class="bg-verde py-5">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h1 class="text-white"><strong>ABOUT</strong></h1>
            <section class="d-flex align-items-center justify-content-center my-4">
                <div class="linea bg-white mr-3"></div>
                <svg class="altura text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                <div class="linea bg-white ml-3"></div>
              </section>
          </div>
          <div class="col-lg-4">
            <p class="text-white fs-20">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
          </div>
          <div class="col-lg-4">
            <p class="text-white fs-20">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
          </div>
          <div class="col-12 mt-4 text-center">
            <button class="btn personalizado">Free Download!</button>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACTO -->    
    <div class="container my-5 PY-5">
      <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="text-center"><strong>CONTACT ME</strong></h1>
            <section class="d-flex align-items-center justify-content-center my-4">
                <div class="linea mr-3"></div>
                <svg class="altura" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                <div class="linea ml-3"></div>
              </section>
        </div>
            

        <div class="col-8">
           <form>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nombre">
            </div>

            <div class="form-group">
              <input type="email" class="form-control" placeholder="Correo">
            </div>

            <div class="form-group">
              <input type="number" class="form-control" placeholder="Celular">
            </div>          
            
            <div class="form-group">
              <textarea class="form-control" placeholder="Mensaje" rows="3"></textarea>
            </div>

            <div class="form-group">
              <button class="btn bg-success text-white fs-20">Enviar</button>
            </div>            
          </form>

        </div>

       



      </div>
    </div>



    <!-- PIE DE PAGINA -->
    <footer class="bg-dark2 text-center py-4">
      <p class="mb-0 text-white">Copyright © Your Website <span id="year"></span></p>
    </footer>

    <script src="main.js"></script> <!-- id="barra" -->
  </body>
</html>