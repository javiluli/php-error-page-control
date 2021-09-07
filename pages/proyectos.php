<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once "../includes/meta-tag.php" ?>
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
                <a class="nav-link" href="../index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./proyectos.php">Proyectos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="galeria.php">Galeria</a>
              </li>
            </ul>

            <?php include_once "../includes/navbar_social.php" ?>

          </div>
        </div>
      </nav>
    </header>

    <main class="container my-4">
      <h1 class="display-1">Proyectos</h1>
      
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="https://picsum.photos/1920/1080?random=1" class="card-img-top" alt="html5-icon">
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ad nam quos nostrum sunt in.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://picsum.photos/1920/1080?random=2" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aliquam sint reiciendis inventore quia odio!</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://picsum.photos/1920/1080?random=3" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse inventore odio facere eum commodi iure!</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://picsum.photos/1920/1080?random=4" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis et earum corporis totam temporibus cumque!</p>
            </div>
          </div>
        </div>
      </div>

    </main>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>

</html>