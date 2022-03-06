<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vigo Avio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v4.7.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1 class="text-light"><a href="index.html"><span>VigoAvio</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
        <li><a class="nav-link scrollto" href="#about">A propos de nous</a></li>
        <li><a class="nav-link scrollto" href="#services">Nos vols</a></li>
        <li><a class="nav-link scrollto" href="#portfolio">Images</a></li>
        <li><a class="nav-link scrollto" href="#team">L'équipe</a></li>
        <li><a class="nav-link scrollto" href="#contact">Connexion et contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>

    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container" data-aos="fade-up">
    <h1>Bienvenue sur VigoAvio</h1>
    <h2>Cette application sert à aider nos pilotes avec la gestion de leurs vols.</h2>
    <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
          <div class="content">
            <h3>Aéroport Gustaf III, Saint-Barthélémy</h3>
            <p>
              Il est nommé ainsi en l’honneur du roi Gustave de Suède qui a conquis l’île de Saint-Barth aux Français en 1784.
            </p>
          </div>
        </div>
        <div class="col-xl-7 d-flex align-items-stretch">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Le plus petit</h4>
                <p> L’aéroport est desservi par quelques vols charters et réguliers fonctionnant avec de petits avions mono ou bimoteurs conçus pour transporter 20 passagers maximum.</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Notre aéroport unique</h4>
                <p>L’unique piste de 680 mètres de long est située au milieu des montagnes, près de la mer.</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-images"></i>
                <h4>Ouverture</h4>
                <p>Un petit aéroport de plaisance sur laquelle des vols sont organisés tous les jours sauf les dimanches.L’aéroport est ouvert uniquement de 8h à 18h.
                </p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-shield"></i>
                <h4>Très particulière</h4>
                <p>Sa situation très particulière en fait l’une des pistes d’atterrissage les plus dangereuses au monde.</p>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Les vols</h2>
        <p>Séjours de rêve. Votre Vol à Petit Prix. Réservez Vite. Ne Ratez Pas Votre Chance !</p>
        <p>Notre aeroport pour l'instant propose que des allés simple. Notre équipe travaille afin de vous propose des meilleur vols</p>
      </div>


      <?php

require_once "datatable.php";

$bdd = new bdd();
?>
      <head>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"></link>
<script type="text/javascript" src="http: //cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"></link>
<script type="text/javascript" src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
              $(document).ready( function () {
                  $('#myTable').DataTable()
              } );
              $(document).ready(function() {
                  $('#ref_pilote').select2();
              });
              $(document).ready(function() {
                  $('#ref_avion').select2();
              });
          </script>


<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,600" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="assets/css/style.css" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

      </head>
      <body>
      <form action="ajoutvol.php" method="post">
          <div id="booking" class="section">
              <div class="section-center">
                  <div class="container">
                      <div class="row">
                          <div class="booking-form">
                              <form>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <div class="section-title">
                                              <h2>Entrez un nouveau vol </h2>
                                          <label for="date_depart">Date de départ :</label><br/>
                                          <input type="date" name="date_depart"><br/>
                                      </div>
                                      <div class="form-group">
                                          <span class="select-arrow"></span>
                                          <span class="form-label">Choisir le pilote :</span>
                                          <select class="form-control" name="ref_pilote" id="ref_pilote">
                                              <option></option>
                                              <?php
                                              $req = $bdd->getBdd()->query('SELECT * FROM pilote');
                                              while($res=$req->fetch()){
                                                  ?>
                                                  <option value="<?php echo $res['id_pilote'];?>"><?php echo $res['id_pilote']." ".$res['nom']." ".$res['prenom']?> </option>
                                              <?php } ?>
                                          </select>
                                      </div>

                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Heure de départ :</label><br/>
                                          <input type="time" name="heure_depart"><br/>
                                          </input>
                                      </div>
                                      <div class="form-group">
                                          <span class="select-arrow"></span>
                                          <span class="form-label">id Avion</span>
                                          <select class="form-control" name="ref_avion" id="ref_avion">
                                              <option></option>
                                              <?php
                                              $req = $bdd->getBdd()->query('SELECT * FROM avion');
                                              while($res=$req->fetch()){
                                                  ?>
                                                  <option value="<?php echo $res['id_avion'];?>"><?php echo $res['id_avion'].". ".$res['nom']?> </option>
                                              <?php } ?>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Heure d'arrivée :</label>
                                          <input type="time" name="heure_arrivee" ><br/>
                                          </input>
                                      </div>
                                      <div class="form-btn">
                                          <button class="submit-btn">Valider</button>
                                      </div>
                                  </div>
                                  <p></p>
                                  <div class="col-md-12">
                                      <table id="myTable">
                                          <thead>
                                          <tr>
                                              <th>Id Vol</th>
                                              <th>Date de Depart</th>
                                              <th>Heure depart</th>
                                              <th>Heure arrivée</th>
                                              <th>Id Pilote</th>
                                              <th>Id Avion</th>
                                          </tr>
                                          <tbody>
                                          <?php
                                          $req = $bdd->getBdd()->query('SELECT * FROM vol');
                                          while($res=$req->fetch()){
                                              ?>
                                              <tr>
                                                  <td><?php echo $res['id_vol'];?></td>
                                                  <td><?php echo $res['date_depart'];?></td>
                                                  <td><?php echo $res['heure_depart'];?></td>
                                                  <td><?php echo $res['heure_arrivee'];?></td>
                                                  <td><?php echo $res['ref_pilote'];?></td>
                                                  <td><?php echo $res['ref_avion'];?></td>
                                              </tr>
                                          <?php } ?>
                                          </tbody>
                                          </thead>
                                      </table>
                                  </div>
                              </form>
                          </div>
                      </section>
                  </main>
              </div>
          </div>
      </body>
</html>



  </section><!-- End Services Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts  section-bg">
    <div class="container">

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="169" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Clients contents</strong></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Nouveau projet</strong> chaque année</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1264" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Heure de vol</strong> par an</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Employées</strong></p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3>Revenir au haut de la page</h3>
        <p> Si vous avez manqué d'informations,vous pouvez toujours revenir.</p>
        <a class="cta-btn" href="#">Revenir</a>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Images</h2>
        <p>Voici quelques photos de notre petit mignon aéroport et également de quelques destinations ou cette aéroport vous emmene.</p>
      </div>



      <div class="row portfolio-container" data-aos="fade-up">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/30-10-2020-st-barth.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="assets/img/portfolio/30-10-2020-st-barth.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/AvioStJeanAtterrissageUHDformat16par9-scaled.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="assets/img/portfolio/AvioStJeanAtterrissageUHDformat16par9-scaled.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>




        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/Planche-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="assets/img/portfolio/Planche-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>



      </div>

    </div>
  </section><!-- End Portfolio Section -->



  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>L'équipe</h2>
        <p>Les meilleures choses qui arrivent dans le monde de l’entreprise ne sont pas le résultat du travail d’un seul homme. C’est le travail de toute une équipe.</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up">
            <div class="pic"><img src="assets/img/team/mt%20tof.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Mihailo Trninic</h4>
              <span>Directeur informatique</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="150">
            <div class="pic"><img src="assets/img/team/sed.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sedrick Fotso-Mbah</h4>
              <span>Ingénieur opérations de vol</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Connexion</h2>
            <body>
            <form action="connexion.php" method="POST">
                <br>Nom d'utilisateur : <input type="text" name="nom_utilisateur"> </br>
                <br>Mot de passe : <input type="password" name="mdp"> </br>
                <br> <input type="submit" name="Valider"> </br>
            </form>
            <p>Pas de compte? Vous pouvez vous inscrire en cliquant sur inscription</p>
            <li class="menu-item"><a href="inscriptionn.php">Inscription</a></li>


            </form>


            </body></div>


      <div class="section-title">
        <h2>Contact</h2>
        <p>Heures d’ouvertures : 07H00 tous les jours, sauf dérogation.
           Heures de fermetures : 15 minutes après le coucher du soleil (généralement de 18H00 à 19H00, mais cela varie selon les périodes de l’année).</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Adresse</h3>
            <p> 97133, Saint-Barthélemy</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email </h3>
            <p>aeroport@comstbarth.fr</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Téléphone</h3>
            <p>05 90 27 65 41
            </p>
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=aeroport%20saint%20bart&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Mail" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Le message a bien été envoyée</div>
            </div>
            <div class="text-center"><button type="submit">Envoyer le message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="footer-info">
            <h3>Squadfree</h3>

            <p>
              A108 Adam Street <br>
              NY 535022, USA<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Reste toujours informé</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>