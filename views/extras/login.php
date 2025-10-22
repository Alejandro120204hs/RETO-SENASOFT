<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS Propio -->
  <link rel="stylesheet" href="../../public/assets/extras/stylesLogin.css">
</head>
<body>

    <div class="container">
        <form action="../../controllers/iniciarSesion.php" method="POST">
  <a href="login.php" class="recuperar"><img src="../../public/assets/img/logo-white.png" alt=""></a>
        <div class="enlaces">
            <a href="login.php" class="active">Ingresar</a>
            <a href="registro.php" >Registrarse</a>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="clave">
        </div>

        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="rol">
                <option selected>Seleccione un rol</option>
                <option value="1">Cliente</option>
                <option value="2">Administrador</option>
                
            </select>
        </div>

        <a href="recuperarclave.php">Recuperar Contraseña</a>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
    </div>
    

    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>