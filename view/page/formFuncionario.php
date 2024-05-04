
    
    
                
                
                <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Departamento</title>

  <!-- Google fonts (Fira Sans) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link hr
    ef="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" i
    ntegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- Link Css -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php include '../../controller/recebeFuncionario.php' ?>
  <?php include '../../controller/exibeDepartamento.php' ?>
  <?php include '../../controller/exibeCargo.php' ?>

  <header>
    <nav class="navbar navbar-expand-lg bg-dark-subtle shadow-sm">
      <div class="container-fluid">
        <a class="navbar-brand" href="../../index.html">Atividade POO</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cargo</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="cargo.php">Buscar</a></li>
                <li><a class="dropdown-item" href="formCargo.php">Cadastrar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Departamento</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="departamento.php">Buscar</a></li>
                <li><a class="dropdown-item" href="formDepartamento.php">Cadastrar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Funcionario</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="funcionario.php">Buscar</a></li>
                <li><a class="dropdown-item" href="formFuncionario.php">Cadastrar</a></li>
              </ul>
            </li>
        </div>
      </div>
      </div>
    </nav>
  </header>
  <main class="m-4 d-flex flex-column">
    <form action="" method="post" class="mb-3" style="width: 400px;">
      <h3 class="fw-normal">Funcionario</h3>
      <fieldset class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" maxlength="45" placeholder="Nome" required>

        <label for="cpf" class="form-label">CPF</label>
        <input type="text" id="cpf" name="cpf" class="form-control" maxlength="45" placeholder="CPF" required>

        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" id="telefone" name="telefone" class="form-control" maxlength="45" placeholder="Telefone"
          required>

        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" id="endereco" name="endereco" class="form-control" maxlength="45" placeholder="Endereço"
          required>
        <label for="codDepartamento" class="form-label">Departamento</label>
        <select name="codDepartamento" class="form-select">
          <?php foreach ($resultDepartamento as $values) { ?>
            <option value="<?php echo $values['codDepartamento'] ?>"><?php echo $values['nomeDepartamento'] ?></option>
          <?php } ?>
        </select>
        <label for="codCargo" class="form-label">Cargo</label>
        <select name="codCargo" class="form-select">
          <?php foreach ($resultCargo as $values) { ?>
            <option value="<?php echo $values['codCargo'] ?>"><?php echo $values['nomeCargo'] ?></option>
          <?php } ?>
        </select>
      </fieldset>
      <button type="submit" class="btn btn-primary w-100">Enviar</button>
    </form>
    <?php if (isset($result) && $result) {
      echo '
      <section class="position-relative" style="width: 400px;">
        <div class="alert alert-success alert-dismissible fade show position-absolute w-100" role="alert">
          <span>Cadastrado com sucesso!</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </section>
    ';
    } else if (isset($result) && !$result) {
      echo '
      <section class="position-relative" style="width: 400px;">
        <div class="alert alert-danger alert-dismissible fade show position-absolute w-100" role="alert">
          <span>Erro ao cadastrar!</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </section>
    ';
    } ?>
  </main>
  <footer class="navbar navbar-expand-lg bg-dark-subtle fixed-bottom shadow-sm">
    <nav class="d-flex justify-content-center container-fluid">
      <span class="nav-link">
        Criado por: <a href="#">Gustavo Sachetto</a> e <a href="#">Gustavo Gualda</a>
      </span>
    </nav>
  </footer>
</body>

</html>