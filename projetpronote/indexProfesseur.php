<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content=""/>
    <meta name="author" content="" />
    <title> MS Notes - Etudiant </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<a class="menu-toggle rounded" href="#"> <i class="fas fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-nav-item"><a href="#services">Emploi du temps</a></li>
        <li class="sidebar-nav-item"><a href="#portfolio">Devoir</a></li>
        <li class="sidebar-nav-item"><a href="#classe">Classe</a></li>
        <li class="sidebar-nav-item"><a href="#contact">Déconnexion</a></li>
    </ul>
</nav>
<!-- Header-->
<header class="masthead d-flex align-items-center">
    <class="container px-4 px-lg-5 text-center">
    <h1 class="mb-1"> MS Notes</h1>
    <h2 class="mb-5"><em>Toute la vie scolaire dans un seul logiciel</em></h2>
    <h3> Bienvenue <?php echo $_SESSION['mail'] ?></h3>
</header>
<!-- About-->
<section class="content-section bg-light" id="about">
    <div class="container px-4 px-lg-5 text-center">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-10">
                <h2>Emploi du temps</h2>
                <p class="lead mb-5">
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
                <div class="col-md-12">
                    <table id="myTable">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Jour</th>
                            <th>Professeur</th>
                            <th>Matiere</th>

                        </tr>
                        <tbody>
                        <?php
                        $req = $bdd->getBdd()->query('SELECT * FROM bloc_heure');
                        while($res=$req->fetch()){
                            ?>
                            <tr>
                                <td><?php echo $res['id_bloc_heure'];?></td>
                                <td><?php echo $res['nom'];?></td>
                                <td><?php echo $res['ref_professeur'];?></td>
                                <td><?php echo $res['ref_matiere'];?></td>
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

</p>
</div>
</div>
</div>
</section>
<!-- Services-->
<section class="content-section bg-light" id="about">
    <div class="container px-4 px-lg-5 text-center">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-10">
                <h2>Devoirs</h2>
                <p class="lead mb-5">
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
                <body>
                <form action="ajoutdevoir.php" method="post">
                    <div id="booking" class="section">
                        <div class="section-center">
                            <div class="container">
                                <div class="row">
                                    <div class="booking-form">
                                        <form>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="section-title">
                                                        <h2>Ajouter un devoir </h2>
                                                        <label for="nom"> Nom : </label><br/>
                                                        <input type="text" name="nom"><br/>
                                                    </div>
                                                    <label for="nom"> Matiere : </label><br/>
                                                    <input type="text" name="ref_matiere"><br/>
                                                </div>
                                                <div class="form-btn">
                                                    <button class="submit-btn">Valider</button>
                                                </div>
                                            </div>
                <div class="col-md-12">
                    <table id="myTable">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Devoir</th>
                            <th>Matiere</th>

                        </tr>
                        <tbody>
                        <?php
                        $req = $bdd->getBdd()->query('SELECT * FROM devoir');
                        while($res=$req->fetch()){
                            ?>
                            <tr>
                                <td><?php echo $res['id_devoir'];?></td>
                                <td><?php echo $res['nom'];?></td>
                                <td><?php echo $res['ref_matiere'];?></td>
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

</p>
</div>
</div>
</div>
</section>
<!-- Portfolio-->

<section id="contact" class="contact section-bg">
    <p class="container" data-aos="fade-up">
    <p>Deconnexion</p>
    <a href="deconnexion.php" target="_blank" class="swiper-button-disabled">Deconnexion</a>
    <div class="section-title">
    </div>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://github.com/MihailoFR/projetpronote"><i class="icon-social-github"></i></a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; 2022</p>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</section>
</html>
