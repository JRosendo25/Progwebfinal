<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Libreria RF- Servicios</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/libro icon.png" rel="icon">
  <link href="assets/img/libro icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-services">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <h1 class="d-flex align-items-center">Libreria RF</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Hogar</a></li>
          <li><a href="services.php">Libros</a></li>
          <li><a href="team.php">Autores</a></li>
          <li><a href="contact.php">Contacto</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/Libreria2.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Servicios</h2>
        <ol>
          <li><a href="index.html">Hogar</a></li>
          <li>Servicios</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Servicios Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nuestros servicios</h2>

        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-book-fill style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Biblioteca digital:</a></h4>
              <p class="description"> Ofrecer acceso a una biblioteca digital donde los usuarios puedan acceder a una amplia selección de libros electrónicos para leer en línea o descargar.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-bookmark-heart" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Recursos educativos:</a></h4>
              <p class="description"> Ofrecer recursos educativos adicionales como guías de estudio, material complementario para profesores y estudiantes, y libros de texto.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Servicio de reserva de libros:</a></h4>
              <p class="description"> Permitir a los usuarios reservar libros que están próximos a ser lanzados o que están fuera de stock, para recibir una notificación cuando estén disponibles para su compra.</p>
            </div>
          </div><!-- End Service Item -->


<!-- ======= Services Cards Section ======= -->
<?php

$servidor = "localhost";
$usuario = "root";
$contra = "";
$db = "biblioteca";

try {
    $Conexion = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $contra);
    // Establecer el modo de error de PDO a excepción
    $Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consultar la tabla
    $consulta = $Conexion->query("SELECT * FROM titulos");

    echo '<!-- ======= Services Cards Section ======= -->';
    echo '<h2>Libros disponibles:</h2>';
    echo '<section id="services-cards" class="services-cards">';
    echo '<div class="container" data-aos="fade-up">';
    echo '<div class="row gy-4">';

    // Iterar sobre los resultados de la consulta
    while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">';
        echo '<div class="card-item">';
        echo '<div class="row">';
        echo '<div class="col-xl-5">';
        echo '<div class="card-bg" style="background-image: url(assets/img/placeholder_para_los_libros.jpg);"></div>';
        echo '</div>';
        echo '<div class="col-xl-7 d-flex align-items-center">';
        echo '<div class="card-body">';
        echo '<h4 class="card-title">' . $fila['titulo'] . '</h4>';
        echo '<p>' . $fila['tipo'] . '</p>';
        echo '<p>' . $fila['precio'] . '</p>';
        echo '<p>' . $fila['notas'] . '</p>';
        echo '<p>' . $fila['fecha_pub'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    echo '</section><!-- End Services Cards Section -->';
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?> 

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>Libreria RF</span>
            </a>
            <p>El lugar para cultivar la lectura donde sea que vayas </p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contactanos</h4>
            <p>
              Calle a <br>
             San Pedro de Marcoris, SPM  2100<br>
              Republica Dominicana<br><br>
              <strong>Phone:</strong> +1 829 525 8855<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Nova</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer --><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>