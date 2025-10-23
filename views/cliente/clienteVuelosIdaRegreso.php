<?php

    require_once("../../models/conexion.php");
    require_once("../../models/vuelo.php");
    require_once("../../controllers/mostrar.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuelos</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- CSS PROPIO -->
    <link rel="stylesheet" href="../../public/assets/cliente/stylesVuelos.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="clienteDashboard.php"><img src="../../public/assets/img/logo-final-sky.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <img src="../../public/assets/img/avion.png" alt="" class="avion">
                        </li>
                        <li class="nav-item">
                            <h2>Alejandro Hernandez</h2>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../controllers/cerrarSesion.php"><img src="../../public/assets/img/boton-eliminar.png" alt="" class="cerrar-sesion"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- TABS Y CONTENIDO -->
    <div class="tabs-container">
        <!-- Tabs de navegación -->
        <div class="custom-tabs">
            <button class="tab-button active" onclick="switchTab('ida')">
                ✈️ Vuelos de Ida
            </button>
            <button class="tab-button" onclick="switchTab('vuelta')">
                🔄 Vuelos de Vuelta
            </button>
        </div>

        <!-- Contenido Tab Ida -->
        <div id="tab-ida" class="tab-content active">
            <div class="container my-4">
                <!-- <div class="card flight-card p-3 d-flex flex-row align-items-center justify-content-between flex-wrap">
                    <div class="d-flex align-items-center gap-3">
                        <img src="../../public/assets/img/avion.png" alt="avión" class="icono-avion">
                        <div>
                            <h6 class="mb-1 fw-bold">Vuelo FL001</h6>
                            <small class="text-muted">Avión: A320</small>
                            <h2 class="asiento">40 asientos disponibles</h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <h4 class="fw-bold mb-0">08:00</h4>
                        <small class="text-muted">Bogotá</small>
                    </div>
                    <div class="text-center mx-3">
                        <div class="d-flex flex-column align-items-center">
                            <span class="text-muted small">2025-10-25</span>
                            <img src="../../public/assets/img/despegue-del-avion.png" alt="avión" style="width: 36px;">
                        </div>
                        <small class="text-muted">FL001</small>
                    </div>
                    <div class="text-center">
                        <h4 class="fw-bold mb-0">09:15</h4>
                        <small class="text-muted">Medellín</small>
                    </div>
                    <div class="text-center">
                        <h5><span>$185.000</span> COP</h5>
                        <a href="clienteDashboardRegistro.php" class="seleccionar">Seleccionar</a>
                    </div>
                </div> -->
                 <?php
                    $origen = $_GET['origen'] ?? '';
                    $destino = $_GET['destino'] ?? '';
                    $fecha_salida = $_GET['fecha_salida'] ?? '';
                    $fecha_regreso = $_GET['fecha_regreso'] ?? '';

                    if ($origen && $destino && $fecha_salida) {
                        cargarVuelos($origen, $destino, $fecha_salida);
                    } else {
                        echo "<h2>No se recibieron los datos del vuelo correctamente.</h2>";
                    }
                ?>
            </div>

           
        </div>

        <!-- Contenido Tab Vuelta -->
        <div id="tab-vuelta" class="tab-content">
            <div class="container my-4">
                <!-- <div class="card flight-card p-3 d-flex flex-row align-items-center justify-content-between flex-wrap">
                    <div class="d-flex align-items-center gap-3">
                        <img src="../../public/assets/img/avion.png" alt="avión" class="icono-avion">
                        <div>
                            <h6 class="mb-1 fw-bold">Vuelo FL002</h6>
                            <small class="text-muted">Avión: A320</small>
                            <h2 class="asiento">40 asientos disponibles</h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <h4 class="fw-bold mb-0">09:00</h4>
                        <small class="text-muted">Medellín</small>
                    </div>
                    <div class="text-center mx-3">
                        <div class="d-flex flex-column align-items-center">
                            <span class="text-muted small">2025-10-30</span>
                            <img src="../../public/assets/img/despegue-del-avion.png" alt="avión" style="width: 36px;">
                        </div>
                        <small class="text-muted">FL002</small>
                    </div>
                    <div class="text-center">
                        <h4 class="fw-bold mb-0">10:15</h4>
                        <small class="text-muted">Bogotá</small>
                    </div>
                    <div class="text-center">
                        <h5><span>$195.000</span> COP</h5>
                        <a href="clienteDashboardRegistro.php" class="seleccionar">Seleccionar</a>
                    </div>
                </div> -->

               <?php
                    $origen = $_GET['origen'] ?? '';
                    $destino = $_GET['destino'] ?? '';
                    $fecha_regreso = $_GET['fecha_regreso'] ?? '';

                    if ($origen && $destino && $fecha_regreso) {
                        cargarVuelosRegreso($origen, $destino, $fecha_regreso);
                    } else {
                        echo "<h2>No se recibieron los datos del vuelo correctamente.</h2>";
                    }
                   ?>
               
            </div>

           
        </div>
    </div>

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz4YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- SCRIPT PARA TABS -->
    <script>
        function switchTab(tab) {
            // Remover clase active de todos los tabs
            const allTabs = document.querySelectorAll('.tab-button');
            const allContents = document.querySelectorAll('.tab-content');
            
            allTabs.forEach(t => t.classList.remove('active'));
            allContents.forEach(c => c.classList.remove('active'));
            
            // Agregar clase active al tab seleccionado
            if (tab === 'ida') {
                document.querySelector('.tab-button:first-child').classList.add('active');
                document.getElementById('tab-ida').classList.add('active');
            } else {
                document.querySelector('.tab-button:last-child').classList.add('active');
                document.getElementById('tab-vuelta').classList.add('active');
            }
        }
    </script>

    <script>
  // Guardar los filtros actuales para que se recuerden al redirigir
  const urlParams = new URLSearchParams(window.location.search);
  localStorage.setItem('origen', urlParams.get('origen') || '');
  localStorage.setItem('destino', urlParams.get('destino') || '');
  localStorage.setItem('fecha_salida', urlParams.get('fecha_salida') || '');
  localStorage.setItem('fecha_regreso', urlParams.get('fecha_regreso') || '');
</script>

</body>
</html>