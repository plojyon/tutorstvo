<!DOCTYPE html>
<html lang="sl">
	<head>
		<title>Tutorstvo GL</title>
		<meta charset="UTF-8">
		<meta name="description" content="Uradna stran Tutorstva GL">
		<meta name="keywords" content="Ledina, Tutorji, Tutorcki, Tutorstvo, GL">
		<meta name="author" content="plojyon, Yon Ploj, Domen Vogrin, BKING"> <!-- ne pozabite se dodati kot avtor! -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="media/favicon.png">
		<link rel="stylesheet" type="text/css" href="index.css"/>



		<!-- font z ikonami -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

		<!-- google fonti -->
		<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Helvetica+Neue%7COpen+Sans:800" crossorigin="anonymous">-->


		<!--
		Primeri ikon:
			Hisica (home) 				<i class="fa fa-home"></i>
			Grid (podoben logotipu GL) 	<i class="fas fa-th"></i>
			Casopis (novice) 			<i class="far fa-newspaper"></i>
			Skupnost (kdo smo)			<i class="fas fa-users"></i>
			Lupa (isci tutorja)			<i class="fas fa-search"></i>
			Cloveck+ (postani tutor)	<i class="fas fa-user-plus"></i>
			Graduation cap (tutorstvo) 	<i class="fas fa-graduation-cap"></i>
		-->

		<script>
			console.log("----------------------------------------------------------------------------------------------------------------------------");
			console.log("Hey!\nImas izkusnje z razvijanjem spletnih strani?\n\nPridruzi se tutorski ekipi in pomagaj pri razvoju prav te!");
			console.log("Projekt je open-source, najdes ga na githubu: https://github.com/plojyon/tutorstvo \nce pa zelis pomagati, se oglasi v kabinetu pri Anji Vidmar in z veseljem te bomo sprejeli!");
			console.log("Ne pozabi, da s sodelovanjem pri razvoju dobis tudi ostale tutorske privilegije, npr. koncni izlet in tocke za naj razred!");
			console.log("Pricakujemo te!");
			console.log("	-Ekipa tutorjev Ledine");
			console.log("----------------------------------------------------------------------------------------------------------------------------");
		</script>
	</head>
	<!--
	Hey!
	Imas izkusnje z razvijanjem spletnih strani?

	Pridruzi se tutorski ekipi in pomagaj pri razvoju prav te!

	Projekt je open-source, najdes ga na githubu: https://github.com/plojyon/tutorstvo.
	Ce pa zelis pomagati, se oglasi v kabinetu pri Anji Vidmar in z veseljem te bomo sprejeli!

	Ne pozabi, da s sodelovanjem pri razvoju dobis tudi ostale tutorske privilegije, npr. koncni izlet in tocke za naj razred!

	Pricakujemo te!
		-Ekipa tutorjev Ledine
	-->
	<body>
		<header>
			<a href="http://www.ledina.si"><img id="logo" class="desktop" src="media/ledina.jpg" alt="GL" height="150"></a>
			<div class="spacer"></div>
			<nav>
				<div class="spacer"></div>
				<ul>
					<li><a class="selected" href="index.php"><i class="fa fa-home"></i>Domov</a></li>
					<!--<li><a href="https://www.ledina.si/" target="_blank"><i class="fas fa-th"></i>GLedina</a></li>-->
					<!--<li><a href="#novice"><i class="far fa-newspaper"></i>Novice</a></li>-->
					<li><a href="#faq"><i class="fas fa-users"></i>Kdo&nbsp;smo</a></li>
					<li class="desktop"><a href="prijava.php"><i class="fas fa-search"></i>Poišči&nbsp;tutorja</a></li>
					<!--<li><a href="prijava/tutor/index.php"><i class="fas fa-user-plus"></i>Postani&nbsp;tutor</a></li>-->
					<li><a href="eTutor/login.php"><i class="fas fa-sign-in-alt"></i>Prijava&nbsp;v&nbsp;eTutor</a></li>
				</ul>
				<div class="spacer"></div>
			</nav>
		</header>
		<section id="quick">
			<h1 id="title"><i class="fas fa-graduation-cap"></i>Tutorstvo&nbsp;GL</h1>
			<p id="description">Prva pomoč proti slabim ocenam!<br>Zastonj inštrukcije od sodijakov, sovrstnikov, ki najbolje poznajo prav tvoje profesorje.<br>Izboljšave vidne že po enem samem srečanju!</p>
			<a id="signup" href="prijava.php">pOiščI TUtoRjA</a>
		</section>
		<main>
			<section id="stats">
				<article id="statistika">
					<h3 class="article title">Prednosti tutorstva</h3>
					<table class="features">
						<tr>
							<td><i class="fas fa-users"></i></td>
							<td><p>Poznamo tvoje profesorje, hodimo po istih stopnicah in lepimo žvečilke pod iste klopi kot ti. Nihče ti ne bo mogel tako razložiti snovi kot tvoji sovrstniki, ki se soočamo z enakimi problemi.</p>
						</tr>
						<tr>
							<td><i class="fas fa-chart-line"></i></td>
							<td><p>Ocene in znanje so se do sedaj vedno izboljšali. Znanja vam sicer ne vbijemo v glavo, vam pa postrežemo z razlago in namigi za uspešnejše učenje tudi v prihodnje.</p>
						</tr>
						<tr>
							<td><i class="fas fa-hand-holding-usd"></i></td>
							<td><p>Tutorstvo je popolnoma zastonj. To dijaki delamo prostovoljno, z veliko pripravljenostjo in dobro voljo.</p>
						</tr>
						<tr>
							<td><i class="fas fa-comment-slash"></i></td>
							<td><p>Kar se zgodi pri tutorjih, ostane pri tutorjih. Med nami res velja popolna anonimnost. Zanima nas le predmet, snov in profesor, saj se tako najlažje že vnaprej pripravimo na razlago. Informacije o uri se ne delijo niti med tutorji.</p>
						</tr>
					</table>
				</article>
				<aside>
					<section class="floaty">
						<h3>Ne verjamete? Poglejte statistiko</h3>
						<p>Tutorstvo vam lahko močno koristi. V dokaz smo vam pripravili nekaj statističnih podatkov:</p>
						<ul>
							<li>več kot 60 opravljenih ur v šolskem letu 2017/2018</li>
							<li>na voljo že več kot 20 tutorjev <!--TODO: link na pridruzi se! --></li>
							<li>več kot 100 izboljšanih ocen v šolskem letu 2017/2018</li>
							<li>na voljo tutorji za vse predmete na Gimnaziji Ledina, pa tudi za tiste, ki jih ni</li>
						</ul>
						<p>Po naši <!--<a href="TODO: link do rezultatov ankete">-->tutorski raziskavi<!--</a>--> smo ugotovili, da marsikdo (> 90%) misli, da je v preteklosti že potreboval tutorja,
						a za tutorstvo še ni vedel. Tako so bili prisiljeni poiskati pomoč pri inštrukcijah (al pa popravcih, nimaš kej), česar pa tebi ni treba.</p>
					</section>
				</aside>
			</section>





			<svg class="top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
				<polygon points="100 0 100 10 0 10" />
			</svg>

			<section class="quoteShow">
				<!-- Quotes -->
				<div class="quote">
					<button onclick="plusDivs(-1, true)">&#10094;</button>
						<img src="media/shakespeare.jpg" class="round">
						<div>"To be or not to be, that is the question:
							Whether 'tis nobler in the mind to suffer
							The slings and arrows of outrageous Fortune,
							Or to take arms against a sea of troubles
							And by opposing end them. To die, to sleep .-
							No more. And by a sleep, to say we end
							The heart-ache and the thousand natural shocks
							That flesh is heir to; 'tis a consummation
							Devoutly to be wished. To die, to sleep .-"<span class="author">Shakespeare</span></div>
					<button onclick="plusDivs(+1, true)">&#10095;</button>
				</div>
				<div class="quote">
					<button onclick="plusDivs(-1, true)">&#10094;</button>
						<img src="media/jatan.jpg" class="round">
						<div>"Kaj je smisu tega da se ucim kemijo ce mi bo Cebinka itak dala 5??"<span class="author">Yon, 2.g</span></div>
					<button onclick="plusDivs(+1, true)">&#10095;</button>
				</div>
				<div class="quote">
					<button onclick="plusDivs(-1, true)">&#10094;</button>
						<img src="media/anonymous.png" class="round">
						<div>"Tutorstvo mi je zelo pomagalo priti do moje zelo zeljene petice! Zdaj mi mami koncno spet da za jest. Hvala tutorckii!!!"<span class="author">Francka, 2.g</span></div>
					<button onclick="plusDivs(+1, true)">&#10095;</button>
				</div>
				</div>
				<div class="quote">
					<button onclick="plusDivs(-1, true)">&#10094;</button>
						<img src="media/novoselec.png" class="round">
						<div>"3  . 1 4 1 5 9 2 6 5 3 5 8 9 7 9 3 2 3 8 4 6 2 6 4 3 3 8 3 2 7 9 5 0 2 8 8 4 1 9 7 1 6 9 3 9 9 3 7 5 1 0 5 8 2 0 9 7 4 9 4 4 5 9 2 3 0 7 8 1 6 4 0 6 2 8 6 2 0 8 9 9 8 6 2 8 0 3 4 8 2 5 3 4 2 1 1 7 0 6 7 9 8 ..."<span class="author">Matej Novoselec</span></div>
					<button onclick="plusDivs(+1, true)">&#10095;</button>
				</div>
				</div>
				<div class="quote">
					<button onclick="plusDivs(-1, true)">&#10094;</button>
						<img src="media/anonymous.png" class="round">
						<div>"Pisalca, pisalca!!"<span class="author">Tanja, Tatjana, karkol ze</span></div>
					<button onclick="plusDivs(+1, true)">&#10095;</button>
				</div>

				<script>
					var slideIndex = Math.floor(Math.random() * 3) + 1;
					showDivs(slideIndex);
					var interval = setInterval(function() { plusDivs(+1, false) }, 5000);

					function plusDivs(n, manual) {
						showDivs(slideIndex += n);
						if (manual) clearInterval(interval);
					}

					function showDivs(n) {
						var i;
						var x = document.getElementsByClassName("quote");
						if (n > x.length) {slideIndex = 1}
						if (n < 1) {slideIndex = x.length}
						for (i = 0; i < x.length; i++) {
							x[i].style.display = "none";
						}
						x[slideIndex-1].style.display = "flex";
					}
				</script>


			</section>

			<svg class="bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
				<polygon points="100 0 100 10 0 10" />
			</svg>

			<br><br>



			<section id="faq">
				<article>
					<h3 class="article title">FAQ</h3>
					<details>
						<summary>Kako izgleda učna ura?</summary>
						<p>Tutor in dijak se običajno dobita v kabinetu 19 pri šolski psihologinji <!--dr. prof.--> Anji Vidmar. Nato skupaj odideta v nek prostor, kjer lahko
						nemoteno delata. Običajo je ta prostor kakšna prazna učilnica, lahko pa tudi dnevna soba pred knjižnico ali dijaški kotiček.
						Ura običajno traja med petnajst in petinštirideset minut, lahko se konča že po petih minutah, lahko pa se zavleče tudi v več ur. V tem
						primeru se običajno dijak in tutor dogovorita za nov datum, saj je marsikdaj težko več ur zapored zbrano spremljati snov, ki ti ne leži najbolje.</p>
					</details>
					<details>
						<summary>Ali lahko pridem s prijateljem?</summary>
						<p>Običajno tutoriramo le posameznike, če pa si želite priti s prijateljem, ne bo nikakršnih problemov.</p>
					</details>
					<details>
						<summary>Kakšen odnos imata dijak in njegov tutor?</summary>
						<p>Tutor in dijak sta v prijateljskem odnosu. Vsak pozna svoje naloge, a vseeno se med sabo dostikrat pojavijo tudi nova
						prijateljstva. V vsakem primeru pa dijak na koncu odide z boljšim razumevanjem in znanjem, tutor pa včasih tudi s kakšno čokolado od dijaka.</p>
					</details>
					<details>
						<summary>Kaj dela tutor?</summary>
						<p>Tutor pomaga ostalim dijakom pri stvareh, ki gredo njemu bolje kot ostalim. Včasih se tudi zgodi, da dijak ve stvari, ki jih ne ve
						niti tutor, a s tem ni nič narobe, saj nihče ni popoln<!-- Razen mene-->. Tutorji tako nudimo razlago snovi, hkrati pa dajemo namige
						za nadaljno učenje. Naš cilj je tako ta, da vse tutorirance pripravimo do stopnje, ko nas ne potrebujejo več.</p>
					</details>
					<details>
						<summary>Zakaj postati tutor?</summary>
						<p>Biti tutor je zelo častna naloga. Plačani nismo, a marsikdaj se nam polepša dan, ko izvemo, da je nekdo, ki smo ga tutorirali, dobil oceno, ki si
						jo je želel, oziroma še višjo.</p>
						<p>Tutorji smo zelo povezana skupina in se redno srečujemo. Ker nihče ni popoln, si na teh srečanjih med drugim predajamo izkušnje, zato da bi imel vsak
						tutor čim več izkušenj pri dijakih, ki nekaj resnično ne gre.</p>
					</details>
					<script>
						// da se usi FAQji odprejo po defaultu
						Array.from(document.querySelectorAll('details')).forEach(function(obj, idx) {
							obj.open = true;
						});
					</script>
				</article>
			</section>

			<section id="footer">
				<article id="kje_smo">
					<h3 class="article title">Kje nas najdete?</h3>
					<p>Najdete nas lahko v kabinetu 19 (prvo nadstropje, konec južnega hodnika). Tam se prijavite kot tutoriranci (dijaki) ali tutorji. V primeru, da nas v kabinetu ni, se lahko
					obrnete na učečega profesorja in ta vam bo poskusil pomagati kar najbolje zna.</p>
				</article>

				<section id="signature">
					<p>Stran so postavili <a href="eTutor/login.php">tutorji</a> Gimnazije Ledina.</p>
					<!-- TODO: tuki damo link, ki te vrze na github oz. na neko stran z navodili kako pomagat delat stran -->
					<p><a class="mobile" href="#">Nazaj gor</a></p>
				</section>
			</section>
		</main>
	</body>
</html>
