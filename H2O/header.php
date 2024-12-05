<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Reporte de Saneamiento</title>
    <!-- BOOTSTRAP 4  -->
    <link rel="stylesheet" href="./css/styles.css">
  
  
    <!-- BARRA DE NAVEGACIÓN  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" style="padding:10px;" href=".">H20+</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: flex; justify-content: flex-end;">
        <!-- Menú principal -->
        <ul class="navbar-nav ml-auto " style="padding-left:10px;">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(actual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Reporte.php">Reportar un problema</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Blog.php">Reportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Saneamiento.php">Saneamiento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Administrador.php">Administrador</a>
          </li>
        </ul>
    
        
      </div>
      
      <!-- Barra de búsqueda -->
      <div id="Buscar">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" name="search" id="search" type="search" placeholder="ID, Municipio, Problema" aria-label="Search">
          <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
      </nav>
    
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</header>