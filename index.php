<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once "./includes/meta-tag.php" ?>
</head>

<body>
  <div>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/proyectos.php">Proyectos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/galeria.php">Galeria</a>
              </li>
            </ul>

            <?php include_once "./includes/navbar_social.php" ?>

          </div>
        </div>
      </nav>
    </header>

    <main class="container my-4">
      <h1 class="display-1">Inicio</h1>

      <p class="lead">El contenido incluido en esta web esta únicamente para visualizar contenido diferente en cada una de sus páginas.</p>

      <div class="d-flex justify-content-center">
        <div id="carouselIndicators" class="carousel slide w-75" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://picsum.photos/1920/1080?random=1" class="d-block w-100" alt="lorem-picsum-random">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/1920/1080?random=2" class="d-block w-100" alt="lorem-picsum-random">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/1920/1080?random=3" class="d-block w-100" alt="lorem-picsum-random">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
        
    </main>
    
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>

</html>
