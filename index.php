<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!-- Google fonts (Fira Sans) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Link Css -->
  <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-dark-subtle shadow-sm">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Atividade POO</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cargo</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="view/page/cargo.php">Buscar</a></li>
                <li><a class="dropdown-item" href="view/page/formCargo.php">Cadastrar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Departamento</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="view/page/departamento.php">Buscar</a></li>
                <li><a class="dropdown-item" href="view/page/formDepartamento.php">Cadastrar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Funcionario</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="view/page/funcionario.php">Buscar</a></li>
                <li><a class="dropdown-item" href="view/page/formFuncionario.php">Cadastrar</a></li>
              </ul>
            </li>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main class="m-4">
    <h3 class="fw-normal">Home</h3>
  </main>
  <?php include 'view/layout/footer.php' ?>
</body>
</html>