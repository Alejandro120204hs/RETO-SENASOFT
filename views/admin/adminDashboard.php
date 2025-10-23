<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin - Vuelos</title>
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
    <h2 class="titulo-dashboard text-center mb-4">Panel de Vuelos Registrados</h2>

    <div class="table-responsive">
      <table class="table table-hover align-middle tabla-vuelos">
        <thead>
          <tr>
            <th>ID</th>
            <th>Código de vuelo</th>
            <th>Avión</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Precio</th>
            <th>Pasajeros registrados</th>
          </tr>
        </thead>
        <tbody>
          <!-- Ejemplo de fila -->
          <tr>
            <td>1</td>
            <td>SKY-101</td>
            <td>Airbus A320</td>
            <td>Bogotá</td>
            <td>Cartagena</td>
            <td>2025-11-15</td>
            <td>08:30</td>
            <td>$250.000</td>
            <td>48</td>
          </tr>
          <tr>
            <td>2</td>
            <td>SKY-202</td>
            <td>Boeing 737</td>
            <td>Medellín</td>
            <td>Santa Marta</td>
            <td>2025-11-18</td>
            <td>13:45</td>
            <td>$310.000</td>
            <td>39</td>
          </tr>
          <!-- Agrega más filas dinámicamente o desde backend -->
        </tbody>
        
      </table>
      <a href="adminDashboardRegistrarVuelo.php" class="registrar">Registrar Vuelos</a>
    </div>
  </div>

</body>
</html>
