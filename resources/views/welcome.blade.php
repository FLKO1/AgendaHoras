
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reserva de Horas </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <!-- Barra de navegacion -->
    <nav class="navbar bg-primary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">DentalGenna</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/welcome">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/citas.create">Agendar Hora</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Log in Profesional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Acerca de nosotros</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   <!-- <h1>Hola mundo desde Welcome . blade</h1>
    <h2>ESTA SERA LA PÀGINA MAIN</h2> -->

    <!-- Carrusel-->
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.freepik.com/vector-premium/dibujos-animados-dentista-medico-control-dientes-nino_353337-1047.jpg?w=740" 
        style="height: 300px;"
        class="d-block w-100" alt="imagen 1">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/vector-gratis/ilustracion-plana-dia-do-dentista_52683-93933.jpg?w=740&t=st=1684542557~exp=1684543157~hmac=632b7c73bd4fbd6b694468adad94f3edf2e117f01271d66097d8680de237e03b" 
      style="height: 300px;"
      class="d-block w-100" alt="imagen 2">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/vector-gratis/caracter-diseno-plano-hombre-dentista_23-2148184100.jpg?w=740&t=st=1684542593~exp=1684543193~hmac=b77a1053d9f834310be6e4797ca56dfaff92e471b49eaa18004c5c798960f7a0" 
      style="height: 300px;"
      class="d-block w-100" alt="imagen 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--Aca ira el calendario para poder agendar horas -->

<!--Acerca de mi -->
    <div class="card" style="width: 18rem;">
      
  <img src="https://img.freepik.com/vector-premium/mascota-dibujos-animados-rana-vector-divertido-sonrisa-felicidad-diversion-lindo-sientese-gorra-vaquero-verde_471870-342.jpg?w=740"
   class="card-img-top" alt="imagen de geena">
  <div class="card-body">
    <h5 class="card-title">Geena Cuevas</h5>
    <p class="card-text">Estudiante de la Universidad de Antofagasta. Atiendo en la ciudad de Antofagasta, Odontologa
    </p>
    <a href="#" class="btn btn-primary">Conoceme mas...</a>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>