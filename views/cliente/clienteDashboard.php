<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="../../public/assets/cliente/styles.css">
</head>

<body>
  <!-- NAVBAR -->
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="clienteDashboard.php">
          <img src="../../public/assets/img/logo-final-sky.png" alt="Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item">
              <img src="../../public/assets/img/avion.png" alt="Avión" class="avion" />
            </li>
            <li class="nav-item">
              <h2>Alejandro Hernandez</h2>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../controllers/cerrarSesion.php"><img src="../../public/assets/img/boton-eliminar.png" alt="Cerrar sesión" class="cerrar-sesion" /></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <h2 class="titulo text-center my-4">Tu viaje comienza aquí. Encuentra los mejores vuelos <br> al mejor precio</h2>

    <!-- Radio Buttons -->
    <div class="container">
      <div class="check d-flex justify-content-center gap-3">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipoVuelo" id="soloIda" value="ida">
          <label class="form-check-label" for="soloIda">Solo ida</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipoVuelo" id="idaRegreso" value="idaRegreso" checked>
          <label class="form-check-label" for="idaRegreso">Ida y regreso</label>
        </div>
      </div>
    </div>

    <!-- FORMULARIO IDA Y REGRESO -->
    <div class="container my-4" id="formIdaRegreso">
      <form action="../../controllers/buscarVuelosIdaRegreso.php" method="POST">

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="origen1" class="form-label">Origen</label>
            <input type="text" class="form-control" id="origen1" list="listaCiudades" placeholder="Escribe una ciudad" name="origen">
          </div>
          <div class="col-md-6 mb-3">
            <label for="destino1" class="form-label">Destino</label>
            <input type="text" class="form-control" id="destino1" list="listaCiudades" placeholder="Escribe una ciudad" name="destino">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label">Fecha de salida</label>
            <input type="date" class="form-control fecha" id="salidaIdaRegreso" name="fecha_salida">
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label">Fecha de regreso</label>
            <input type="date" class="form-control fecha" id="regresoIdaRegreso" name="fecha_regreso">
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label">Pasajeros (máximo 5)</label>
            <select class="form-select">
              <option selected disabled></option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>

        <button class="vuelo" type="submit">Buscar Vuelos</button>
      </form>
    </div>

    <!-- FORMULARIO SOLO IDA -->
    <div class="container my-4" id="formSoloIda" style="display: none;">
      <form action="../../controllers/buscarVuelosIda.php" method="POST">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="origen2" class="form-label">Origen</label>
            <input type="text" class="form-control" id="origen2" list="listaCiudades" placeholder="Escribe una ciudad" name="origen">
          </div>
          <div class="col-md-6 mb-3">
            <label for="destino2" class="form-label">Destino</label>
            <input type="text" class="form-control" id="destino2" list="listaCiudades" placeholder="Escribe una ciudad" name="destino">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Fecha de salida</label>
            <input type="date" class="form-control fecha" id="salidaSoloIda" name="fecha_salida">
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Pasajeros (máximo 5)</label>
            <select class="form-select">
              <option selected disabled></option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>

        <button class="vuelo" type="submit">Buscar Vuelos</button>
      </form>
    </div>

    <!-- Lista para autocompletado -->
    <datalist id="listaCiudades">
      <option value="Bogotá">
      <option value="Medellín">
      <option value="Pereira">
      <option value="Santa Marta">
      <option value="Cartagena">
      <option value="Barranquilla">
      <option value="Cali">
      <option value="Bucaramanga">
      <option value="Armenia">
    </datalist>
  </header>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS para alternar formularios + restricciones de fechas -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const radioIda = document.getElementById("soloIda");
      const radioIdaRegreso = document.getElementById("idaRegreso");
      const formIda = document.getElementById("formSoloIda");
      const formIdaRegreso = document.getElementById("formIdaRegreso");

      function toggleForms(tipo) {
        if (tipo === "ida") {
          formIda.style.display = "block";
          formIdaRegreso.style.display = "none";
        } else {
          formIda.style.display = "none";
          formIdaRegreso.style.display = "block";
        }
      }

      radioIda.addEventListener("change", () => toggleForms("ida"));
      radioIdaRegreso.addEventListener("change", () => toggleForms("idaRegreso"));

      // Estado inicial
      toggleForms("idaRegreso");

      // Restricción de fechas
      const hoy = new Date();
      const maxFecha = new Date();
      maxFecha.setMonth(hoy.getMonth() + 2);

      const formatoFecha = (fecha) => fecha.toISOString().split('T')[0];

      document.querySelectorAll(".fecha").forEach(input => {
        input.min = formatoFecha(hoy);
        input.max = formatoFecha(maxFecha);
      });
    });
  </script>
</body>
</html>
