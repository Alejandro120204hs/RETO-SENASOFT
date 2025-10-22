<?php

function cargarModelos(){
        // CREAMOS EL OBJETO PARA ALMACENAR LOS DATOS
        $objetoVuelo = new Vuelo();
        $datos = $objetoVuelo ->mostrarModelos();

        if(empty($datos)){
            echo"<h2>No hay modelos registrados</h2>";
        }else{
            foreach($datos as $f){
                echo'
                
                 <option value="'.$f['id'].'">'.$f['nombre_modelo'].'</option>
                
                
                ';
            }
        }
    }

    function cargarAviones(){
        // CREAMOS EL OBJETO PARA ALMACENAR LOS DATOS
        $objetoVuelo = new Vuelo();
        $datos = $objetoVuelo ->mostrarAviones();

        if(empty($datos)){
            echo"<h2>No hay aviones registrados</h2>";
        }else{
            foreach($datos as $f){
                echo'
                
                 <option value="'.$f['id'].'">'.$f['matricula'].'</option>
                
                
                ';
            }
        }
    }

     function cargarVuelos($origen,$destino,$fecha_salida){
        // CREAMOS EL OBJETO PARA ALMACENAR LOS DATOS
        $objetoVuelo = new Vuelo();
        $datos = $objetoVuelo -> mostrarVuelosIda($origen, $destino, $fecha_salida);

        if(empty($datos)){
            echo"<h2>No hay Vuelos registrados</h2>";
        }else{
            foreach($datos as $f){
                echo'
                
                 <div class="card flight-card p-3 d-flex flex-row align-items-center justify-content-between flex-wrap">
                    <div class="d-flex align-items-center gap-3">
                        <img src="../../public/assets/img/avion.png" alt="avión" class="icono-avion">
                        <div>
                            <h6 class="mb-1 fw-bold">Vuelo '.$f['codigo_vuelo'].'</h6>
                            <small class="text-muted">Avión: '.$f['nombre_avion'].'</small>
                            <h2 class="asiento">'.$f['capacidad'].' asientos disponibles</h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <h4 class="fw-bold mb-0">'.$f['hora'].'</h4>
                        <small class="text-muted">'.$f['origen'].'</small>
                    </div>
                    <div class="text-center mx-3">
                        <div class="d-flex flex-column align-items-center">
                            <span class="text-muted small">'.$f['fecha'].'</span>
                            <img src="../../public/assets/img/despegue-del-avion.png" alt="avión" style="width: 36px;">
                        </div>
                        <small class="text-muted">'.$f['codigo_vuelo'].'</small>
                    </div>
                    <div class="text-center">
                        
                        <small class="text-muted">'.$f['destino'].'</small>
                    </div>
                    <div class="text-center">
                        <h5><span>$'.$f['precio'].'</span> COP</h5>
                        <a href="clienteDashboardRegistro.php?id_vuelo='.$f['id'].'" class="seleccionar">Seleccionar</a>
                    </div>
                </div>
                
                
                ';
            }
        }

        
    }

    function cargarVuelosRegreso($origen,$destino,$fecha_regreso){
        // CREAMOS EL OBJETO PARA ALMACENAR LOS DATOS
        $objetoVuelo = new Vuelo();
        $datos = $objetoVuelo -> mostrarVuelosRegreso($origen, $destino, $fecha_regreso);

        
        if(empty($datos)){
            echo"<h2>No hay Vuelos registrados</h2>";
        }else{
            foreach($datos as $f){
                echo'
                
                 <div class="card flight-card p-3 d-flex flex-row align-items-center justify-content-between flex-wrap">
                    <div class="d-flex align-items-center gap-3">
                        <img src="../../public/assets/img/avion.png" alt="avión" class="icono-avion">
                        <div>
                            <h6 class="mb-1 fw-bold">Vuelo '.$f['codigo_vuelo'].'</h6>
                            <small class="text-muted">Avión: '.$f['nombre_avion'].'</small>
                            <h2 class="asiento">'.$f['capacidad'].' asientos disponibles</h2>
                        </div>
                    </div>
                    <div class="text-center">
                        <h4 class="fw-bold mb-0">'.$f['hora'].'</h4>
                        <small class="text-muted">'.$f['origen'].'</small>
                    </div>
                    <div class="text-center mx-3">
                        <div class="d-flex flex-column align-items-center">
                            <span class="text-muted small">'.$f['fecha'].'</span>
                            <img src="../../public/assets/img/despegue-del-avion.png" alt="avión" style="width: 36px;">
                        </div>
                        <small class="text-muted">'.$f['codigo_vuelo'].'</small>
                    </div>
                    <div class="text-center">
                        
                        <small class="text-muted">'.$f['destino'].'</small>
                    </div>
                    <div class="text-center">
                        <h5><span>$'.$f['precio'].'</span> COP</h5>
                        <a href="clienteDashboardRegistro.php" class="seleccionar">Seleccionar</a>
                    </div>
                </div>
                
                
                ';
            }
        }

        
    }

    

?>