<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>NGO Thanh Tam</title>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Dosis:300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
<script type="text/javascript" src="pop.js"></script>
</head>

<body>

		<div id="fix">

		<button id="but_accueil" class="menu" onclick="pop('accueil', this)">
			<h1>Accueil</h1>
		</button>

		<!-- <button id="but_productions" class="menu" onclick="pop('productions', this)">
			<h1>Productions</h1>
		</button> -->

		<button id="but_compétences" class="menu" onclick="pop('compétences', this)">
			<h1>Compétences</h1>
		</button>

		<button id="but_hobbies" class="menu" onclick="pop('hobbies', this)">
			<h1>Hobbies</h1>
		</button>

		<button id="but_contact" class="menu" onclick="pop('contact', this)">
			<h1>Contact</h1>
		</button> </div>

		<div id="accueil" class="page">
			<img src="img/mona.jpg" id="pp">
			<h2>Présentation</h2>
			<p class="ac">Informations générales
				<br>
				<br>Nom : NGO
				<br>Prénom : Tam
				<br>Âge : 16 ans
				<br>
			</p>
			<p class="ac">Actuellement
				<br>
				<br>2019-2020 : Je passe en fin d'année un bacccalauréat scientifique SVT spécialité ISN (Informatique et Science de l'Ingénieur)
				<br> Etablissement : Lycée Robert Doisneau
			</p class="ac">

			<p class="ac">
				CV
				<br> En piece jointe le cv
			</p>

			<p class="ac">
				Lettre de motivation
			</p>
		</div>

		<div id="productions" class="page">
			<h2>Mes productions</h2>
			-V2
			-dessins ?
		</div >

		<div id="compétences" class="page">
			<h2>Diplômes</h2>
			-Brevet
			-Cambridge B1
			-Psc1
			-Conduite accompagnée
		</div>

		<div id="hobbies" class="page">
			<h2>Mes intérêts</h2>
			<div id="linko">
				<div class="bbhobbies"> <a href="#pPalma" class="bhobbies">VOYAGER</a> </div>
				<div class="bbhobbies"> <a href="#tscout" class="bhobbies">LE SCOUTISME</a> </div>
				<div class="bbhobbies"> <a href="#tmusic" class="bhobbies">LA MUSIQUE ET SPORT</a> </div>
			</div>
			
			<div class="hob">
				
				<div id="pPalma" class="center">
					<h3 id="tvoyager"> VOYAGER </h3>
				</div>

				<div id="gallery1" style="display: flex;">
					<div class="polaroid"> 
						<img src="img/StMartin.jpg" class="photopola">
						<div class="textpola">
							Saint-Martin
							<br> 2017
						</div>
					</div>

					<div class="polaroid"> 
						<img src="img/Road.jpg" class="photopola">
						<div class="textpola">
							Sur la route
							<br>2017
						</div>
					</div>
				</div>
				<div id="gallery2" style="display: flex;">
					<div class="polaroid"> 
						<img src="img/Palma.jpg" class="photopola">
						<div class="textpola">
							Palma de Mallorca, Espagne
							<br> 2019
						</div>
					</div>

					<div class="polaroid"> 
						<img src="img/Palerme.jpg" class="photopola">
						<div class="textpola">
							Palerme, Italie
							<br>2019
						</div>
					</div>

					<div class="polaroid">
						<img src="img/Oxford.jpg" class="photopola">
						<div class="textpola">
							Oxford, Angleterre
							<br>2019
						</div>
					</div>

					<div class="polaroid"> 
						<img src="img/Dinant.jpg" class="photopola">
						<div class="textpola" >
							Dinant, Belgique
							<br>2019
						</div>
					</div>
				</div>
			</div>

			<divid="tscout" class="hob">
				<div id="pScoutisme" class="center">
					<h3 > LE SCOUTISME </h3>
				</div>
				<p id="phs1"> Le scoutisme est un mouvement de jeunesse, aujourd'hui très répendu dans le monde entier. J'y suis depuis mon plus jeune âge, et cela m'a apporté énormement de connaissances techniques (faire des noeuds, s'orienter : manipuler une boussole ou même lire une carte,... ), mais aussi des valeurs comme la solidarité, le respect des autres et de la nature. 
				</p>
				<p class="phs2"> Dans ce cadre, j'ai pu réaliser un projet avec mon équipe : participer à un stage de surveillance de feu de forêt à Marseille. Nous avons donc mené plusieurs missions telles que l'emballage de cadeaux durant la période de noël, la vente de galette des rois ou de crêpe faites de nos propres mains, afin de récolter assez de d'argent pour fincancer notre projet . Ces préparatifs ont dévoloppé mon autonomie ainsi que mon travail en groupe. 
				</p>
				<div style="display: flex;">
					<p id="phs3">Dans ce cadre, j'ai pu réaliser un projet avec mon équipe : participer à un stage de surveillance de feu de forêt à Marseille. Nous avons donc mené plusieurs missions telles que l'emballage de cadeaux durant la période de noël, la vente de galette des rois ou de crêpe faites de nos propres mains, afin de récolter assez de d'argent pour fincancer notre projet . Ces préparatifs ont dévoloppé mon autonomie ainsi que mon travail en groupe.
					</p>
					<div id="polaroidmarseille">
						<img src="img/pMarseille.jpg" class="photopola">
						<div class="textpola" >
								Marseille, France
								<br>2019
						</div>
					</div>
				</div>
				<div>
						Sur place nous étions chargés de 3 différentes missions :
				</div>
				<div style="display: flex;">
					<p class="missions">
						VIGIE
					</p>
					<p class="missions">
						PATROUILLE
					</p>
					<p class="missions">
						POSTE DE COORDINATION
					</p>
				</div>
			</div>
				
			<div class="hob">
				<div id="pMusic" class="center">
					<h3 id="tmusic"> LA MUSIQUE <br>ET LE SPORT </h3>
				</div>
				<p>
					A l'âge de 6 ans j'ai été initié à la musique avec 4 années de piano, avec à côté des cours de solfège. J'ai ensuite enchaînée avec quelques années de guitare pour apprendre les bases. Malgré l'arrêt des des heures de cours en conservatoire, j'ai continué l'apprentissage de mon côté, avec la possibilité de me concentrer sur les points qui m'intéressent plus.
				</p>
				<p class="phs2">
					En parallèle j'ai pratiqué toutes sortes d'activités sportives en club ou en loisir, en passant par des sports plus artistiques, comme la danse (contemporaine, classique et modern-jazz), la gymnastique ryhtmique synchronisée, ou des sports de combat (viet vo dao), et bien d'autre sports (escalade, gymnastique, badminton)
				</p>
				<p>
					Mais le sport le plus marquant pour moi est le parapente, proposé par l'association sportive du lycée. Suite à des entraînements pour apprendre à gonfler la voile, avec des petits vols au niveau d'une butte en région parisienne, j'ai eu l'opportunité de participer à un stage d'une semaine en Normandie, lors duquel j'ai effectué mon premier grand vol à 180m de hauteur, d'une durée de 10/15 minutes.
				</p>
				<div style="display: flex;">
					<p class="phs2">
						Cette expérience m'a apporté beaucoup d'autonomie, puisque nous sommes seuls dans les airs avec notre voile, c'est à nous de la diriger, avec toutefois l'aide de moniteurs avec lesquels on communique par radio. Cela m'a aussi appris à garder mon sang-froid sous-pression.
					</p>
					<video controls width="35%">
						<source src="img/parapentevid.mp4" type="video/mp4">
					</video>
				</div>
			</div>
		</div>

		<div id="contact" class="page">
			<h2>Me contacter</h2>
			<div id="pcontact"> 
				<br> - Numéro : 07 83 79 99 51 
				<br> - email : tam.ngo.030128@gmail.com
				<br> - github : ttamngo
			</div>
		</div>

</body>

</html>