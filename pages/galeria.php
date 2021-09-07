<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once "../includes/meta-tag.php" ?>

  <style>
    /* center container with CSS */
    .grid {
      margin: 0 auto;
    }

    .grid-item {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="proyectos.php">Proyectos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"  href="./galeria.php">Galeria</a>
              </li>
            </ul>
            
            <?php include_once "../includes/navbar_social.php" ?>
            
          </div>
        </div>
      </nav>
    </header>

    <main class="mx-3 my-4">
      <h1 class="display-1">Galeria</h1>

      <div class="grid">
        <?php 
          const ARR_HEIGTH = ['200', '300', '400', '500'];

          for ($i = 0; $i < 32; $i++) { 
            $rng = rand(0, count(ARR_HEIGTH) - 1);
            $rng =  ARR_HEIGTH[$rng];
          ?>
            <div class="grid-item bg-secondary rounded"> <img src="https://picsum.photos/300/<?= $rng ?>?random=<?= $i ?>" width="300" height=<?= $rng ?>></div>
          <?php
          }
          ?>
      </div>
      </div>
    </main>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <!-- Masonry layout JS -->
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

  <script>
    let elem = document.querySelector('.grid');
    let msnry = new Masonry( elem, {
      // opciones del masonry layout 
      itemSelector: '.grid-item',
      gutter: 10,
      fitWidth: true
    });
    
  </script>

</body>

</html>