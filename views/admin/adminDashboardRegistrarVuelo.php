<?php
  require_once("../../models/conexion.php");
  require_once("../../models/vuelo.php");
  require_once("../../controllers/mostrar.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Vuelo - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../public/assets/admin/styles.css">
</head>
<body>

   <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm py-3">
      <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="adminDashboard.php">
        <img src="../../public/assets/img/logo-final-sky.png" alt="Logo" class="logo-navbar me-2" />
       
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto gap-3">
          <li class="nav-item"><a class="nav-link enlace-nav" href="adminDashboardRegistrarModelo.php">Modelos</a></li>
          <li class="nav-item"><a class="nav-link enlace-nav" href="adminDashboardRegistrarAvion.php">Aviones</a></li>
          <li class="nav-item"><a class="nav-link enlace-nav active" href="adminDashboard.php">Vuelos</a></li>
        </ul>

        <ul class="navbar-nav ms-auto align-items-center gap-2">
          <li class="nav-item">
            <span class="usuario-nombre">Alejandro Hernandez</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="../../public/assets/img/boton-eliminar.png" alt="Cerrar sesión" class="cerrar-sesion" /></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-5">
    <h2 class="titulo-dashboard text-center mb-4">Registrar Nuevo Vuelo</h2>

    <form action="../../controllers/registrarVuelo.php" method="POST">
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="codigoVuelo" class="form-label">Código de Vuelo</label>
          <input type="text" class="form-control" id="codigoVuelo" placeholder="Ej: SKY-303" required name="codigo_vuelo">
        </div>
        <div class="col-md-6">
          <label for="avion" class="form-label">Avión</label>
         <select id="modelo" name="avion" class="form-select input-form" required>
            <option value="" disabled selected>Seleccione un avion</option>
            <!-- Aquí se llenan los modelos desde la BD -->
           <?php
              cargarAviones();
           ?>

          </select>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="origen" class="form-label">Origen</label>
          <input type="text" class="form-control" id="origen" placeholder="Ej: Bogotá" required name="origen">
        </div>
        <div class="col-md-6">
          <label for="destino" class="form-label">Destino</label>
          <input type="text" class="form-control" id="destino" placeholder="Ej: Medellín" required name="destino">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-4">
          <label for="fecha" class="form-label">Fecha</label>
          <input type="date" class="form-control" id="fecha" required name="fecha">
        </div>
        <div class="col-md-4">
          <label for="hora" class="form-label">Hora</label>
          <input type="time" class="form-control" id="hora" required name="hora">
        </div>
        <div class="col-md-4">
          <label for="precio" class="form-label">Precio</label>
          <input type="number" class="form-control" id="precio" placeholder="Ej: 250000" required name="precio">
        </div>
      </div>

     

      <div class="text-center">
        <button type="submit" class="registro">Registrar Vuelo</button>
      </div>
    </form>
  </div>

</body>
</html>
