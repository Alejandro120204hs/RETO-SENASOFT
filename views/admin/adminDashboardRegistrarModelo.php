<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Modelo de Avión</title>
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
          <li class="nav-item"><a href="adminDashboardRegistrarModelo.php" class="nav-link enlace-nav active">Modelos</a></li>
          <li class="nav-item"><a href="adminDashboardRegistrarAvion.php" class="nav-link enlace-nav">Aviones</a></li>
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
      <h2 class="titulo-form text-center mb-4">Registrar Modelo de Avión</h2>
      
      <form action="../../controllers/registrarModelo.php" method="POST">
        <div class="mb-3">
          <label for="nombre_modelo" class="form-label">Nombre del modelo</label>
          <input type="text" id="nombre_modelo" name="modelo" class="form-control input-form" placeholder="Ej: Airbus A320" required>
        </div>

        <div class="mb-4">
          <label for="capacidad" class="form-label">Capacidad de pasajeros</label>
          <input type="number" id="capacidad" name="capacidad" class="form-control input-form" placeholder="Ej: 180" required min="1">
        </div>

        <div class="text-center">
          <button type="submit" class="btn-registrar">Registrar Modelo</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
