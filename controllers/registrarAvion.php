<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/vuelo.php");

    // CAPTURAMOS NE VAIRBALES LOS DATOS ENVIADOS A TARAVEZ DEL METODO POST Y LOS NAME DE LOS CAMPOS
    $matricula = $_POST['matricula'];
    $modelo = $_POST['modelo'];

    // PROGRAMACION ORIEMTADA A OBJETOS
    // ACCEDEMOS A LA FUNCION
    $objetoVuelo = new Vuelo();
    $objetoVuelo -> insertarAvion($matricula,$modelo);

?>