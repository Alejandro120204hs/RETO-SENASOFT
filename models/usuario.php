<?php
 use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Ajusta la ruta según dónde esté PHPMailer
    // Si está en la raíz del proyecto:
    require __DIR__ . '/../PHPMailer/Exception.php';
    require __DIR__ . '/../PHPMailer/PHPMailer.php';
    require __DIR__ . '/../PHPMailer/SMTP.php';
    // SE CREA LA CLASE 
    class Usuario{
        // CREAMOS LAS FUNCIONES PUBLICAS
        public function insertarUsuario($nombres,$correo,$clave){
             // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // VERIFICAMOS QUE EL USUARIO NO ESTE REGISTRADO
            $consultar = "SELECT * FROM cliente WHERE correo='$correo'";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultdo = $conexion -> prepare($consultar);
            $resultdo -> execute();
            $f = $resultdo -> fetch();

            if($f){
                echo"<script>alert('El usuario ya se encuentra registrado, porfavor registre un correo nuevo')</script>";
                echo"<script>location.href='../views/extras/login.php'</script>";
            }else{
                // DEFINIMOS EN UNA VARIBALE LA CONSULTA DE SQL SEGUN SEA EL CASO
                $registrar = "INSERT INTO cliente(nombres,correo,password) VALUES('$nombres','$correo','$clave')";

                // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
                $resultdo = $conexion -> prepare($registrar);
                $resultdo -> execute();

                echo"<script>alert('Cliente registrado con exito')</script>";
                echo"<script>location.href='../views/extras/login.php'</script>";
            }
        }

         public function iniciarCliente($email,$clave){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $consultar = "SELECT * FROM cliente WHERE correo='$email'";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultdo = $conexion -> prepare($consultar);
            $resultdo -> execute();
            $f = $resultdo -> fetch();

            if($f){
                $_SESSION['id']=$f['id'];
    

                if($clave==$f['password']){
                    echo"<script>alert('Bienvenido cliente ".$f['nombres']."')</script>";
                    echo"<script>location.href='../views/cliente/clienteDashboard.php'</script>";
                }else{
                    echo"<script>alert('Contraseña incorrecta')</script>";
                    echo"<script>location.href='../views/extras/login.php'</script>";
                }
            }else{
                echo"<script>alert('Usuario no encontrado, porfavor ingrese un correo valido')</script>";
                echo"<script>location.href='../views/extras/login.php'</script>";
            }
        }

        public function iniciarAdministrador($email,$clave){
            // INSTANCEAMOS LA CONEXION
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion -> get_conexion();

            // DEFINIMOS EN UNA VARIABLE LA CONSULTA DE SQL SEGUN SEA EL CASO
            $consultar = "SELECT * FROM admin WHERE correo='$email'";

            // PREPARAMOS LA ACCION A EJECUTAR Y LA EJECUTAMOS
            $resultdo = $conexion -> prepare($consultar);
            $resultdo -> execute();
            $f = $resultdo -> fetch();
            if($f){
                $_SESSION['autenticado']='si';
                $_SESSION['rol']='Administrador';

                if($clave==$f['password']){
                    echo"<script>alert('Bienvenid@ adminstrad@r ".$f['nombres']."')</script>";
                    echo"<script>location.href='../views/admin/adminDashboardRegistrarVuelo.php'</script>";
                }else{
                    echo"<script>alert('Contraseña incorrecta')</script>";
                    echo"<script>location.href='../views/extras/login.php'</script>";
                }
            }else{
                echo"<script>alert('Usuario no encontrado, porfavor ingrese un correo valido')</script>";
                echo"<script>location.href='../views/extras/login.php'</script>";
            }
        }

        public function recuperarClave($identificacion,$email){
            
        }
    }


?>