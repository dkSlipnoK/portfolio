<?php
global $BasePDO;
include("header.html");
include("navbar.php");
include("conn.php");

$sql = "SELECT * FROM cve ORDER BY date DESC LIMIT 6";

$stmt = $BasePDO->prepare($sql);

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$icons = [
    "bi-briefcase",
    "bi-card-checklist",
    "bi-bar-chart",
    "bi-brightness-high",
    "bi-calendar4-week",
];
?>

<body>
	<!-- ======= Hero Section ======= -->
	<div id="hero" class="hero route bg-image" style="background-image: url(assets/img/rhawk.png)">
		<div class="overlay-itro"></div>
		<div class="hero-content display-table">
			<div class="table-cell">
				<div class="container">
					<!--<p class="display-6 color-d">Hello, world!</p>-->
					<h1 class="hero-title mb-4">Marius Vassallucci</h1>
					<p class="hero-subtitle"><span class="typed" data-typed-items="Etudiant BTS SIO, Futur Pentester"></span></p>
					<!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
				</div>
			</div>
		</div>
	</div><!-- End Hero Section -->

	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about" class="about-mf sect-pt4 route">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="box-shadow-full">
							<div class="row">
								<div>
                                    <h5 class="title-center title-left">A propos</h5>
                                    <div class="title-box-2 optioncontainer">
                                        <p class="lead2">
                                            Étudiant de 24 ans en BTS SIO option SISR (Solution d'Infrastructure, Systèmes et Réseaux).
                                            Après avoir effectué un Bac professionnel Métier du cuir option Maroquinnerie et un BTS Métier de la Mode option Maroquinnerie et Chaussures, j'ai effectuer ma terminale et tout mon BTS en alternance,
                                            après avoir fait des mission d'intérimaire dans des entreprise de fabrication de chaussure j'ai décidé de faire une réorientation professionnelle.
                                            J'ai donc choisi l'informatique car pendant mes précedante étude j'ai adoré utiliser les logiciels pour concevoir les maquettes malgrés le fait que ceci n'était créer pour cette utilisation principal.
                                            Au cours de mes recherche pour trouvé une formation qui me correspondrait j'ai affiné mon projet professionnel pour m'orienté a termes dans le monde de la cybersécurité et plus particulièrement dans le monde du pentesting
                                            après quelque années d'expériences dans le monde de l'informatique. malgrés le fait que j'ai choisi l'option SISR dans mon BTS j'ai tout de même appris en autodidacte à créer un site internet notament en utilisant le framework Symfony.
                                        </p>
                                    </div>
								</div>
								<div>
                                    <h5 class="title-center title-left">Compétences</h5>
									<div class="skill-mf skill">
                                        <div>
                                            <h2>Système <br> d'exploitation</h2>
                                             Linux <br> Windows <br> Mac
                                        </div>
                                        <div>
                                            <h2>Dev</h2>
                                            <h4>Base</h4>
                                            PHP/HTML/CSS
                                            <h4>Framework PHP</h4>
                                            Symfony6/laravel
                                            <h4>Framework JS</h4>
                                            React/nextJS
                                        </div>
                                        <div>
                                            <h2>Gestion <br>d'infrastructure</h2>
                                            Terraform/Ansible
                                        </div>
                                        <div>
                                            <h2>Scripting</h2>
                                            Python/Bash/powershell/JS
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End About Section -->
		<!-- BTS SIO -->
		<section id="bts" class="about-mf sect-pt4 route">
			<div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row">
                                <div class="">
                                    <div class="title-box-2">
                                        <h5 class="title-center title-left">
                                            BTS SIO </br>
                                            Option SISR
                                        </h5>
                                        <p class="lead2">
                                            Le Brevet de Technicien Supérieur aux Services Informatiques aux Organisations,
                                            s'adresse à ceux qui souhaitent se former en deux ans aux métiers d'administrateur
                                            réseau ou de développeur. Pour par la suite intégrer directement le marché du travail ou continuer des études,
                                            dans le domaine de l'informatique.
                                        </p>
                                    </div>
                                    <div class="about-me pt-4 pt-md-0 optioncontainer">
                                        <div class="option">
                                            <h5 class="title-center title-left">Option SISR</h5>
                                            <p class="lead2">
                                                L'option SISR (Solutions d'Infrastructure, Systèmes et Réseaux) du BTS SIO (Services Informatiques aux Organisations)
                                                forme des professionnels capables de concevoir, gérer et maintenir les infrastructures informatiques d'une entreprise.
                                                Les étudiants apprennent à configurer des serveurs, à administrer des réseaux, à assurer la sécurité informatique,
                                                et à résoudre des problèmes techniques liés aux systèmes et aux réseaux. Cette option prépare les étudiants à travailler
                                                dans le domaine de l'administration système et réseau au sein des organisations.
                                            </p>
                                        </div>
                                        <div class="option">
                                            <h5 class="title-center title-left">Option SLAM</h5>
                                            <p class="lead2">
                                                L'option SLAM (Solution Logiciel et Application Métier) du BTS SIO (Service Informatiques aux Organisations)
                                                forme les étudiants au développement logiciel et à la conception d'applications métiers.
                                                Ils acquièrent des compétences en programmation (Java, C#, PHP, Python), en conception de bases de données,
                                                en développement web et mobile, ainsi qu'en intégration de systèmes. Cette formation met l'accent sur la compréhension
                                                des processus métiers pour créer des solutions informatiques adaptées. Les étudiants travaillent sur des projets concrets en équipe,
                                                développant ainsi leurs compétences en gestion de projet et en collaboration. À la fin de leur formation, ils sont prêts à occuper des postes
                                                de développeur d'applications ou analyste-programmeur dans diverses organisations.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</section>
		<section id="services" class="services-mf pt-5 route">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="box-shadow-full">
							<div class="row">
								<div class="">
									<div class="row Vtech">
										<h3 class="title-a">Veille Techno</h3>
										<div class="line-mf"></div>
										<a href="VeuilleTech.php" >
											<h2 class="subtitle-a">CVE  (Common Vulnerabilities and Exposures) <i class="bi bi-box-arrow-up-right"></i></h2>
										</a>
                                        <div class=""
                                        <p class="">
                                            Une CVE (Common Vulnerabilities and Exposures) est une référence standardisée pour identifier et nommer publiquement les failles de sécurité informatique.
                                            Chaque CVE est assignée à une vulnérabilité spécifique, permettant aux professionnels de la cybersécurité de discuter, référencer et résoudre les problèmes de sécurité de manière coordonnée.
                                            Ces identifiants facilitent la compréhension et la gestion des risques liés aux logiciels, aidant ainsi à maintenir la sécurité des systèmes informatiques.
                                        </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
                    <?php
                    if ($results) {
                    $iconIndex = 0; // Index pour alterner entre les icônes
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
			</div>
		</section><!-- End Services Section -->

		<!-- ======= Portfolio Section ======= -->
		<section id="work" class="portfolio-mf sect-pt4 route">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title-box text-center">
							<h3 class="title-a">
								Projet
							</h3>
							<p class="subtitle-a">
								Projets personnels, stage et atelier de profesionnalisation
							</p>
							<div class="line-mf"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="work-box">
							<a href="assets/img/chtac.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
								<div class="work-img">
									<img src="assets/img/chtac.png" alt="" class="img-fluid">
								</div>
							</a>
							<div class="work-content">
								<div class="row">
									<div class="col-sm-8">
										<h2 class="w-title">Site web Chtac</h2>
										<div class="w-more">
											<span class="w-ctegory">Projet personnel d'un site web (symfony) pour la gestion des concours de Tir à l'arc à cheval</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="w-like">
											<a href="deploy.php"> <span class="bi bi-plus-circle"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="work-box">
							<a href="assets/img/ap1er.webp" data-gallery="portfolioGallery" class="portfolio-lightbox">
								<div class="work-img">
									<img src="assets/img/ap1er.webp" alt="" class="img-fluid">
								</div>
							</a>
							<div class="work-content">
								<div class="row">
									<div class="col-sm-8">
										<h2 class="w-title">AP de première année</h2>
										<div class="w-more">
											<span class="w-ctegory">
                                                Atelier réalisé lors de ma première année de BTS SIO option SISR
                                            </span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="w-like">
											<a href="ap.php#first" > <span class="bi bi-plus-circle"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="work-box">
							<a href="assets/img/ap2.webp" data-gallery="portfolioGallery" class="portfolio-lightbox">
								<div class="work-img">
									<img src="assets/img/ap2.webp" alt="" class="img-fluid">
								</div>
							</a>
							<div class="work-content">
								<div class="row">
									<div class="col-sm-8">
										<h2 class="w-title">AP de deuxième année</h2>
										<div class="w-more">
											<span class="w-ctegory">
                                                Atelier réalisé lors de ma deuxième année de BTS SIO option SISR
                                            </span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="w-like">
											<a href="ap.php#second" > <span class="bi bi-plus-circle"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="work-box">
							<a href="assets/img/fogproject.webp" data-gallery="portfolioGallery" class="portfolio-lightbox">
								<div class="work-img">
									<img src="assets/img/fogproject.webp" alt="" class="img-fluid">
								</div>
							</a>
							<div class="work-content">
								<div class="row">
									<div class="col-sm-8">
										<h2 class="w-title">Stage de première année</h2>
										<div class="w-more">
											<span class="w-ctegory">Stage réalisé au sein de 3il Ingénieur</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="w-like">
											<a href="stage.php#first" > <span class="bi bi-plus-circle"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="work-box">
							<a href="assets/img/terraform_aws.webp" data-gallery="portfolioGallery" class="portfolio-lightbox">
								<div class="work-img">
									<img src="assets/img/terraform_aws.webp" alt="" class="img-fluid">
								</div>
							</a>
							<div class="work-content">
								<div class="row">
									<div class="col-sm-8">
										<h2 class="w-title">Stage de deuxième année</h2>
										<div class="w-more">
											<span class="w-ctegory">Stage réalisé au sein d'Iconosquare</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="w-like">
											<a href="stage.php#second" > <span class="bi bi-plus-circle"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="work-box">
							<a href="assets/img/work-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
								<div class="work-img">
									<img src="assets/img/work-6.jpg" alt="" class="img-fluid">
								</div>
							</a>
							<div class="work-content">
								<div class="row">
									<div class="col-sm-8">
										<h2 class="w-title">Situation Professionnel</h2>
										<div class="w-more">
											<span class="w-ctegory">Situation professionnel réalisé pour les examens</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="w-like">
											<a href="sp.php"> <span class="bi bi-plus-circle"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section><!-- End Portfolio Section -->
        <!-- ======= Portfolio Section ======= -->
        <section id="profil" class="portfolio-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Profil
                            </h3>
                            <p class="subtitle-a">
                                CV et Certification
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 space">
                        <div class="service-box">
                            <a href="CV.php" >
                                <div class="service-ico">
                                    <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
                                </div>
                                <div class="service-content">
                                    <h2 class="s-title cve-title">Curiculum Vitae</h2>
                                    <p class="s-description text-center">
                                        Vous pourrez trouver mon CV ci-joint.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 space">
                        <div class="service-box">
                            <a href="certif.php" >
                                <div class="service-ico">
                                    <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
                                </div>
                                <div class="service-content">
                                    <h2 class="s-title cve-title">Certification</h2>
                                    <p class="s-description text-center">
                                        Vous pourrez trouver mes certifications ci-joint.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Section -->
		
		
	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="copyright-box">
						<p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
						<div class="credits">
							<!--
							All the links in the footer should remain intact.
							You can delete the links only if you purchased the pro version.
							Licensing information: https://bootstrapmade.com/license/
							Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
						-->
							Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- End  Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/typed.js/typed.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>