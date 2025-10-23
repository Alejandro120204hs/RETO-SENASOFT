<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/vuelo.php");

    // CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS A TARAVEZ DEL METODO POST Y LOS NAME DE LOS CAMPSO
    $origen = $_POST['origen'] ?? '';
    $destino = $_POST['destino'] ?? '';
    $fecha_salida = $_POST['fecha_salida'] ?? '';
    $fecha_regreso = $_POST['fecha_regreso'] ?? '';

    // Redirigir a la vista de resultados con los parámetros
    header("Location: ../views/cliente/clienteVuelosIdaRegreso.php?origen=$origen&destino=$destino&fecha_salida=$fecha_salida&fecha_regreso=$fecha_regreso");
    exit;

?>