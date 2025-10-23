<?php

    class Vuelo{

        public function insertarModelo($modelo,$capacidad){
            // INSTANCEAMOS LA CONEXION
            $obejtoConexion = new Conexion();
            $conexion = $obejtoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $registrar = "INSERT INTO modelo_avion(nombre_modelo,capacidad) VALUES('$modelo','$capacidad')";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($registrar);
            $resultado -> execute();

            echo"<script>alert('Modelo registrado con exito')</script>";
            echo"<script>location.href='../views/admin/adminDashboard.php'</script>";
        }

        public function mostrarModelos(){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $consultar = "SELECT * FROM modelo_avion";
            
            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($consultar);
            $resultado -> execute();
            $f = $resultado -> fetchAll();
            return $f;
        }

        public function insertarAvion($matricula,$modelo){
            // INSTANCEAMOS LA CONEXION
            $obejtoConexion = new Conexion();
            $conexion = $obejtoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $registrar = "INSERT INTO avion(matricula,id_modelo) VALUES('$matricula','$modelo')";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($registrar);
            $resultado -> execute();

            // OBTENER EL ID DEL AVIÓN RECIÉN REGISTRADO
            $id_avion = $conexion->lastInsertId();

            // CONSULTAR LA CAPACIDAD DEL MODELO
            $consultarCapacidad = "SELECT capacidad FROM modelo_avion WHERE id = '$modelo'";
            $resultadoCapacidad = $conexion -> prepare($consultarCapacidad);
            $resultadoCapacidad -> execute();
            $capacidad = $resultadoCapacidad -> fetchColumn();

                        // ---------- GENERACIÓN AUTOMÁTICA DE ASIENTOS ----------
                // Suponemos 6 asientos por fila (A-F). Puedes cambiarlo.
                $asientosPorFila = 6;

                // Calcular número total de filas
                $totalFilas = ceil($capacidad / $asientosPorFila);

                // Generar letras de las filas (A, B, C, ...)
                $letras = range('A', 'Z'); // soporta hasta 26 filas, puedes ampliar si lo deseas

                $contador = 0;
                for ($fila = 0; $fila < $totalFilas; $fila++) {
                    for ($columna = 1; $columna <= $asientosPorFila; $columna++) {
                        $contador++;
                        if ($contador > $capacidad) break; // no pasar del total de capacidad

                        $numeroAsiento = $letras[$fila] . $columna; // Ej: A1, A2, B3, etc.

                        $insertarAsiento = "INSERT INTO asiento(id_avion, numero_asiento) 
                                            VALUES('$id_avion', '$numeroAsiento')";
                        $resultadoAsiento = $conexion -> prepare($insertarAsiento);
                        $resultadoAsiento -> execute();
                    }
                }


            echo"<script>alert('Avion registrado con exito')</script>";
            echo"<script>location.href='../views/admin/adminDashboard.php'</script>";
        }

        public function mostrarAviones(){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $consultar = "SELECT * FROM avion";
            
            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($consultar);
            $resultado -> execute();
            $f = $resultado -> fetchAll();
            return $f;
        }


        public function registrarVuelo($codigo_vuelo,$origen,$destino,$fecha,$hora,$precio,$avion){
            // INSTANCEAMOS LA CONEXION
            $obejtoConexion = new Conexion();
            $conexion = $obejtoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $registrar = "INSERT INTO vuelo(codigo_vuelo,origen,destino,fecha,hora,precio,id_avion) VALUES('$codigo_vuelo','$origen','$destino','$fecha','$hora','$precio','$avion')";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($registrar);
            $resultado -> execute();

            echo"<script>alert('Vuelo registrado con exito')</script>";
            echo"<script>location.href='../views/admin/adminDashboard.php'</script>";
        }

        public function mostrarVuelosIda($origen, $destino, $fecha_salida){
            // INSTANCEAMOS LA CONEXION
            $obejtoConexion = new Conexion();
            $conexion = $obejtoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $consultar_fecha_salida = "SELECT vuelo.*, modelo_avion.capacidad AS capacidad, modelo_avion.nombre_modelo AS nombre_avion FROM vuelo INNER JOIN avion ON vuelo.id_avion = avion.id INNER JOIN modelo_avion ON avion.id_modelo=modelo_avion.id WHERE vuelo.origen = '$origen' AND vuelo.destino = '$destino' AND vuelo.fecha = '$fecha_salida'";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultado = $conexion -> prepare($consultar_fecha_salida);
            $resultado -> execute();
            $f = $resultado -> fetchAll();
            return $f;
            
        }

            public function mostrarVuelosRegreso($origen,$destino, $fecha_regreso){
                // INSTANCEAMOS LA CONEXION
                $obejtoConexion = new Conexion();
                $conexion = $obejtoConexion -> get_conexion();

                // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
                $consultar_fecha_regreso = "SELECT vuelo.*, modelo_avion.capacidad AS capacidad, modelo_avion.nombre_modelo AS nombre_avion FROM vuelo INNER JOIN avion ON vuelo.id_avion = avion.id INNER JOIN modelo_avion ON avion.id_modelo=modelo_avion.id WHERE vuelo.origen = '$destino' AND vuelo.destino = '$origen' AND vuelo.fecha = '$fecha_regreso'";

                // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
                $resultado = $conexion -> prepare($consultar_fecha_regreso);
                $resultado -> execute();
                $f = $resultado -> fetchAll();
                return $f;
                
            }

            public function mostrarAsientos($id_vuelo){
                // INSTANCEAMOS LA CONEXION
                $objetoConexion = new Conexion();
                $conexion = $objetoConexion -> get_conexion();

                // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
                $consultar = "SELECT asiento.* FROM asiento INNER JOIN avion ON asiento.id_avion=avion.id INNER JOIN vuelo ON vuelo.id_avion=avion.id WHERE vuelo.id=$id_vuelo";

                // PREPARAMOS LA ACCION A EJEUCATR Y LA EJECUTAMOS
                $resultado = $conexion -> prepare($consultar);
                $resultado -> execute();
                $f = $resultado -> fetchAll();
                return $f;
            }

            public function mostrarPrecio($id_vuelo){
                // INSTANCEAMOS LA CONEXION
                $objetoConexion = new Conexion();
                $conexion = $objetoConexion -> get_conexion();

                // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
                $consultar = "SELECT precio FROM vuelo WHERE id = $id_vuelo";

                // PREPARAMOS LA ACCION A EJEUCATR Y LA EJECUTAMOS
                $resultado = $conexion -> prepare($consultar);
                $resultado -> execute();
                $f = $resultado -> fetch();
                return $f;
            }
            
          public function insribirseVuelo(
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
    $precio_vuelo // este ahora contendrá el TOTAL ya calculado en el formulario
){
    // INSTANCIAMOS LA CONEXIÓN 
    $objetoConexion = new Conexion();
    $conexion = $objetoConexion->get_conexion();

    // ==========================
    // INSERTAR PAGADOR
    // ==========================
    $insertarPagador = "INSERT INTO pagador (nombre, tipo_documento, numero_documento, correo, telefono)
                        VALUES ('$nombre_pagador', '$tipo_documento_pagador', '$documento_pagador', '$correo_pagador', '$telefono_pagador')";
    $resultadoPagador = $conexion->prepare($insertarPagador);
    $resultadoPagador->execute();
    $id_pagador = $conexion->lastInsertId();

    // ==========================
    // CREAR RESERVA
    // ==========================
    $codigo_reserva = 'RSV-' . rand(10000, 99999);
    $fecha_reserva = date('Y-m-d');
    $estado = 'pendiente';

    // AQUÍ usamos directamente el total que viene del formulario
    $valor_total = $precio_vuelo;

    $insertarReserva = "INSERT INTO reserva (codigo_reserva, id_vuelo, fecha_reserva, valor_total, estado)
                        VALUES ('$codigo_reserva', '$id_vuelo', '$fecha_reserva', '$valor_total', '$estado')";
    $resultadoReserva = $conexion->prepare($insertarReserva);
    $resultadoReserva->execute();
    $id_reserva = $conexion->lastInsertId();

    // ==========================
    // INSERTAR PASAJEROS Y DETALLES
    // ==========================
    foreach ($primer_apellido as $i => $apellido1) {

        $apellido2 = $segundo_apellido[$i];
        $nombre = $nombres[$i];
        $fecha = $fecha_nacimiento[$i];
        $gen = $genero[$i];
        $tipo_doc = $tipo_documento[$i];
        $doc = $documento[$i];
        $inf = $infante[$i];
        $tel = $telefono[$i];
        $seat = $asientos[$i];

        // INSERTAR PASAJERO
        $insertarPasajero = "INSERT INTO pasajero
            (primer_apellido, segundo_apellido, nombres, fecha_nacimiento, genero, tipo_documento, numero_documento, infante, celular, correo)
            VALUES ('$apellido1', '$apellido2', '$nombre', '$fecha', '$gen', '$tipo_doc', '$doc', '$inf', '$tel', '$correo')";
        $resultadoPasajero = $conexion->prepare($insertarPasajero);
        $resultadoPasajero->execute();
        $id_pasajero = $conexion->lastInsertId();

        // INSERTAR EN DETALLE DE RESERVA
        $insertarDetalle = "INSERT INTO reserva_detalle (id_reserva, id_pasajero, id_asiento)
                            VALUES ('$id_reserva', '$id_pasajero', '$seat')";
        $resultadoDetalle = $conexion->prepare($insertarDetalle);
        $resultadoDetalle->execute();

        // ACTUALIZAR ESTADO DEL ASIENTO
        $actualizarAsiento = "UPDATE asiento SET estado='ocupado' WHERE id='$seat'";
        $resultadoAsiento = $conexion->prepare($actualizarAsiento);
        $resultadoAsiento->execute();
    }

     echo"<script>alert('Vuelo registrado con exito')</script>";
echo"<script>location.href='../views/cliente/clienteDashboard.php'</script>";
}


    
}

?>