<?php
session_start();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

  <nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="cad-usuario.php">Cadastre-se</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="cad-contato.php">Contato</a>
      </li>
      <?php 
    if(isset($_SESSION['logado']))
    {
    ?>
      <li class="nav-item">
        <a class="nav-link" href="cad-categoria.php">Categorias</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="cad-filme.php">Filmes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cad-ator.php">Atores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cad-pais.php">Países</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cad-idioma.php">Idiomas</a>
      </li>
     <?php
    }
     ?>
    </ul>
    <?php 
    if(empty($_SESSION['logado']))
    {
    ?>
    <form class="d-flex" method="post" action="login.php">
        <input class="form-control me-2" type="text" placeholder="Login" name="login">
        <input class="form-control me-2" type="password" placeholder="Senha" name="senha">
        <button class="btn btn-primary" type="submit">Login</button>
       
      </form>
      <?php
    }
    //ele só entra no else se estiver logado
    else
    {
      echo "<div>
      <img src='img/$_SESSION[foto]' width='50' heigth='50' class='rounded-circle'>'Olá $_SESSION[login]!!!<a href='logout.php' class='btn btn-danger'>Sair</a></div>";
    }

    ?>
  </div>
</nav>

