<?php
include ('header.html');
include ('navbar.php');
?>

<body>
    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/rhawk.png)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h1 class="hero-title mb-4">Stages</h1>
                    <p class="hero-subtitle"><span class="typed" data-typed-items="Mes stages, Mes expériences professionnelles"></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="first">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div>
                            <h5 class="title-center title-left">Stage de première année</h5>

                            <h4 class="title-ident paddingTop" id="introduction">Contexte</h4>
                            <div class="textIdent textJustify">
                                <p>
                                    En première année de BTS SIO (Service Informatique aux Organisations) à l’Institution Beaupeyrat,
                                    j’ai effectué mon stage au sein du groupe 3il ingénieur situé à Limoges du 29 mai 2023 au 29 juin 2023. Cet établissement dispense des cours d’enseignement privé supérieur. Elle dispense notamment des cours pour un cycle ingénieur, des bachelor ou encore des mastères.
                                </p>
                                <br><br>
                                <a href="assets/img/3il.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                    <div class="work-img">
                                        <img src="assets/img/3il.jpeg" alt="" class="img-fluid">
                                    </div>
                                </a>
                                <br><br>
                                <p class="textIdent">
                                    J’ai choisi de faire mon stage au sein du groupe 3il ingénieur car je souhaite pouvoir faire mon bachelor et mon mastère en cybersécurité chez eux par la suite.
                                    De plus, ils étaient en total capacité de pouvoir me proposer un sujet en adéquation avec mon option de BTS.
                                </p>
                            </div>

                            <div class="textJustify">
                                <p class="textIdent">
                                    Mon stage s’est déroulé au service «Administration système». Tout au long de ce dernier, j’ai été épaulé par Monsieur MARTIN Maxence, mon tuteur et Monsieur OULAD-MOUSSA Mustapha,
                                    mon maître de stage. Le groupe emploie environ 450 salariés. Les employés sont sous la direction de Madame Baillargeat Dominique, directrice générale du Groupe 3il. Voici un organigramme simplifié de l'entreprise :
                                </p>
                                <a href="assets/img/OrganigrammesGroupe3iL_2023%20juin_page-0001.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                    <div class="work-img">
                                        <img src="assets/img/OrganigrammesGroupe3iL_2023%20juin_page-0001.jpg" alt="" class="img-fluid">
                                    </div>
                                </a>
                                <p class="textIdent">J’ai eu la possibilité de découvrir différentes facettes de la profession d’administrateur réseau. Le Groupe 3il a mis à ma disposition du matériel et une salle afin d’avoir un environnement de travail adéquat à ma mission
                                    de stage. Pour ce qui est du matériel j’ai pu avoir accès à un switch, des ordinateur fixe afin de créer un réseau interne/local pour que je puisse tester plusieurs scénarios.
                                </p>
                                <p class="textIdent">
                                    Ma mission de stagiaire a demandé beaucoup d’autonomie. Effectivement, mon tuteur ou mon maître de stage étant très occupé, je devais me débrouiller seul, avec j’avais tout de même la
                                    possibilité de contacter mon tuteur si vraiment je rencontrais un problème. Cependant la nécessité d’autonomie m’a permis d’augmenter considérablement mon efficacité et la précision de
                                    mes recherches.
                                </p>
                            </div>
                            <h4 class="title-ident paddingTop" id="obj">Objectif du stage</h4>
                            <div class="textJustify">
                                <p class="textIdent">
                                    Le groupe 3il souhaite comparer leur solution de déploiement de machines Clonezilla, et l'outil Fog Project, sujet de mon stage. Il m’a donc été demandé de mettre en place une solution de masterisation et de clonage en utilisant Fog Project et de faire une documentation sur Fog Project.
                                </p>
                            </div>

                            <h4 class="title-ident paddingTop" id="main">Mission principale</h4>
                            <div class="textJustify">
                                <p class="textIdent">
                                    Pour ce stage, il m’a été demandé de mettre en place une solution de masterisation et de clonage en utilisant
                                    Fog Project qui est un outil de clonage et de déploiement.
                                </p>
                                <p class="textIdent">
                                    J’ai petit à petit appris à utiliser les outils mis à ma disposition. En effet, j’ai acquis de nouvelles connaissances et compétences telles
                                    que la gestion d’outils de clonage et de déploiement, la création d’un Active Directory, l’installation d’un OS sur un serveur avec raid 5 ou
                                    encore la manipulation de disques durs et de données que ce soit en lignes de commande sous Linux ou en interface graphique sous Windows.
                                    J’ai également pu affiner ma méthode de recherche d’information qui m’a beaucoup aidée car pour mon sujet de stage il existe très peu de documentation
                                    expliquant tout correctement, il a donc fallu que je cherche des solutions en recherchant sur des forums, des sites internet dédié au sujet
                                    mais incomplet ou pas mis à jour, ou en testant les différentes options proposées par le service Fog.
                                </p>
                            </div>
                            <h4 class="title-ident paddingTop" id="second">Missions secondaires</h4>
                            <div class="textJustify">
                                <p class="textIdent">
                                    Tout au long de ce projet, je me suis rendu qu’il y avait beaucoup d’options proposées par Fog Project qui pourraient intéresser mon tuteur,
                                    notamment le fait de pouvoir faire exécuter un script post-déploiement ou encore de pouvoir mettre des applications ou des scripts en «Snapin».
                                    Les applications ou scripts mis en «Snapin» peuvent être déployés sur les machines ou groupe de machines que l’on veut et installer ou exécuter
                                    un script à distance.
                                </p>
                                <p class="textIdent">
                                    Mon tuteur m’a donc demandé de pousser mes recherches et de documenter les possibilités offertes par Fog Project.
                                    J’ai donc réalisé une documentation complète de Fog Project tout en expliquant à mon tuteur la mise en place du déploiement
                                    d’une salle avec plusieurs ordinateurs.
                                    J’ai également pu aider mon tuteur pour la configuration des switches des différentes salles de cours en testant le bon fonctionnement de la nouvelle configuration.
                                </p>
                            </div>

                            <h4 class="title-ident paddingTop" id="difficult">Les difficultés du stage et les solutions apportées</h4>
                            <div class="textJustify">
                                <p>
                                    Pour la plupart de mes problèmes j’ai pu les résoudre seul à force de recherches et de tests, mais pour certains problèmes j’ai demandé de l’aide à mon tuteur ou
                                    mon maître de stage.
                                </p>
                                <p class="textIdent">
                                    Lors de mon stage, je me suis trouvé confronté au problème suivant : il fallait que je capture une image d’un ordinateur en dualboot Windows10/Linux. Cependant, bien
                                    que pour Windows, Fog soit très efficace pour la capture d’une image, cet outil n'est pas performant pour la capture d’un Linux ou d’un dualboot.
                                    En effet, lorsque nous voulons capturer une image, il faut créer une image via l’interface graphique du serveur Fog et lui attribuer un type d’image. Or, selon le
                                    type d’image utilisé, cela peut poser des problèmes car la capture d’un linux ou un dualboot utilise un type d’image particulier
                                    qui prend en charge le chargeur GRUB. Il m’a donc fallu beaucoup de recherches et de tests afin de comprendre comment cela fonctionnait.
                                </p>
                                <p class="textIdent">
                                    Lors du déploiement, je me suis également rendu compte que la capture avait cassé le boot grub.
                                    J’ai donc réalisé un script bash en post-déploiement permettant de réparer le boot grub si ce dernier était endommagé. Malheureusement, par manque de temps, je n'ai pas pu aller au bout de ma démarche.
                                    J'ai cependant proposé de créer cette image avec l'outil Clonezilla et d'effectuer le déploiement avec Fog afin de pallier ce problème.
                                </p>
                            </div>
                            <h4 class="title-ident" id="conclusion paddingTop">Bilan</h4>
                            <div class="textJustify">
                                <p class="textIdent">
                                    Ce stage ma permis de découvrir un outil de clonage et de déploiement puissant, FOG Project. Lors de mes recherches, j’ai pu découvrir
                                    la puissance de tels outils et la nécessité d’avoir un tel outil au sein d’une structure avec un réseau informatique développé car cela permet de pouvoir installer et/ou renouveler un nombre
                                    d’ordinateurs très important en un temps minimum.
                                </p>
                                <p class="textIdent">
                                    J’ai également acquis de nouvelle compétence comme la gestion de sauvegarde, l'approfondissement de mes recherches en autonomie ainsi que la création de
                                    documentations techniques.
                                </p>
                                <p class="textIdent">
                                    Après avoir réalisé les objectifs de mon stage, j’ai pu approfondir mon sujet  en utilisant des fonction plus avancé de Fog comme les Snapin, qui mon permis notamment de pouvoir déployer un script post déploiement
                                    ou encore l’intégration à un Active Directory.
                                </p>
                                <p class="textIdent">
                                    Ce stage m'a permis d’affiner mon projet professionnel tout en renforçant mon idée principale qui est de m’orienter vers le pentesting. En effet tout au long de mon stage
                                    j’ai pu réfléchir aux failles ainsi qu'à la sécurisation de mes déploiements et outils.
                                    Le but de cette réflexion était une réflexion personnelle car toutes les solutions que j’ai imaginées sont déjà mise en place au sein du groupe 3il.
                                </p>
                            </div>

                            <h4 class="title-ident2">Documentations réalisées : </h4>
                            <div>
                                <div class="row certif">
                                    <div class="col-md-4 img-aws">
                                        <div class="flex-woaw">
                                            <div class="service-box certif-box marg-right">
                                                <div class="service-content">
                                                    <h2 class="s-title cve-title">Fog project </h2>
                                                    <img src="assets/img/fogproject-removebg.png" alt="">
                                                    <p>Guide utilisateur</p>
                                                </div>
                                            </div>
                                            <div class="pdf">
                                                <embed src="assets/DocFogProject.pdf" type="application/pdf"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row certif">
                                    <div class="col-md-4 img-aws">
                                        <div class="flex-woaw">
                                            <div class="service-box certif-box marg-right">
                                                <div class="service-content">
                                                    <h2 class="s-title cve-title">Fog project </h2>
                                                    <img src="assets/img/fogproject-removebg.png" alt="">
                                                    <p>Création d'un user</p>
                                                </div>
                                            </div>
                                            <div class="pdf">
                                                <embed src="assets/crea_userufogproject.pdf" type="application/pdf"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="secondY">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div>
                            <h5 class="title-center title-left">Stage de deuxième année</h5>
                            <h4 class="title-ident" id="introduction">Contexte</h4>
                            <div class="textJustify">
                                <p class="textIdent">
                                    En deuxième année de BTS SIO (Service Informatique aux Organisations) à l’Institution Beaupeyrat, j’ai effectué mon stage au sein d’Iconosquare, entreprise développant la plateforme web éponyme qui permet de développer la présence en ligne d'autres entreprises, situé à Limoges au 12 rue Armand Bardès, du 08 janvier 2024 au 23 février 2024.
                                </p>
                                <br><br>
                                <a href="assets/img/iconosquare.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                    <div class="work-img">
                                        <img src="assets/img/iconosquare.png" alt="" class="img-fluid">
                                    </div>
                                </a>
                                <br><br>
                                <p class="textIdent">
                                    J’ai choisi de faire mon stage au sein d’Iconosquare car c’était une opportunité pour moi de pouvoir accroitre mes connaissances en ce qui concerne la gestion d’un SI sur le cloud. De plus,
                                    ils étaient en total capacité de pouvoir me proposer un sujet en adéquation avec mon option de BTS, ainsi que pour ma poursuite d’étude.
                                </p>
                                <p class="textIdent">
                                    Mon stage s’est déroulé au service «Administration système». Tout au long de ce dernier, j’ai été épaulé par Monsieur AIRSAULT Nicolas, mon tuteur et Monsieur MUNOZ Jeremy, mon maître de stage.
                                    J’ai eu la possibilité de découvrir différentes facettes de la profession d’administrateur IT.
                                </p>
                                <p class="textIdent">
                                    Pour ce qui est du matériel j’ai pu avoir accès à un ordinateur portable (mac), ainsi qu'aux accès à certains comptes pour réaliser au mieux la missions qui m’a été donnée.
                                    J’ai également pu travailler en autonomie, même si j'avais la possibilité de contacter mon tuteur. J’ai également été intégré aux réunions hebdomadaires auxquelles je pouvais échanger
                                    avec les équipes sur ma progression et les difficultés éventuellement rencontrées.
                                </p>
                            </div>
                            <h4 class="title-ident" id="obj">Objectif du stage</h4>
                            <div class="textJustify">
                                <p class="textIdent">
                                    Le fait de gérer beaucoup de données d’utilisateurs génère des inquiétudes auprès des utilisateurs. Il faut donc qu'Iconosquare leur prouve que les données qu’ils possèdent sont bien protégées. Pour
                                    cela, une entreprise peut passer des certifications de qualité, comme la norme ISO 27001, ou encore faire des audits de sécurité pour attester l'absence de failles potentiellement exploitables. En ce qui concerne ma mission j’ai dû proposer des améliorations du code IaC écrit sous Terraform, afin de répondre aux alertes de la solution Datadog par rapport à la norme ISO 27001.
                                </p>
                            </div>
                            <h4 class="title-ident" id="main">Mission principale</h4>
                            <div class="textJustify">
                                <p class="textIdent">
                                    Je me suis très rapidement adapté à l’environnement d’Iconosquare. Pour ce stage, il m’a été demandé de faire des propositions d’amélioration du code Terraform afin de résoudre les alertes de sécurité
                                    de Datadog afin de répondre au mieux à la norme ISO 27001.
                                </p>
                                <p class="textIdent">
                                    J’ai petit à petit appris à utiliser les outils mis à ma disposition. En effet, j’ai acquis de nouvelles connaissances et compétences telles que l’utilisation d’un langage IaC, l’utilisation
                                    de la plateforme de gestion Datadog ou encore l’utilisation approfondie de Gitlab. J’ai également pu affiner ma méthode de recherche d’informations qui m’a beaucoup aidée car pour mon sujet de stage
                                    il existe de la  documentation détaillée mais pas forcément pour l’usage que je souhaitais. Il a donc fallu que je cherche des solutions en recherchant sur des forums,
                                    des sites internet dédiés au sujet mais incomplet ou pas mis à jour, ou en testant les différentes options, le tout avec la supervision de mon tuteur et de mon maitre de stage qui ont vérifiés tout ce que j’ai proposé via les merge request de Gitlab.
                                </p>
                            </div>
                            <h4 class="title-ident" id="second">Missions secondaires</h4>
                            <div class="textJustify">
                                <p class="textIdent">
                                    J’ai également eu trois autres sujets qui m’ont été donnés au fur et à mesure de mon stage.
                                </p>
                                <p class="textIdent">
                                    Le premier sujet concerne la réalisation d’un script afin d’importer dans une base Redis les données de géolocalisation d’un grand nombre de villes du monde entier.
                                    J’ai rencontré plusieurs problèmes pour ce sujet. Le premier étant que le script soit obligatoirement écrit en JavaScript.
                                    Le second problème était de trouver le meilleur type d’enregistrement Redis pour l’utilisation que voulait en faire Iconosquare.
                                    Enfin le dernier problème concerne le nom des villes récupérées par la plateforme Iconosquare. En effet, ces dernières sont récupérées dans la langue de
                                    l’utilisateur. Cependant, ces dernières doivent être récupérées en anglais pour pouvoir exécuter des requêtes sur les noms dans la base Redis.
                                </p>
                                <a href="script.php">voir Annexe</a>
                                <p class="textIdent">
                                    Le deuxième sujet concerne la réalisation d’un serveur Prometheus pour faire du monitoring des versions des différents services installés dans l’infrastructure. Après de longues recherches sur ce sujet, il s’avère que la mise
                                    en place d’un serveur Prometheus aurait demandé beaucoup trop d’efforts. J’ai fini par opter pour la création d'un script python exécuté sur Lambda et permettant de récupérer la version des services installés, de faire
                                    une vérification sur les répertoires officiels de chaque service pour trouver la dernière version disponible et, si les versions sont différentes, le script envoie un évènement à Datadog pour alerter que le service en question n’est pas à jour.
                                    Cependant j’ai rencontré quelques difficultés, notamment au moment de mettre mon script sur Lambda car, bien que Lambda
                                    possède des modules de base de python, il fallait que j’importe les modules nécessaires pour mon script. En revanche, comme Iconosquare utilise Terraform (langage IaC) pour déployer son infrastructure, il a fallu que je trouve comment faire pour
                                    importer les modules nécessaires.
                                </p>
                                <a href="script.php">voir Annexe</a>
                                <p class="textIdent">
                                    Le troisième sujet concerne la Recherche et Développement sur les Features flag pour le backend (laravel/php) et le frontend (React/Next) et comment faire pour pouvoir utiliser la nouvelle option de Gitlab pour gérer les Features flags.
                                    J’en ai donc profité pour faire des tests en local afin d'en comprendre le fonctionnement. Il m’a donc été demandé de faire une documentation pour les développeurs backend et frontend ainsi qu'une présentation et une démonstration afin d'expliquer comment mettre en place et configurer les Features flag dans leur code.<br><br>
                                    voir <a href="#featureFlag" class="link-TOC">Annexe</a><br><br>
                                </p>
                            </div>
                            <h4 class="title-ident" id="difficult">Les difficultés du stage</h4>
                            <div class="textJustify">
                                <p class="textIdent">
                                    J’ai rencontré des difficultés lors de mon stage. Les missions confiées n’ont pas toujours été évidentes à effectuer.
                                    Toutefois, avec le temps j’ai su m’adapter et changer ma méthode de travail et de recherche afin de pouvoir affronter ces quelques obstacles.
                                </p>
                                <p class="textIdent">
                                    En effet j’ai passé beaucoup de temps à effectuer des recherches car dans les documentations officielles l’usage de ce dont j’avais besoin n’était pas forcément expliqué, bien qu’évoqué comme étant possible.
                                    J’ai également été confronté à des problèmes technique qui ont eu pour conséquence de ne pas mettre en application dans l’immédiat mes propositions d’amélioration, comme pour ma proposition de modification de la façon dont les logs pour les ALB
                                    (aws Application Load Balancer). La correction de ces droits étant assez complexe, mon code n'a pas été mis en place dans l'immédiat.
                                </p>
                                <p class="textIdent">
                                    Pour le second sujet concernant le serveur Prometheus, je me suis rendu compte que la mise en place d’un tel serveur serait très complexe pour l’utilisation d'Iconosquare. En effet,
                                    un serveur Prometheus seul ne sert à rien car il a besoin d’une infrastructure particulière pour qu’il puisse fonctionner correctement. Voici un diagramme illustrant l’infrastructure pour un serveur.<br><br>
                                    <img class="img-bg" src="assets/img/infra-prometheus.png" width="1080px">
                                </p>
                            </div>
                            <h4 class="title-ident" id="conclusion">Bilan</h4>
                            <div class="textJustify">
                                <p class="textIdent">
                                    Grâce à cette expérience pratique, j’ai eu l’opportunité de découvrir l’usage d’outils d’Infrastructure As Code (IaC), d’une utilisation avancée de Gitlab, ainsi que de confirmer mes compétences dans la réalisation de script divers.
                                    J’ai pu développer de nombreuses compétences telles que l’utilisation d’un langage IaC, l’utilisation des métriques pour analyser l’infrastructure et faire de la Recherche et Développement sur les Features flag pour le backend et le frontend.
                                    Ce stage est pour moi un tremplin pour mon avenir professionnel. En effet il m’a permis d’avoir une réflexion assez poussée par rapport à la sécurité d’une Infrastructure cloud gérée par
                                    du code.
                                </p>
                                <p class="textIdent">
                                    Mon sujet principal étant orienté vers la sécurité cloud, j’ai pu en apprendre énormément sur ce sujet tellement vaste.
                                    J’aurais aimé avoir pu apporter plus que ce que j’ai fais à Iconosquare malheureusement le temps a manqué.
                                </p>
                                <p class="textIdent">
                                    Malgré tout, ce stage m’a permis de confirmer mon orientation et de découvrir qu’il n’y a pas que le monde de la cybersécurité qui est fascinant.
                                    L’avenir du réseau via l’utilisation d’infrastructure cloud avec du code IaC est vraiment fascinante et cela permet de faire tellement plus de chose
                                    qu’avec une infrastructure on-premise. Je m’estime vraiment chanceux d’avoir pu découvrir cette manière de travailler et d’avoir pu faire un comparatif entre les deux méthodes.
                                </p>
                                <p class="textIdent">
                                    Ce stage ma permis d’affiner mon projet professionnel tout en renforçant mon idée principale qui est de m’orienter vers le pentesting. En effet tout au long de mon stage
                                    j’ai pu réfléchir a comment est-ce que ce que je mettais en place pouvais être attaqué, par où et comment et par conséquence penser à comment l’on pourrait sécuriser l’outil.
                                </p>
                            </div>
                            <h4 class="title-ident" id="annexe">Annexes</h4>

                            <h4 class="title-ident2">Documentations réalisées : </h4>
                            <div>
                                <div class="row certif">
                                    <div class="col-md-4 img-aws">
                                        <div class="flex-woaw">
                                            <div class="service-box certif-box marg-right">
                                                <div class="service-content">
                                                    <h2 class="s-title cve-title">Feature Flag </h2>
                                                    <img src="assets/img/feature.png" alt="">
                                                </div>
                                            </div>
                                            <div class="pdf">
                                                <embed src="assets/Features_Flags_2.pdf" type="application/pdf"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
