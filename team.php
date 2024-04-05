<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Libreria RF- Autores</title>
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

<body class="page-team">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
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

        <h2>Autores</h2>
        <ol>
          <li><a href="index.html">Hogar</a></li>
          <li>Autores</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

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
    $consulta = $Conexion->query("SELECT * FROM autores");

    echo ' <!-- ======= Team Section ======= -->';
    echo ' <section id="team" class="team">';
    echo '   <div class="container" data-aos="fade-up">';
    echo '     <div class="section-header">';
    echo '       <h2>Autores</h2>';
    echo '     </div>';
    echo '     <div class="row gy-4">';

    // Iterar sobre los resultados de la consulta
    while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">';
        echo '<div class="team-member">';
        echo '<div class="member-img">';
        echo '<img src="assets/img/placeholder_autor.jpg" class="img-fluid" alt="">';
        echo '<div class="social">';
        echo '<a href=""><i class="bi bi-twitter"></i></a>';
        echo '<a href=""><i class="bi bi-facebook"></i></a>';
        echo '<a href=""><i class="bi bi-instagram"></i></a>';
        echo '<a href=""><i class="bi bi-linkedin"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '<div class="member-info">';
        echo '<h4>' . $fila['nombre'] . ' ' . $fila['apellido'] . '</h4>';
        echo '<span>' . $fila['telefono'] . '</span>';
        echo '</div>';
        echo '</div>';
        echo '</div><!-- End Team Member -->';
    }

    echo '     </div>';
    echo '   </div>';
    echo ' </section><!-- End Team Section -->';
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