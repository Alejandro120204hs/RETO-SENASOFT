<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/vuelo.php");

    // CAPTURAMOS NE VAIRBALES LOS DATOS ENVIADOS A TARAVEZ DEL METODO POST Y LOS NAME DE LOS CAMPOS
    $modelo = $_POST['modelo'];
    $capacidad = $_POST['capacidad'];

    // PROGRAMACION ORIEMTADA A OBJETOS
    // ACCEDEMOS A LA FUNCION
    $objetoVuelo = new Vuelo();
    $objetoVuelo -> insertarModelo($modelo,$capacidad);

?>