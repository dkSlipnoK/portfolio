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
								<div class="col-md-6">
									<div class="row">
										<div class="col-sm-6 col-md-5">
											<div class="about-img">
												<img src="assets/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
											</div>
										</div>
										<div class="col-sm-6 col-md-7">
											<div class="about-info">
												<p><span class="title-s">Nom : </span> <span>Vassallucci Marius</span></p>
												<p><span class="title-s">Profil : </span> <span>Etudiant</span></p>
												<p><span class="title-s">Email: </span> <span>marius.vassallucci@gmail.com</span></p>
												<p><span class="title-s">Téléphone : </span> <span>06.41.84.29.66</span></p>
											</div>
										</div>
									</div>
									<div class="skill-mf">
										<p class="title-s">Compétences</p>
										<p><br><span class="title-s">Python</span> </br> maîtrise des bases</p>
										<p><span class="title-s">bash</span> </br> bonne connaissance des bases</p>
                                        <p><span class="title-s">JavaScript</span> </br> bonne connaissance des bases</p>
                                        <p><span class="title-s">terraform</span> </br> bonne connaissance des bases</p>
                                        <p><span class="title-s">php/html/css</span> </br> maîtrise des bases</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="about-me pt-4 pt-md-0">
										<div class="title-box-2">
											<h5 class="title-left">
												A propos de moi
											</h5>
										</div>
										<p class="lead">
											Etudiant de 24 ans en BTS SIO.
										</p>
										<p class="lead">
											Je m'interresse tout particulièrement au monde de la sécurité offensive. Je souhaite partir sur un bachelor et un master en cybersécurité.
										</p>
										<p class="lead">Après mes études je souhaiterais partir travailler dans le monde du pentesting.
										</p>
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
                                <div class="col-md-6">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                BTS SIO </br>
                                                Option SISR
                                            </h5>
                                        </div>
                                        <p class="lead">
                                            Le Brevet de Technicien Supérieur aux Services Informatiques aux Organisations,
                                            s'adresse à ceux qui souhaitent se former en deux ans aux métiers d'administrateur
                                            réseau ou de développeur. Pour par la suite intégrer directement le marché du travail ou continuer des études,
                                            dans le domaine de l'informatique.
                                        </p>
                                        <p class="lead">
                                            <h5>Option SISR</h5>
                                            L'option SISR (Solutions d'Infrastructure, Systèmes et Réseaux) du BTS SIO (Services Informatiques aux Organisations)
                                            forme des professionnels capables de concevoir, gérer et maintenir les infrastructures informatiques d'une entreprise.
                                            Les étudiants apprennent à configurer des serveurs, à administrer des réseaux, à assurer la sécurité informatique,
                                            et à résoudre des problèmes techniques liés aux systèmes et aux réseaux. Cette option prépare les étudiants à travailler
                                            dans le domaine de l'administration système et réseau au sein des organisations.
                                        </p>
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
								<div class="col-md-6">
									<div class="row">
										<h3 class="title-a">
											Veille Techno
										</h3>
										<div class="line-mf"></div>
										<a href="VeuilleTech.php" target="_blank">
											<p class="subtitle-a">
											CVE  (Common Vulnerabilities and Exposures) <i class="bi bi-box-arrow-up-right"></i>
											</p>
										</a>
									</div>
								</div>
							</div>
							<p class="subtitle_a">
								Qu'est-ce qune CVE ? </br>
								Une CVE est failles de sécurité informatique. </br>Lorsque l'on parle d'une CVE c'est une faille à qui a été attribuer un identifiant CVE.
							</p>
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
											<a href="https://127.0.0.1:8000/" target="_blank"> <span class="bi bi-plus-circle"></span></a>
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
											<a href="ap.php#first" target="_blank"> <span class="bi bi-plus-circle"></span></a>
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
											<a href="ap.php#second" target="_blank"> <span class="bi bi-plus-circle"></span></a>
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
											<a href="stage.php" target="_blank"> <span class="bi bi-plus-circle"></span></a>
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
											<a href="stage.php" target="_blank"> <span class="bi bi-plus-circle"></span></a>
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
										<h2 class="w-title">Studio Big Bang</h2>
										<div class="w-more">
											<span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="w-like">
											<a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
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
                                Portfolio
                            </h3>
                            <p class="subtitle-a">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Lorem impsum dolor</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="assets/img/work-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="assets/img/work-2.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Loreda Cuno Nere</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="assets/img/work-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="assets/img/work-3.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Mavrito Lana Dere</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="assets/img/work-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="assets/img/work-4.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Bindo Laro Cado</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="assets/img/work-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="assets/img/work-5.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Studio Lena Mado</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
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
                                        <h2 class="w-title">Studio Big Bang</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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