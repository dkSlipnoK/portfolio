<?php
include("header.html");
include("navbar.php");
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
											Etudiant de 23 ans en BTS SIO.
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
					<div class="col-md-4">
						<div class="service-box">
							<a href=" https://www.exploit-db.com/exploits/51397" target="_blank">
								<div class="service-ico">
									<span class="ico-circle"><i class="bi bi-briefcase"></i></span>
								</div>
								<div class="service-content">
									<h2 class="s-title cve-title">CVE 2023-24685</h2>
									<p class="s-description text-center">
										</br>
										EDB-ID : 51397 </br>
										EDB verifié</br>
										Date : 27-04-2023</br>
										Type : webapps</br>
										platform : php </br>
										nom : ChurchCRM v4.5.1</br>
										but : injection sql à la connection (Authenticated SQL injection)</br>
										
									</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-box">
							<a href="https://www.cert.ssi.gouv.fr/avis/CERTFR-2023-AVI-0359/" target="_blank">
								<div class="service-ico">
									<span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
								</div>
								<div class="service-content">
									<h2 class="s-title cve-title">CERTFR-2023-AVI-0359</h2>
									<p class="s-description text-center">
										Multiples vulnérabilités dans le noyaux Linux Ubuntu </br>
										Date : 05-05-2023 </br>
										Référence : <br>
											CERTFR-2023-AVI-0359 <br>
										Risques : <br>
											- execution de code arbitraire <br>
											- DDOS <br>
											- Élévation de privilèges  <br>
									</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-box">
							<a href=" https://www.cert.ssi.gouv.fr/avis/CERTFR-2023-AVI-0358/" target="_blank">
								<div class="service-ico">
									<span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
								</div>
								<div class="service-content">
									<h2 class="s-title cve-title">CERTFR-2023-AVI-0358</h2>
									<p class="s-description text-center">
										</br></br>
										Vulnérabilité dans le noyaux Linux de RedHat </br>
										Date : 05-05-2023 </br>
										Référence : <br>
											CERTFR-2023-AVI-0358 <br>
										Risques : 
											- Élévation de privilèges <br></br></br>
									</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 avi-0346">
						<div class="service-box">
							<a href=" https://www.cert.ssi.gouv.fr/avis/CERTFR-2023-AVI-0346/" target="_blank">
								<div class="service-ico">
									<span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
								</div>
								<div class="service-content">
									<h2 class="s-title cve-title">CERTFR-2023-AVI-0346</h2>
									<p class="s-description text-center">
										</br></br></br>
										Vulnérabilité dans le noyaux Linux de RedHat </br>
										Date : 05-05-2023 </br>
										Référence : <br>
											CERTFR-2023-AVI-0358 <br>
										Risques : 
											- Élévation de privilèges <br>
											- DDOS </br>
											</br></br>
											</br>
									</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-box">
							<div class="service-ico">
								<span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
							</div>
							<div class="service-content">
								<h2 class="s-title">CERTFR-2023-AVI-0743</h2>
								<p class="s-description text-center">
									Multiples vulnérabilités dans les produits Microsoft </br>
									Date : 13/09/2023</br>
									Référence : <br>
										CERTFR-2023-AVI-0743 </br>
									Risques :</br>
										- Contournement de la fonctionnalité de sécurité</br>
										- Atteinte à la confidentialité des données</br>
										- Déni de service</br>
										- Exécution de code arbitraire à distance</br>
										- Usurpation d'identité</br>
										- Élévation de privilèges
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-box">
							<div class="service-ico">
								<span class="ico-circle"><i class="bi bi-calendar4-week"></i></span>
							</div>
							<div class="service-content">
								<h2 class="s-title">CERTFR-2023-AVI-0752</h2>
								<p class="s-description text-center">
									Multiples vulnérabilités dans le noyau Linux de Debian</br>
									Date : 15/09/2023</br>
									Référence : <br>
										CERTFR-2023-AVI-0752<br>
									Risques :</br>
										- Atteinte à l'intégrité des données</br>
										- Atteinte à la confidentialité des données</br>
										- Contournement de la politique de sécurité</br>
										- Déni de service à distance</br>
										- Exécution de code arbitraire à distance</br>
										- Élévation de privilèges</br>

								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-box">
							<div class="service-ico">
								<span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
							</div>
							<div class="service-content">
								<h2 class="s-title">CERTFR-2023-CTI-006</h2>
								<p class="s-description text-center">
									Démantèlement du botnet Qakbot</br>
									Date : 18/09/2023</br>
									Référence :</br>
										CERTFR-2023-CTI-006</br>
									Contexte :</br>
									</br>
									Le Bureau fédéral d’enquête américain (FBI) a effectué le 26 août 2023 une opération de démantèlement et de désinfection 
									du réseau de machines zombies ou botnet Qakbot (aussi appelé Qbot), en lien avec les autorités allemandes, néerlandaises, 
									britanniques et françaises.</br>
									</br>
									Actif depuis 2008, Qakbot est à l’origine un cheval de Troie bancaire. 
									Son architecture modulaire a depuis permis d’autres utilisations, 
									comme l’enrôlement de machines infectées dans le botnet du même nom ou le vol d’authentifiants
									de messagerie électronique dont le contenu sert à mener de nouvelles attaques. 
									Les sites Check your hack (de la Police néerlandaise), et Have I been pwned ? 
									permettent de vérifier si un compte de messagerie est connu pour avoir été compromis par Qakbot.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-box">
							<div class="service-ico">
							<a href="https://nvd.nist.gov/vuln/detail/CVE-2023-5217#" target="_blank"><span class="ico-circle"><i class="bi bi-brightness-high"></i></span></a>
							</div>
							<div class="service-content">
								<h2 class="s-title">CVE-2023-5217</h2>
								<p class="s-description text-center">
								Le dépassement de tampon de tas dans l'encodage vp8 dans libvpx dans Google Chrome avant 117.0.5938.132 
								et libvpx 1.13.1 permettait à un attaquant distant d'exploiter potentiellement la corruption du tas via une page HTML contrefaite. 
								(Gravité de sécurité de Chromium : élevée)</br>
								Date : 28/09/2023</br></br>
                                    </br></br>
                                    </br></br>
                                    </br></br>
                                    </br></br>
                                    </br></br>
                                    </br></br>
                                    </br></br>
                                    </br></br>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-box">
							<div class="service-ico">
								<span class="ico-circle"><i class="bi bi-binoculars"></i></span>
							</div>
							<div class="service-content">
								<h2 class="s-title cve-title">Outils de recherche</h2>
								<p class="s-description text-center">
									trouver les nouvelles CVE : <br>
										- exploit database <br>
										- Anssi <br>
									Détail sur les CVE : <br>
										- cvedetails.com
								</p>
							</div>
						</div>
					</div>
					<!-- </div><div class="col-md-4">
						<div class="service-box">
							<div class="service-ico">
								<span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
							</div>
							<div class="service-content">
								<h2 class="s-title">Graphic Design</h2>
								<p class="s-description text-center">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
									provident vitae! Magni
									tempora perferendis eum non provident.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-box">
							<div class="service-ico">
								<span class="ico-circle"><i class="bi bi-calendar4-week"></i></span>
							</div>
							<div class="service-content">
								<h2 class="s-title">Marketing Services</h2>
								<p class="s-description text-center">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
									provident vitae! Magni
									tempora perferendis eum non provident.
								</p>
							</div>
						</div>
					</div> -->
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