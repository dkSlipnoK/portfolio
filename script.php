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
					<h1 class="hero-title mb-4">Annexes </h1>
					<p class="hero-subtitle"><span class="typed" data-typed-items="Mes scripts, Mes images"></span></p>
					<!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
				</div>
			</div>
		</div>
	</div>
    <div class="container" id="secondY">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <h4 class="title-ident2">Sujet secondaire 1 : </h4>
                        <h4 class="title-ident3">Script JS :</h4>

                        <pre><code class="language-javascript">
&lt;script&gt;
// Attention il y a des doublons dans le fichier cities500.txt par exemple pour Lakelands en Australie
//il y a bien 2 Lakelands mais à positions différente en Australie
// il faudra donc voir comment l'on peut résoudre le problème.
// il y a également des doublons comme pour Xiji en Chine qui a 3 enregistrements dont un qui pointe sur la ville Xihe country
//et l'autre sur Tongzhou Beijing.
// Pour la récupération des données sur redis il faut utiliser hget soit "hgetall redisKey" pour récupérer toutes les infos soit
//"hget redisKey longitude ou latitude".
// pour récupérer uniquement longitude latitude /!\ avec hget il sera nécessaire de faire 2 appel
//pour avoir les données 1 pour longitude et un pour latitude.

const fs = require('fs');
const readline = require('readline');
const Redis = require('ioredis');

const cluster = new Redis.Cluster([
  {
    port: 6373,
    host: "172.16.30.31",
  },
  {
    port: 6374,
    host: "172.16.30.32",
  },
  {
    port: 6375,
    host: "172.16.30.33",
  }
]);

console.time('ImportationRedis');

const citiesFilePath = '/usr/local/etc/redis/cities500.txt';
const citiesStream = fs.createReadStream(citiesFilePath);
const citiesReader = readline.createInterface({
  input: citiesStream,
  crlfDelay: Infinity,
});

citiesReader.on('line', async (line) => {
  try {
    // Structure du fichier cities500.txt
    const [
      geonameId,
      name,
      asciiname,
      alternatenames,
      latitude,
      longitude,
      featureClass,
      featureCode,
      countryCode,
      cc2,
      admin1Code,
      admin2Code,
      admin3Code,
      admin4Code,
      population,
      elevation,
      dem,
      timezone,
      modificationDate,
    ] = line.split('\t');

    // remplacez les majuscule par des minuscule
    const cleanName = asciiname.toLowerCase();

    // Utiliser le nom de la ville et du pays pour construire la clé Redis
    const redisKey = `${cleanName}`;
    const field = `${geonameId}:${cleanName}`;

    const value = JSON.stringify({
      name: asciiname,
      latitude: latitude,
      longitude: longitude,
      population: population,
      timezone: timezone,
      alternateName: alternatenames
    });

    // Si le block au-dessous est décommenter pour afficher les doublons il faut commenter les deux await ci-après
    // sinon ça fera l'enregistrement 4 fois.
    // les block await font l'enregistrement des données sur le cluster redis en utilisation la commande hset avec
    // en premier paramétre la clé (qui servira pour récupéré les infos) puis la liste champ = valeur des données
    // coreespondantes.

    // Ce block ci fait un enregistrement avec la clé redisKey ville:pays
    await cluster.hset(redisKey, field, value);

  } catch (error) {
    console.error(`Erreur lors de l'enregistrement : ${error.message}`);
  }
});

citiesReader.on('close', async () => {
  console.timeEnd('ImportationRedis');
  console.log('Importation terminée. Fermeture de la connexion Redis.');
  await cluster.quit();
});


cluster.on('error', (err) => console.log('Redis Cluster Error', err));
&lt;script&gt;
                            </code></pre>
                        <h4 class="title-ident3">docker-compose.yaml :</h4>
                        <pre><code class="language-yaml">
version: "3.9"

services:

redis-cluster:
  image: 'redis:latest'
  command: redis-cli --cluster create 172.16.30.31:6373 172.16.30.32:6374 172.16.30.33:6375 --cluster-replicas 0 --cluster-yes
  networks:
    network-dev-stack:
      ipv4_address: 172.16.30.30
  depends_on:
    - redis-node-1
    - redis-node-2
    - redis-node-3

redis-node-1:
image: "redis:latest"
container_name: redis-node-1
hostname: redis-node-1
command: redis-server /usr/local/etc/redis/redis.conf
environment:
  - ALLOW_EMPTY_PASSWORD=yes
ports:
  - "6373:6373"
volumes:
  - redis-node-1-data:/var/lib/redis
  - ./conf/redis/redis-node-1.conf:/usr/local/etc/redis/redis.conf
networks:
  network-dev-stack:
    ipv4_address: 172.16.30.31

redis-node-2:
image: "redis:latest"
container_name: redis-node-2
hostname: redis-node-2
command: redis-server /usr/local/etc/redis/redis.conf
environment:
  - ALLOW_EMPTY_PASSWORD=yes
ports:
  - "6374:6374"
volumes:
  - redis-node-2-data:/var/lib/redis
  - ./conf/redis/redis-node-2.conf:/usr/local/etc/redis/redis.conf
networks:
  network-dev-stack:
    ipv4_address: 172.16.30.32

redis-node-3:
image: "redis:latest"
container_name: redis-node-3
hostname: redis-node-3
command: redis-server /usr/local/etc/redis/redis.conf
environment:
  - ALLOW_EMPTY_PASSWORD=yes
ports:
  - "6375:6375"
volumes:
  - redis-node-3-data:/var/lib/redis
  - ./conf/redis/redis-node-3.conf:/usr/local/etc/redis/redis.conf
networks:
  network-dev-stack:
    ipv4_address: 172.16.30.33

redisinsight:
image: redislabs/redisinsight
container_name: redisinsight
hostname: redisinsight
restart: unless-stopped
ports:
  - "8001:8001"
networks:
  network-dev-stack:
    ipv4_address: 172.16.30.35

nodeJS:
image: "node:20"
container_name: nodeJS
hostname: nodeJS
restart: unless-stopped
command: tail -f /var/log/dpkg.log
volumes:
  - ./import-script/import.js:/usr/local/etc/redis/import.js
  - ./import-script/cities500.txt:/usr/local/etc/redis/cities500.txt
  - ./import-script/countryInfo.txt:/usr/local/etc/redis/countryInfo.txt
networks:
  network-dev-stack:
    ipv4_address: 172.16.30.36

volumes:
redis-node-1-data:
redis-node-2-data:
redis-node-3-data:

networks:
network-dev-stack:
driver: bridge
enable_ipv6: false
ipam:
  driver: default
  config:
    - subnet: 172.16.30.0/24
      gateway: 172.16.30.1
                            </code></pre>
                        <h4 class="title-ident3">redis-node-1.conf :</h4>
                        <pre><code class="language-yaml">
port 6373
cluster-enabled yes
cluster-config-file nodes.conf
cluster-node-timeout 5000
appendonly yes
                            </code></pre>
                        <h4 class="title-ident3">redis-node-2.conf :</h4>
                        <pre><code class="language-yaml">
port 6374
cluster-enabled yes
cluster-config-file nodes.conf
cluster-node-timeout 5000
appendonly yes
                            </code></pre>
                        <h4 class="title-ident3">redis-node-3.conf :</h4>
                        <pre><code class="language-yaml">
port 6375
cluster-enabled yes
cluster-config-file nodes.conf
cluster-node-timeout 5000
appendonly yes
                            </code></pre>
                        <h4 class="title-ident3">Screen : </h4>
                        <p> Execution du script :</p>
                        <img src="assets/img/term-exec.png" alt="Résultat de l'execution du script" class="screen" >
                        <p>Clés par nom de ville :</p>
                        <img src="assets/img/key.png" alt="Screen de l'enregistrement des clés" class="screen">
                        <p>Différentes villes Paris pour la même clé :</p>
                        <img src="assets/img/key-content.png" alt="Contenu des clés" class="screen">
                        <h4 class="title-ident2">Sujet secondaire 2 :</h4>
                        <h4 class="title-ident4">Script python versioning :</h4>
                        <pre><code class="language-python">
import feedparser, re, requests, os
from datadog_api_client import ApiClient, Configuration
from datadog_api_client.v2.api.metrics_api import MetricsApi
from datadog_api_client.v1.api.events_api import EventsApi
from datadog_api_client.v1.model.event_create_request import EventCreateRequest

######### Configuration de l'API #########

configuration = Configuration(
host="https://datadoghq.eu",
api_key={
    'apiKeyAuth': os.environ.get(‘API_KEY’),
    'appKeyAuth': os.environ.get(‘APP_KEY’)
}
)

######### Fonction pour version installée #########

# Fonction pour récupére la métric helm.release depuis datadog
def get_installed_version():
try:
    with ApiClient(configuration) as api_client:
        api_instance = MetricsApi(api_client)

        response = api_instance.list_tags_by_metric_name(
            metric_name="helm.release",
        )
    # print(response)
    tags    = response['data']['attributes']['tags']

    # Récupérer que les tag "helm_chart"
    pattern = re.compile(r'^helm_chart:(.+?)-([a-zA-Z]*\d+\.\d+\.\d+(?:[._-]?\w*)?)$')

    # Block pour stocké dans un tableau le nom et la version
    helm_chart_data = []
    for tag in tags:
        if tag.startswith('helm_chart:'):
            match = pattern.match(tag)

            if match:
                name, version = match.groups()

                # On ignore les trois helm_chart suivant car installer en local et trop compliqué de faire le
                # check comparatif des versions.
                # Pour redisinsight la version installé le chart définit en local est différent du chart qui se
                # trouve sur qube donc pour le moment on l'ignore également.
                if name != "bernard" and name != "iconosquare-front" and name != "iconosquare-back" and name != "redisinsight":
                    helm_chart_data.append({
                        'name': name,
                        'version': version
                    })
    return helm_chart_data
except Exception as e:
    print(f"Erreur lors de la récupération des versions installée : {e}")
    return None

######### Fonction dernière release disponible #########

def get_latest_version(repo_main, repo_name, service):
try:
    match repo_main:
        case "artifact":
            # R&cupérer le flux rss du service traitée
            news_feed = feedparser.parse(f'https://artifacthub.io/api/v1/packages/helm/{repo_name}/{service}/feed/rss')

            # Récupérer la dernière version
            for i in range(0, len(news_feed.entries)):
                if i == (len(news_feed.entries)-1):
                    title_tag = news_feed.entries[0]['title']

                    # Pour le cas de sonarqube on remplace le + par _
                    if title_tag:
                        version = title_tag.replace("+", "_")
                        return version
        case "github":
            # Récupérer l'url
            repo_url = f"https://github.com/{repo_name}/{service}/releases/latest"
            response = requests.get(repo_url)
            response.raise_for_status()
            html_content = response.text

            # Match
            version_match = re.search(r'/releases/tag/(v\d+(\.\d+)*)', html_content)
            if version_match:
                latest_version = version_match.group(1)
                return latest_version
            else:
                return None
        case _ :
            result = "Erreur sur le repo principal"
            return result
except Exception as e :
    print(f"Erreur lors de la récupération de la dernière version : {e}")
    return None

######### Fonction envoie d'event #########

# Fonction pour verifier si la dernière version d'un service existe si se n'est pas le cas alors envoie d'un event en
# un seul exemplaire.
def check_and_send_event(service, latest_version, helm_chart_data):
# Vérifier si la dernière version existe dans le tableau
latest_version_exists = any(entry.get('version') == latest_version for entry in helm_chart_data if entry.get('name') == service)

# Vérifier si le service a déjà été traité
if service not in processed_services and not latest_version_exists:
    # Aucune version correspondante, envoyer un seul événement
    send_version_event(latest_version, service)

    # Ajouter le service à la liste des services traités
    processed_services.append(service)

# Fonction pour faire l'envoie d'évent à datadog
def send_version_event(latest_version, name):

# Création du contenu de l'event
body = EventCreateRequest(
    title       = f'{name} : {latest_version} is latest version',
    text        = f'Latest Version: {latest_version}',
    alert_type  = "warning",
    tags        = [f'latest_version:{latest_version}'],
)
# Envoie de l'event à datadog
with ApiClient(configuration) as api_client:
    api_instance    = EventsApi(api_client)
    response        = api_instance.create_event(body=body)

######### Appel des fonctions #########

# tableau pour les services traités
processed_services = []

def handler(event, context):
try:
    if 'Records' in event:
        records = event['Records']

        for entry in records:
            repo_main = entry.get("repo_main")
            repo_name = entry.get("repo_name")
            service = entry.get("service")
            latest_version = get_latest_version(repo_main, repo_name, service)
            check_and_send_event(service, latest_version)

        return {
            'statusCode': 200,
            'body': 'Script exécuté sans erreurs !'
        }
    else:
        raise ValueError("La clé 'Records' est manquante dans l'événement.")

except Exception as e:
    return {
        'statusCode': 500,
        'body': f'Erreur lors de l\'exécution du script : {str(e)}'
    }

),
    'appKeyAuth': APP_KEY
}
)

######### Fonction pour version installée #########

# Fonction pour récupére la métric helm.release depuis datadog
def get_installed_version():
try:
    with ApiClient(configuration) as api_client:
        api_instance = MetricsApi(api_client)

        response = api_instance.list_tags_by_metric_name(
            metric_name="helm.release",
        )
    # print(response)
    tags    = response['data']['attributes']['tags']

    # Récupérer que les tag "helm_chart"
    pattern = re.compile(r'^helm_chart:(.+?)-([a-zA-Z]*\d+\.\d+\.\d+(?:[._-]?\w*)?)$')

    # Block pour stocké dans un tableau le nom et la version
    helm_chart_data = []
    for tag in tags:
        if tag.startswith('helm_chart:'):
            match = pattern.match(tag)

            if match:
                name, version = match.groups()

                # On ignore les trois helm_chart suivant car installer en local et trop compliqué de faire le check
                # comparatif des versions.
                # Pour redisinsight la version installé le chart définit en local est différent du chart qui se
                # trouve sur qube donc pour le moment on l'ignore également.
                if name != "bernard" and name != "iconosquare-front" and name != "iconosquare-back" and name != "redisinsight":
                    helm_chart_data.append({
                        'name': name,
                        'version': version
                    })
    return helm_chart_data
except Exception as e:
    print(f"Erreur lors de la récupération des versions installée : {e}")
    return None

######### Fonction dernière release disponible #########

def get_latest_version(repo_main, repo_name, service):
try:
    match repo_main:
        case "artifact":
            # R&cupérer le flux rss du service traitée
            news_feed = feedparser.parse(f'https://artifacthub.io/api/v1/packages/helm/{repo_name}/{service}/feed/rss')

            # Récupérer la dernière version
            for i in range(0, len(news_feed.entries)):
                if i == (len(news_feed.entries)-1):
                    title_tag = news_feed.entries[0]['title']

                    # Pour le cas de sonarqube on remplace le + par _
                    if title_tag:
                        version = title_tag.replace("+", "_")
                        return version
        case "github":
            # Récupérer l'url
            repo_url = f"https://github.com/{repo_name}/{service}/releases/latest"
            response = requests.get(repo_url)
            response.raise_for_status()
            html_content = response.text

            # Match
            version_match = re.search(r'/releases/tag/(v\d+(\.\d+)*)', html_content)
            if version_match:
                latest_version = version_match.group(1)
                return latest_version
            else:
                return None
        case _ :
            result = "Erreur sur le repo principal"
            return result
except Exception as e :
    print(f"Erreur lors de la récupération de la dernière version : {e}")
    return None

######### Fonction envoie d'event #########

# Fonction pour verifier si la dernière version d'un service existe si se n'est pas le cas alors envoie d'un event en
# un seul exemplaire.
def check_and_send_event(service, latest_version, helm_chart_data):
# Vérifier si la dernière version existe dans le tableau
latest_version_exists = any(entry.get('version') == latest_version for entry in helm_chart_data if entry.get('name') == service)

# Vérifier si le service a déjà été traité
if service not in processed_services and not latest_version_exists:
    # Aucune version correspondante, envoyer un seul événement
    send_version_event(latest_version, service)

    # Ajouter le service à la liste des services traités
    processed_services.append(service)

# Fonction pour faire l'envoie d'évent à datadog
def send_version_event(latest_version, name):

# Création du contenu de l'event
body = EventCreateRequest(
    title       = f'{name} : {latest_version} is latest version',
    text        = f'Latest Version: {latest_version}',
    alert_type  = "warning",
    tags        = [f'latest_version:{latest_version}'],
)
# Envoie de l'event à datadog
with ApiClient(configuration) as api_client:
    api_instance    = EventsApi(api_client)
    response        = api_instance.create_event(body=body)

######### Appel des fonctions #########

# tableau pour les services traités
processed_services = []

def handler(event, context):
try:
    if 'Records' in event:
        records = event['Records']

        for entry in records:
            repo_main = entry.get("repo_main")
            repo_name = entry.get("repo_name")
            service = entry.get("service")
            latest_version = get_latest_version(repo_main, repo_name, service)
            check_and_send_event(service, latest_version)

        return {
            'statusCode': 200,
            'body': 'Script exécuté sans erreurs !'
        }
    else:
        raise ValueError("La clé 'Records' est manquante dans l'événement.")

except Exception as e:
    return {
        'statusCode': 500,
        'body': f'Erreur lors de l\'exécution du script : {str(e)}'
    }
                            </code>
                        </pre>
                        <p>Dashboard des alertes généré par le script python :</p>
                        <img src="assets/img/screen-dahsboard-versioning.jpg" alt="Screen des alertes sur le dashboard datadog." class="screen">
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
<!-- Inclure Highlight.js JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
<!-- Initialiser Highlight.js -->
<script>hljs.highlightAll();</script>