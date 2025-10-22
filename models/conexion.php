<!-- NOS ENLAZAMOS A LA BASE DE DATOS -->

<?php
    session_start();
    class Conexion{
        public function get_conexion(){
            $user = "root";
            $pass = "";
            $host = "loaclhots";
            $dbname = "pragma";

            $conexion = new PDO("mysql: host=$host; dbname=$dbname",$user,$pass);
            return $conexion;

        }
    }

?>