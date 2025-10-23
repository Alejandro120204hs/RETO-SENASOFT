<!-- IMPORTAMOS LAS DEPENDENCIAS NECESARIAS -->
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
  <title>Registrar Avión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../public/assets/admin/styles.css">
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="adminDashboard.php">
        <img src="../../public/assets/img/logo-final-sky.png" alt="Logo" class="me-2" height="42">
      </a>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a href="adminDashboardRegistrarModelo.php" class="nav-link enlace-nav">Modelos</a></li>
          <li class="nav-item"><a href="adminDashboardRegistrarAvion.php" class="nav-link enlace-nav active">Aviones</a></li>
          <li class="nav-item"><a href="adminDashboard.php" class="nav-link enlace-nav">Vuelos</a></li>
        </ul>

        <div class="d-flex align-items-center gap-2">
          <span class="nombre-admin">Alejandro Hernandez</span>
          <a href="#"><img src="../../public/assets/img/boton-eliminar.png" alt="Cerrar sesión" class="cerrar-sesion"></a>
        </div>
      </div>
    </div>
  </nav>

  <!-- CONTENIDO PRINCIPAL -->
  <div class="container mt-5">
    <div class="form-card mx-auto">
      <h2 class="titulo-form text-center mb-4">Registrar Nuevo Avión</h2>
      
      <form action="../../controllers/registrarAvion.php" method="POST">
        <div class="mb-3">
          <label for="matricula" class="form-label">Matrícula del avión</label>
          <input type="text" id="matricula" name="matricula" class="form-control input-form" placeholder="Ej: HK-4839" required>
        </div>

        <div class="mb-3">
          <label for="modelo" class="form-label">Modelo de avión</label>
          <select id="modelo" name="modelo" class="form-select input-form" required>
            <option value="" disabled selected>Seleccionar modelo...</option>
            <!-- Aquí se llenan los modelos desde la BD -->
           <?php
              cargarModelos();
           ?>

          </select>
        </div>

        

        <div class="text-center">
          <button type="submit" class="btn-registrar">Registrar Avión</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
