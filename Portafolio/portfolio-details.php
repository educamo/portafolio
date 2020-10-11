<?php

$id = $_GET['id'];


switch ($id) {
  case '1':
    $categoria = "Web";
    $titulo    = "Web Asocivilcesarl.com";
    $cliente   = "Asociacion Civil Dr. Cesar Luis Carrasco";
    $img       = "assets/img/aplicacion-web-app-movil-desarrollador-fullstack.jpg";
    $fecha     = "May - 2019";
    $url       = "www.asocivilcesarl.com";
    $link      = "http://" . $url;
    $tecnologias = array(
      '0' => 'HTML5',
      '1' => 'PHP',
      '2' => 'CSS',
      '3' => 'Jquery',
      '4' => 'AJAX',
      '5' => 'Bootstrap',
      '6' => 'GIT',
      '7' => 'CMS',
    );
    $detalle   = "La ASOCIACIÓN CIVIL DR. CÉSAR LUIS CARRASCO MONSALVA. Fundada en el año 2003, por la 
    iniciativa de un equipo multidisciplinario de profesionales, con la finalidad de Capacitar y 
    Formar a nivel Nacional e Internacional, especialistas en diferentes áreas del conocimiento, 
    capaces de impactar positivamente en el desarrollo económico, social, jurídico, educativo, asistencial, 
    laboral tecnológico y otras disciplinas de vital importancia para el progreso de las naciones.";
    break;
  case '2':
    $categoria = "Web";
    $titulo    = "Web Eduardo Carrasco";
    $cliente   = "Eduardo Carrasco";
    $img       = "assets/img/eduardo-carrasco-fotografia-fotografo-web-desarrollo.jpg";
    $fecha     = "Ene - 2020";
    $url       = "eduardocarrasco.photography";
    $link      = "http://" . $url;
    $tecnologias = array(
      '0' => 'HTML5',
      '1' => 'PHP',
      '2' => 'CSS',
      '3' => 'Jquery',
      '4' => 'AJAX',
      '5' => 'Bootstrap',
      '6' => 'GIT',
      '7' => 'CMS',

    );
    $detalle   = "Mi Sitio web como fotógrafo profesional, donde informo sobre mis trabajos, los servicios
      que ofrezco, además de publicar fotos de las sesiones realizadas a los distintos clientes. 
      Cuenta con una sección de noticias   y una aplicación para solicitar cotizaciones online.";
    break;
  case '3':
    $categoria = "App Web";
    $titulo    = "Skyflot";
    $cliente   = "Skyflot, C.A.";
    $img       = "assets/img/app-web-programador-ux-ui.jpg";
    $fecha     = "Feb - 2019";
    $url       = "skyflot";
    $link      = "https://www.skyflot.com";
    $tecnologias = array(
      '0' => 'PHP',
      '1' => 'HTML5',
      '2' => 'Jquery',
      '3' => 'AJAX',
      '4' => 'Bootstrap',
      '5' => 'GIT',
      '6' => 'CodeIgniter',
      '7' => 'Mysql',
      '8' => 'API',
    );
    $detalle   = "SKYFLOT es una marca líder en el mercado aeroportuario, que ofrece soluciones tecnológicas
      a los procesos operativos y administrativos, atendiendo las necesidades de nuestros clientes de manera eficiente.
      Se ha posicionado en el mercado por ser una extraordinaria herramienta que genera mayor rentabilidad, control y 
      seguimiento efectivo del sector aeroportuario.
      Actualmente se reconoce por su variedad de productos y servicios, tales como: SKYFLOT AVIACIÓN GENERAL, SKYFLOT
      AVIACIÓN COMERCIAL, SKYFLOT COMERCIALIZACIÓN, SKYFLOT RECAUDACIÓN, entre otros.";
    break;
  case '4':
    $categoria = "Diseño UX/UI";
    $titulo    = "UX Asocivilcesarl.com";
    $cliente   = "Asociacion Civil Dr. Cesar Luis Carrasco";
    $img       = "assets/img/ux-ui-pruebas-usuarios-experiencia-interfaz.jpg";
    $fecha     = "Abr - 2019";
    $url       = "www.asocivilcesarl.com";
    $link      = "http://" . $url;
    $tecnologias = array(
      '0' => 'Adobe XD',
      '1' => 'Figma',
      '2' => 'CSS',
      '3' => 'Jquery',
      '4' => 'HTML5',
      '5' => 'Bootstrap',
      '6' => 'GIT',
    );
    $detalle   = "Realice el diseño de la experiencia de usuarios (UX) para la plataforma web de La
       ASOCIACIÓN CIVIL DR. CÉSAR LUIS CARRASCO MONSALVA. Fundada en el año 2003, donde se hizo un análisis 
       previo al proyecto, se planifico la usabilidad y se probó la eficacia de los usuarios al interactuar 
       con la plataforma,  de igual forma se diseñó la interface de usuario, como también se realizaron pruebas
        con grupos de usuarios para determinar que la experiencia fuera la mejor.";
    break;
  case '5':
    $categoria = "Diseño Logo";
    $titulo    = "Logo Desarrollo Visionario";
    $cliente   = "Desarrollo Visionario, C.A.";
    $img       = "assets/img/log_desarrollo_visioanrio.jpg";
    $fecha     = "Abr - 2019";
    $url       = "N/A";
    $link      = " ";
    $tecnologias = array(
      '0' => 'Adobe Photoshop',
      '1' => 'adobe Ilustrator',
    );
    $detalle   = "Elabore el Diseño del logo y preste asesoramiento en la imagen corporativa de la empresa 
    Desarrollo Visionario, la cual es una multinacional asociada con una compañía encargada de realizar 
    edificaciones prefabricadas con materiales de alta calidad y a bajos costos.";
    break;
  default:
    echo "<script type='text/javascript'>";

    echo "window.history.back(-1)";

    echo "</script>";

    break;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detalle de Portafolio - <?php echo $titulo; ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: portafolio 1.1.0
  * Template URL: https://eduardocarrasco.photography
  * Author: C. Eduardo Carrasco
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle img-responsive">
        <h1 class="text-light"><a href="index.php">C. Eduardo Carrasco</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.twitter.com/educamo" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/eduardo.carrasco.fotografo" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/educamo" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://skype.com/educamo" class="skype"><i class="bx bxl-skype"></i></a>
          <a href="https://www.linkedin.com/in/educamo" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.php"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
          <li><a href="index.php#about"><i class="bx bx-user"></i> <span>Acerca de mi</span></a></li>
          <li><a href="index.php#resume"><i class="bx bx-file-blank"></i> <span>Resumen</span></a></li>
          <li><a href="index.php#portfolio"><i class="bx bx-book-content"></i> Portafolio</a></li>
          <li><a href="index.php#services"><i class="bx bx-server"></i> Servicios</a></li>
          <li><a href="index.php#contact"><i class="bx bx-envelope"></i> Contacto</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detalles de Portafolio</h2>
          <ol>
            <li><a href="index.php">Inicio</a></li>
            <li id="titulo"><?php echo $titulo; ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="">
            <img id="imagen" src="<?php echo $img; ?>" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Informacion del Proyecto</h3>
            <ul>
              <li><strong>Categoria</strong>: <?php echo $categoria; ?></li>
              <li><strong>Cliente</strong>: <?php echo $cliente; ?></li>
              <li><strong>Fecha del Proyecto</strong>: <?php echo $fecha; ?></li>
              <li><strong>URL del Proyecto</strong>: <a href="<?php echo $link; ?>" <?php if ($link != " ") {
                                                                                    ?> target="blank" <?php } ?>><?php echo $url; ?></a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Detalles del Proyecto</h2>
          <p>
            <div id="detalle" class="row">
              <div class="col-md-6"><?php echo $detalle; ?></div>
              <div class="col-md-6">
                <h3>Tecnologias Utilizadas:</h3>
                <ul>

                  <div class="row">
                    <?php foreach ($tecnologias as $t) {
                    ?>
                      <div class="col-md-6">
                        <li><?php echo $t; ?></li>
                      </div>

                    <?php
                    }
                    ?>
                  </div>
                </ul>
              </div>
            </div>
          </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo date("Y"); ?></span></strong>
      </div>
      <div class="credits">

        Designed by <a href="http://eduardocarrasco.photography">Eduardo Carrasco</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>