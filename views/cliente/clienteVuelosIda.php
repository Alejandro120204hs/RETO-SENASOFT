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
    <title>Ida</title>

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
                            <a class="nav-link" href="#"><img src="../../public/assets/img/boton-eliminar.png" alt="" class="cerrar-sesion"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- HEADER ESTILO TAB -->
        <div class="page-header">
            <div class="page-header-content">
                <span class="page-icon">✈️</span>
                <h1 class="page-title">Vuelos de Ida</h1>
            </div>
        </div>

        <div id="hero">
            <div class="container my-4">
                

                <?php
                    $origen = $_GET['origen'] ?? '';
                    $destino = $_GET['destino'] ?? '';
                    $fecha_salida = $_GET['fecha_salida'] ?? '';

                    if ($origen && $destino && $fecha_salida) {
                        cargarVuelos($origen, $destino, $fecha_salida);
                    } else {
                        echo "<h2>No se recibieron los datos del vuelo correctamente.</h2>";
                    }
                ?>
            </div>
        </div>
    </header>

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>