<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">

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
            <h1 class="text-light"><a href="inscription.php"><span>VigoAvio</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Modification de votre compte</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->


<div class="section-title">
    <h2>Inscrivez-vous</h2>
        <body>
        <form method="post" action="modifierbdd.php">
            Id : <input type="text" name="id_utilisateur" placeholder="Entrez l'id utilisateur" /><br />
    Nom : <input type="text" name="nom" placeholder="Entrez votre nouveau nom" /><br />
            Prenom : <input type="text" name="prenom" placeholder="Entrez votre nouveau prenom" ><br />
            <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.7.3/themes/base/jquery-ui.css">
    Code Postale : <input name="cp" id="cp" type="text" placeholder="Code postale"><br/>
            Ville : <input name="ville" id="ville" type="text" placeholder="Ville"><br/>
            Adresse : <input name="adresse" id="adresse" type="text" placeholder="Adresse"><br/>
            <script>
$("#cp").autocomplete({
                    source: function (request, response) {
    $.ajax({
                            url: "https://api-adresse.data.gouv.fr/search/?postcode="+$("input[name='cp']").val(),
                            data: { q: request.term },
                            dataType: "json",
                            success: function (data) {
        var postcodes = [];
        response($.map(data.features, function (item) {
                // Ici on est obligé d'ajouter les CP dans un array pour ne pas avoir plusieurs fois le même
                if ($.inArray(item.properties.postcode, postcodes) == -1) {
                    postcodes.push(item.properties.postcode);
                    return { label: item.properties.postcode + " - " + item.properties.city,
                                            city: item.properties.city,
                                            value: item.properties.postcode
                                        };
                                    }
            }));
    }
                        });
                    },
                    // On remplit aussi la ville
                    select: function(event, ui) {
    $('#ville').val(ui.item.city);
}
                });
                $("#ville").autocomplete({
                    source: function (request, response) {
    $.ajax({
                            url: "https://api-adresse.data.gouv.fr/search/?city="+$("input[name='ville']").val(),
                            data: { q: request.term },
                            dataType: "json",
                            success: function (data) {
        var cities = [];
        response($.map(data.features, function (item) {
                // Ici on est obligé d'ajouter les villes dans un array pour ne pas avoir plusieurs fois la même
                if ($.inArray(item.properties.postcode, cities) == -1) {
                    cities.push(item.properties.postcode);
                    return { label: item.properties.postcode + " - " + item.properties.city,
                                            postcode: item.properties.postcode,
                                            value: item.properties.city
                                        };
                                    }
            }));
    }
                        });
                    },
                    // On remplit aussi le CP
                    select: function(event, ui) {
    $('#cp').val(ui.item.postcode);
}
                });
                $("#adresse").autocomplete({
                    source: function (request, response) {
    $.ajax({
                            url: "https://api-adresse.data.gouv.fr/search/?postcode="+$("input[name='cp']").val(),
                            data: { q: request.term },
                            dataType: "json",
                            success: function (data) {
        response($.map(data.features, function (item) {
                return { label: item.properties.name, value: item.properties.name};
                                }));
    }
                        });
                    }
                });
            </script>


Nom d'utilisateur : <input type="text" name="nom_utilisateur" placeholder="Entrez votre nouveau nom d'utilisateur" /><br />
            Email : <input type="email" name="mail" placeholder="Entrer votre nouveau email" /><br />
            Mot de passe : <input type="password" name="mdp" placeholder="Entrez votre nouveau mdp" /><br />
            <br> <input type="submit" name="Valider"> </br>
        </form>
        </body>
    </div>
</body>



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

