<?php

    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../models/conexion.php");
    require_once("../models/usuario.php");

    // CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS A TARAVEZ DEL METODO POST Y LOS NAME DE LOS CAMPOS
    $nombres = $_POST['nombres'];
    $correo = $_POST['correo'];
    $clave = md5($_POST['clave']);

    // PRPGRAMACION ORIENTADA A OBJETOS
    // ACCDEMOS A LA FUNCION
    $objetoUsuario = new Usuario();
    $objetoUsuario -> insertarUsuario($nombres,$correo,$clave);

?>