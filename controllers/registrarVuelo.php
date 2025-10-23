<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARAS
    require_once("../models/conexion.php");
    require_once("../models/vuelo.php");

    // CAPTURAMOS NE VARIABLES LOS DATOS ENVIADOS A TARAVEZ DEL METODO POST Y LOS NAME DE LOS CAMPOS
    $codigo_vuelo = $_POST['codigo_vuelo'];
    $avion = $_POST['avion'];
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $precio = $_POST['precio'];

    // PROGRAMACION OREINTDA A OBJETOS
    // ACCEDEMOS A LA FUNCION
    $objetoVuelo = new Vuelo();
    $objetoVuelo -> registrarVuelo($codigo_vuelo,$origen,$destino,$fecha,$hora,$precio,$avion);

?>