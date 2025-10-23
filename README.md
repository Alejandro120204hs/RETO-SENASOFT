======================================================
SkyRoute — Sistema Web de Gestión de Tiquetes Aéreos
======================================================

SkyRoute es una aplicación web desarrollada bajo el modelo MVC con PHP puro y base de datos MySQL, diseñada para gestionar el proceso completo de compra y reserva de tiquetes aéreos de forma eficiente, intuitiva y segura.

Este sistema fue creado como parte del reto de Desarrollo Libre — SENASoft 2025, con el objetivo de demostrar la implementación de buenas prácticas de ingeniería de software, control de versiones con GitFlow, y el diseño de una arquitectura escalable basada en tecnologías libres.

SkyRoute permite tanto a usuarios pasajeros como a administradores interactuar en un entorno estructurado:

Los pasajeros pueden consultar vuelos, realizar reservas, seleccionar asientos y simular pagos sin necesidad de registro obligatorio.

Los administradores pueden gestionar vuelos, modelos de avión, asientos y controlar la disponibilidad en tiempo real.

La interfaz está diseñada con un enfoque UX/UI profesional, utilizando Bootstrap y componentes responsivos, garantizando una experiencia moderna y accesible desde cualquier dispositivo.





=====================
ALCANCE DEL PROYECTO
=====================

Cubre:
=======

•	Gestión de pasajeros, vuelos, tipos de avión y generación de tiquetes.
•	Control de disponibilidad de asientos.
•	Simulación de pagos por parte del usuario.
•	Acceso diferenciado para usuarios y administradores.

No cubre:
=========

•	Integración con pasarelas de pago reales (se simulará el proceso).
•	Módulos de quejas, reclamos o programas de fidelización.
El sistema garantizará el control de concurrencia para evitar la venta duplicada de asientos, manteniendo la integridad de los datos.
Además, incluirá la simulación del proceso de pago y la generación de tiquetes electrónicos en formato PDF o JSON.

==============================
STACK TECNOLOGICO
==============================

Capa                 | Tecnologia                                   | ROL
==================================================================================================
Frontend (Vistas)    | HTML5, CSS3, Bootstrap, Jquery, Javacript    |Interfaz del usuario renderizada en servidor
Backend (Servidor)   | PHP                                          | Lógica de negocio y control de flujo MVC
Base de Datos        | MYSQL                                        | Almacenamiento Relacional
Arquitectura         | MVC                                          | Separacion Logica y mantenebilidad
Control de Versiones | GitHub + GitFlow                             | Flujo Ordenado de desarrollo
Diseño / UML         | Figma, Draw.io                               | Documentacion Visual y Prototipado
Entorno Local        | XAMPP, VS Code                               | Desarrollo de pruebas locales 
Seguridad            | $_SESSION, password_hash / password_verify,  | Autenticacion y cifrado

==============================
ESTRUCTURA DEL REPOSITORIO 
==============================



Aquí tienes la estructura completa de tu proyecto en el formato solicitado:

```
RETO-SENASOFT
||| controllers
||| ||| iniciarSesion.php
||| ||| registrarUsuario.php
||| docs
||| ||| DIAGRAMAS UML
||| ||| IGNORE - CORE
||| ||| PROTOTIPADO
||| ||| ~$ACK TECNOLOGICO.docx
||| ||| ~$ANALISIS DE REQUERIMI...
||| ||| 1 ANALISIS DE REQUERIMIENTO...
||| ||| DICCIONARIO DE DATOS.docx
||| ||| DISEÑO DE LA SOLUCION.docx
||| ||| ESPECIFICACION REPOSITORIO ...
||| ||| STACK TECNOLOGICO.docx
||| models
||| ||| conexion.php
||| ||| usuario.php
||| public\assets
||| ||| admin
||| ||| ||| styles.css
||| ||| cliente
||| ||| ||| styles.css
||| ||| ||| stylesVuelos.css
||| ||| extras
||| ||| ||| img
||| ||| ||| styles.css
||| ||| ||| stylesLogin.css
||| ||| ||| img
||| views
||| ||| admin
||| ||| ||| adminDashboard.php
||| ||| ||| adminsDashboardRegistrarVuel...
||| ||| cliente
||| ||| ||| clienteDashboard.php
||| ||| ||| clienteDashboardRegistro.php
||| ||| ||| clienteVuelosIda.php
||| ||| ||| clienteVuelosIdaRegreso.php
||| ||| extras
||| ||| ||| login.php
||| ||| ||| recuperarclave.php
||| ||| ||| registro.php
||| .gitignore
||| index.php
||| README.md
```
================================
Requisitos previos (instalación)
================================

- XAMPP (Apache + MySQL).  
- PHP >= 7.4 (recomendado).  
- Cliente MySQL (phpMyAdmin incluido con XAMPP) o MySQL CLI.

===================================
Configuración local 
===================================

1. **Clona el repositorio**
```bash
git clone https://github.com/charles-t69/RETO-SENASOFT.git
cd RETO-SENASOFT.git


=============================
INICIALIZACION DEL PROYECTO
=============================

Colocar el proyecto dentro de htdocs

        Copia la carpeta del proyecto dentro de:

        C:\xampp\htdocs\RETO-SENASOFT


Configurar la base de datos

        Abre http://localhost/phpmyadmin

        Crea una base de datos llamada sistema_tiquetes

        Importa el archivo:

        database/esquema.sql



Configurar conexión

        Edita backend/config/db.php:

        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "sistema_tiquetes";


Guarda los cambios.

        Ejecutar el proyecto, es decir, la ruta que debe verificar 
        desde git hub al clonar el repo 
        es c:\xampp\htdocs\RETO-SENASOFT

        Inicia Apache y MySQL desde XAMPP.

        Abre el navegador y accede a:

        http://localhost/RETO-SENASOFT/


=====================
🔐 Seguridad
=====================

Autenticación mediante $_SESSION.

Cifrado de contraseñas con password_hash() y validación con password_verify().

Validación de formularios con PHP (servidor) y JavaScript (cliente).

Bloqueo de asientos con control de concurrencia en SQL (SELECT FOR UPDATE).

Simulación de pago (sin conexión real a pasarelas).

🚀 Flujo de trabajo (GitFlow)

Rama principal: main → contiene la versión estable.

Rama de desarrollo: develop → integra los cambios aprobados.

Ramas temporales:

feature/* → nuevas funcionalidades.

hotfix/* → corrección de errores urgentes.

release/* → versiones preparadas para entrega.

========================
👥 Autores
========================

Daniel Veloza — Análisis, documentación UML, arquitectura, base de datos

Alejandro Sánchez — Desarrollo frontend y backend, integración y pruebas