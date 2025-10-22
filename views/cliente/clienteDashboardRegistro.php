<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Múltiples Pasajeros</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS Propio -->
  <link rel="stylesheet" href="../../public/assets/extras/styles.css">
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="clienteDashboard.php">
          <img src="../../public/assets/img/logo-final-sky.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <img src="../../public/assets/img/avion.png" alt="" class="avion">
            </li>
            <li class="nav-item">
              <h2>Alejandro Hernandez</h2>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="../../public/assets/img/boton-eliminar.png" alt="" class="cerrar-sesion">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="container mt-4">
    <div class="wizard">        
      <div class="wizard-inner">
        <div class="connecting-line"></div>
        <ul class="nav nav-tabs justify-content-between" role="tablist">
          <li class="nav-item" role="presentation">
            <a href="#step1" data-bs-toggle="tab" class="nav-link active">
              <span class="round-tab">1</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#step2" data-bs-toggle="tab" class="nav-link disabled">
              <span class="round-tab">2</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#step3" data-bs-toggle="tab" class="nav-link disabled">
              <span class="round-tab">3</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#step4" data-bs-toggle="tab" class="nav-link disabled">
              <span class="round-tab">4</span>
            </a>
          </li>
        </ul>
      </div>

      <form>
        <div class="tab-content p-4">

          <!-- PASO 1: Datos de Pasajeros -->
          <div class="tab-pane fade show active" id="step1" role="tabpanel">
            <h4>Datos de los Pasajeros</h4>
            
            <div id="passengers-container">
              <!-- Pasajero 1 -->
              <div class="passenger-form" data-passenger="1">
                <div class="passenger-header">
                  <h5>Pasajero 1</h5>
                </div>
                <form action="">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Primer apellido</label>
                      <input type="text" class="form-control" placeholder="Ej: Hernández">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Segundo apellido</label>
                      <input type="text" class="form-control" placeholder="Ej: Sierra">
                    </div>
                    <div class="col-md-12 mb-3">
                      <label class="form-label">Nombres</label>
                      <input type="text" class="form-control" placeholder="Ej: Diego Alejandro">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Fecha de nacimiento</label>
                      <input type="date" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Género</label>
                      <select class="form-select">
                        <option selected disabled>Seleccione un género</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Tipo de documento</label>
                      <select class="form-select">
                        <option selected disabled>Seleccione tipo</option>
                        <option value="ti">Tarjeta de Identidad</option>
                        <option value="cc">Cédula de Ciudadanía</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Número de documento</label>
                      <input type="number" class="form-control" placeholder="Ej: 1070942496">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Teléfono</label>
                      <input type="number" class="form-control" placeholder="Ej: 3213919596">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Correo electrónico</label>
                      <input type="email" class="form-control" placeholder="Ej: alejandro@gmail.com">
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- Botón para agregar pasajeros -->
            <div class="text-center mt-3">
              <button type="button" class="btn btn-outline-primary add-passenger-btn" id="addPassengerBtn">
                
                Agregar Pasajero (<span id="passengerCount">1</span>/5)
              </button>
            </div>

            <div class="text-end mt-4">
              <button type="button" class="btn btn-primary next-step">Siguiente</button>
            </div>
          </div>

         <!-- PASO 2: Datos del Pagador -->
<div class="tab-pane fade" id="step2" role="tabpanel">
  <h4>Datos del Pagador</h4>

  <form>
    <div class="row">
      <div class="col-md-12 mb-3">
        <label class="form-label">Nombre completo</label>
        <input type="text" class="form-control" placeholder="Ej: Diego Alejandro Hernandez Sierra">
      </div>

      <div class="col-md-6 mb-3">
        <label class="form-label">Tipo de documento</label>
        <select class="form-select">
          <option selected disabled>Seleccione tipo</option>
          <option value="ti">Tarjeta de Identidad</option>
          <option value="cc">Cédula de Ciudadanía</option>
        </select>
      </div>

      <div class="col-md-6 mb-3">
        <label class="form-label">Número de documento</label>
        <input type="number" class="form-control" placeholder="Ej: 1070942496">
      </div>

      <div class="col-md-6 mb-3">
        <label class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" placeholder="Ej: alejandro@gmail.com">
      </div>

      <div class="col-md-6 mb-3">
        <label class="form-label">Teléfono</label>
        <input type="number" class="form-control" placeholder="Ej: 3213919596">
      </div>

      <div class="col-md-6 mb-3">
        <label class="form-label">Selecciona tu asiento</label>
        <select class="form-select seat-select">
          <option selected disabled>Seleccione un asiento</option>
          <option value="1A">1A</option>
          <option value="1B">1B</option>
          <option value="2A">2A</option>
          <option value="2B">2B</option>
        </select>
      </div>
    </div>

    <div class="d-flex justify-content-between mt-4">
      <button type="button" class="btn btn-secondary prev-step">Atrás</button>
      <button type="button" class="btn btn-primary next-step">Siguiente</button>
    </div>
  </form>
</div>


          <!-- PASO 3: Método de Pago -->
          <div class="tab-pane fade" id="step3" role="tabpanel">
            <h4>Método de Pago</h4>

            <form action="">
              <div class="payment-methods">
                <div class="payment-option">
                  <input type="radio" name="paymentMethod" id="creditCard" value="credit" checked>
                  <label for="creditCard" class="payment-label">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="2" y="5" width="20" height="14" rx="2"/>
                      <line x1="2" y1="10" x2="22" y2="10"/>
                    </svg>
                    Tarjeta de Crédito
                  </label>
                </div>

                <div class="payment-option">
                  <input type="radio" name="paymentMethod" id="debitCard" value="debit">
                  <label for="debitCard" class="payment-label">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="2" y="5" width="20" height="14" rx="2"/>
                      <line x1="2" y1="10" x2="22" y2="10"/>
                    </svg>
                    Tarjeta Débito
                  </label>
                </div>

                <div class="payment-option">
                  <input type="radio" name="paymentMethod" id="pse" value="pse">
                  <label for="pse" class="payment-label">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="3" y="6" width="18" height="12" rx="2"/>
                      <line x1="8" y1="11" x2="16" y2="11"/>
                      <line x1="8" y1="15" x2="12" y2="15"/>
                    </svg>
                    PSE
                  </label>
                </div>
              </div>
            </form>

            <div class="d-flex justify-content-between mt-4">
              <button type="button" class="btn btn-secondary prev-step">Atrás</button>
              <button type="button" class="btn btn-primary next-step">Siguiente</button>
            </div>
          </div>

          <!-- PASO 4: Datos de Tarjeta y Confirmación -->
          <div class="tab-pane fade" id="step4" role="tabpanel">
            <h4>Datos de la Tarjeta</h4>

            <form action="">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <label class="form-label">Número de Tarjeta *</label>
                  <input type="text" class="form-control" placeholder="1234 5678 9012 3456" maxlength="19">
                </div>

                <div class="col-md-12 mb-3">
                  <label class="form-label">Nombre en la Tarjeta *</label>
                  <input type="text" class="form-control" placeholder="JUAN PEREZ" style="text-transform: uppercase;">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Fecha de Vencimiento *</label>
                  <input type="text" class="form-control" placeholder="MM/AA" maxlength="5">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">CVV *</label>
                  <input type="text" class="form-control" placeholder="123" maxlength="4">
                </div>
              </div>
            </form>

            <div class="purchase-summary mt-4">
              <h5>Resumen de Compra</h5>
              <div class="summary-row">
                <span>Vuelo (1 pasajero)</span>
                <span>$180,000 COP</span>
              </div>
              <div class="summary-row">
                <span>Tasas e impuestos</span>
                <span>$45,000 COP</span>
              </div>
              <hr>
              <div class="summary-total">
                <span><strong>Total</strong></span>
                <span class="total-price">$225,000 COP</span>
              </div>
            </div>

            <div class="terms-box mt-4">
              <input type="checkbox" id="termsConditions" required>
              <label for="termsConditions">
                Acepto los <a href="#" class="terms-link">términos y condiciones</a> de compra, las <a href="#" class="terms-link">políticas de privacidad</a> y autorizo el tratamiento de mis datos personales.
              </label>
            </div>

            <div class="d-flex justify-content-between mt-4">
              <button type="button" class="btn btn-secondary prev-step">Atrás</button>
              <button type="submit" class="btn-confirm">Confirmar y Pagar</button>
            </div>
          </div>

          

        </div>
      </form>
    </div>
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    let passengerCount = 1;
    const maxPassengers = 5;
    const addPassengerBtn = document.getElementById('addPassengerBtn');
    const passengersContainer = document.getElementById('passengers-container');

    addPassengerBtn.addEventListener('click', function() {
      if (passengerCount < maxPassengers) {
        passengerCount++;

        // Clonar el primer formulario de pasajero
        const firstPassenger = document.querySelector('.passenger-form');
        const clone = firstPassenger.cloneNode(true);

        // Actualizar número y encabezado
        clone.setAttribute('data-passenger', passengerCount);
        clone.querySelector('h5').textContent = `Pasajero ${passengerCount}`;

        // Limpiar los valores del formulario clonado
        const inputs = clone.querySelectorAll('input');
        inputs.forEach(input => input.value = '');
        const selects = clone.querySelectorAll('select');
        selects.forEach(select => select.selectedIndex = 0);

        

        // Insertar el clon al final del contenedor
        passengersContainer.appendChild(clone);
        document.getElementById('passengerCount').textContent = passengerCount;

        if (passengerCount >= maxPassengers) {
          addPassengerBtn.disabled = true;
        }
      }
    });

    // Navegación del wizard
    document.addEventListener('DOMContentLoaded', function() {
      const nextButtons = document.querySelectorAll('.next-step');
      const prevButtons = document.querySelectorAll('.prev-step');

      nextButtons.forEach(btn => {
        btn.addEventListener('click', function() {
          const activeTab = document.querySelector('.wizard .nav-tabs .nav-link.active');
          const activeTabParent = activeTab.parentElement;
          const nextTab = activeTabParent.nextElementSibling;

          if (nextTab) {
            const nextLink = nextTab.querySelector('.nav-link');
            nextLink.classList.remove('disabled');
            const tab = new bootstrap.Tab(nextLink);
            tab.show();
          }
        });
      });

      prevButtons.forEach(btn => {
        btn.addEventListener('click', function() {
          const activeTab = document.querySelector('.wizard .nav-tabs .nav-link.active');
          const activeTabParent = activeTab.parentElement;
          const prevTab = activeTabParent.previousElementSibling;

          if (prevTab) {
            const prevLink = prevTab.querySelector('.nav-link');
            const tab = new bootstrap.Tab(prevLink);
            tab.show();
          }
        });
      });
    });
  </script>

</body>
</html>
