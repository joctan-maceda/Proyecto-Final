<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Reporte de Saneamiento</title>
    <!-- BOOTSTRAP 4  -->
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
  
  
    <!-- BARRA DE NAVEGACIÓN  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href=".">ProductApp</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Menú principal -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(actual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Reporte.php">Reportar un problema</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Saneamiento.php">Saneamiento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Administrador.php">Administrador</a>
          </li>
        </ul>
    
        <!-- Barra de búsqueda -->
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" name="search" id="search" type="search" placeholder="ID, marca o descripción" aria-label="Search">
          <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</header>