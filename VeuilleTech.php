<?php
global $BasePDO;
include("header.html");
include("conn.php");
$sql = "SELECT * FROM cve";
$stmt = $BasePDO->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$icons = ["bi-card-checklist", "bi-bar-chart", "bi-brightness-high", "bi-calendar4-week"];
$iconCounter = 0;
?>
<body>
    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/rhawk.png)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4">Veuille Technologique</h1>
                    <p class="hero-subtitle"><span class="typed" data-typed-items="CVE, Faille de sécurité"></span></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div><!-- End Hero Section -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <h3 class="title-a">
                                    Veille Technologique
                                </h3>
                                <div class="line-mf"></div>
                                <p class="subtitle-a">CVE  (Common Vulnerabilities and Exposures)</p>
                            </div>
                        </div>
                    </div>
                    <p class="subtitle_a">
                        Qu'est-ce q'une CVE ? <br>
                        Une CVE est failles de sécurité informatique. <br>Lorsque l'on parle d'une CVE c'est une faille à qui a été attribuer un identifiant CVE.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <h3 class="title-a">
                                    Outils utilisé
                                </h3>
                                <div class="line-mf"></div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <p class="subtitle_a">Flux RSS : </p>
                    <p STYLE="padding:0 0 0 20px;">- CERT Santé</p>
                    <p STYLE="padding:0 0 0 20px;">- CERT-FR</p>
                    <p STYLE="padding:0 0 0 20px;">- MSRC Security Update</p>
                    <p class="subtitle_a">Compte X : CERT-FR</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                if ($results) {
                    foreach ($results as $row) {
                        // Sélectionner l'icône en fonction de l'index
                        $iconClass = $icons[$iconIndex % count($icons)];
                        $iconIndex++; // Préparer l'index pour la prochaine itération

                        // Générer la carte pour chaque CVE
                        echo '<div class="col-md-4 space">';
                        echo '<div class="service-box row-equal-height">';
                        echo '<a href="' . htmlspecialchars($row["lien"]) . '" target="_blank">'; // Utiliser le lien de la base de données
                        echo '<div class="service-ico"><span class="ico-circle"><i class="bi ' . $iconClass . '"></i></span></div>';
                        echo '<div class="service-content">';
                        echo '<h2 class="s-title">' . htmlspecialchars($row["reference"]) . '</h2>';
                        echo '<p class="s-description text-center">';
                        echo htmlspecialchars($row["description"]) . '<br>';
                        echo 'Date : ' . htmlspecialchars($row["date"]) . '<br>';
                        echo 'Risques : ' . htmlspecialchars($row["risques"]) . '<br>';
                        echo '</p>';
                        echo '</div>';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "0 résultats";
                }
            ?>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service-box">
                    <a href="https://www.cert.ssi.gouv.fr/cti/CERTFR-2023-CTI-006/" target="_blank">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">CERTFR-2023-CTI-006</h2>
                            <p class="s-description text-center">
                                Démantèlement du botnet Qakbot<br>
                                Date : 18/09/2023<br>
                                Référence :<br>
                                CERTFR-2023-CTI-006<br>
                                Contexte :<br>
                                <br>
                                Le Bureau fédéral d’enquête américain (FBI) a effectué le 26 août 2023 une opération de démantèlement et de désinfection
                                du réseau de machines zombies ou botnet Qakbot (aussi appelé Qbot), en lien avec les autorités allemandes, néerlandaises,
                                britanniques et françaises.<br>
                                <br>
                                Actif depuis 2008, Qakbot est à l’origine un cheval de Troie bancaire.
                                Son architecture modulaire a depuis permis d’autres utilisations,
                                comme l’enrôlement de machines infectées dans le botnet du même nom ou le vol d’authentifiants
                                de messagerie électronique dont le contenu sert à mener de nouvelles attaques.
                                Les sites Check your hack (de la Police néerlandaise), et Have I been pwned ?
                                permettent de vérifier si un compte de messagerie est connu pour avoir été compromis par Qakbot.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/main.js"></script>