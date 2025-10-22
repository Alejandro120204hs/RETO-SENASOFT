<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS Propio -->
  <link rel="stylesheet" href="../../public/assets/extras/stylesLogin.css">
</head>
<body>

    <div class="container">
        <form action="../../controllers/registrarUsuario.php" method="POST">
       <a href="login.php" class="recuperar"><img src="../../public/assets/img/logo-white.png" alt=""></a>
        <div class="enlaces">
            <a href="login.php" >Ingresar</a>
            <a href="register.php" class="active" >Registrarse</a>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombres" name="nombres">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="correo">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="clave">
        </div>

        
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    </div>
    

    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>