<?php

// IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
require_once("../models/conexion.php");
require_once("../models/vuelo.php");

// CAPTURAMOS LOS DATOS ENVIADOS ATARVEZ DEL METODO POST Y LOS NAME DE LOS CAMPOS
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$nombres = $_POST['nombres'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$genero = $_POST['genero'];
$tipo_documento = $_POST['tipo_documento'];
$documento = $_POST['documento'];
$infante = $_POST['infante'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$nombre_pagador = $_POST['nombre_pagador'];
$tipo_documento_pagador = $_POST['tipo_documento_pagador'];
$documento_pagador = $_POST['documento_pagador'];
$correo_pagador = $_POST['correo_pagador'];
$telefono_pagador = $_POST['telefono_pagador'];
$asientos = $_POST['asientos'];
$id_vuelo = $_POST['id_vuelo'];
$precio_vuelo = $_POST['precio_vuelo'];

// ⚙️ Aseguramos que los campos sean arrays (por si solo hay 1 pasajero)
if (!is_array($primer_apellido)) {
    $primer_apellido = [$primer_apellido];
    $segundo_apellido = [$segundo_apellido];
    $nombres = [$nombres];
    $fecha_nacimiento = [$fecha_nacimiento];
    $genero = [$genero];
    $tipo_documento = [$tipo_documento];
    $documento = [$documento];
    $infante = [$infante];
    $telefono = [$telefono];
}

// PROGRAMACION ORIENTADA A OBJETOS
$objetoVuelo = new Vuelo();
$objetoVuelo->insribirseVuelo(
    $primer_apellido,
    $segundo_apellido,
    $nombres,
    $fecha_nacimiento,
    $genero,
    $tipo_documento,
    $documento,
    $infante,
    $telefono,
    $correo,
    $nombre_pagador,
    $tipo_documento_pagador,
    $documento_pagador,
    $correo_pagador,
    $telefono_pagador,
    $asientos,
    $id_vuelo,
    $precio_vuelo
);
?>
