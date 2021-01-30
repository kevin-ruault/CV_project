<?php 
	$name = "Kévin Ruault";
	$birth_date = "04/24/1994";
	$birth_date_exploded = explode("/", $birth_date);
	$age = (date("md", date("U", mktime(0, 0, 0, $birth_date_exploded[0], $birth_date_exploded[1], $birth_date_exploded[2]))) > date("md")
		? ((date("Y") - $birth_date_exploded[2]) - 1)
		: (date("Y") - $birth_date_exploded[2]));
	$profil_picture = "photo_kr.jpg";
	$page = 0;
	$studies_content = "<h3><b>CODING FACTORY BY ITESCIA</b>, Ecole de la CCI Paris IDF :&nbsp;</h3><ul><li>Oct 2021 – 2022 : Bachelor Développeur Web &amp; Mobile en alternance</li></ul><ul><li>2019 – 2020 : Bac +2 Analyste développeur d’application informatique</li></ul><p><b><br></b></p><h3><b>LYCEE LOUIS ARAGON</b>, Gisors :</h3><p>- 2012 : Baccalauréat Electrotechnique</p>";
	$experience_content = "<h3><b>MAGNY EN VEXIN : UNE HISTOIRE QUI SE CULTIVE</b></h3><p><b>DEV WEB</b></p><h6>2020 (10 semaines)</h6><ul><li>Conception, développement et optimisation d’un site web « vitrine » d’une association</li><li>Réalisation du site en Vue.js / Bootstrap</li></ul><p><br></p><h3><b>CODING FACTORY BY ITESCIA CONDUITE DE PROJETS</b></h3><p style="."text-align: right;"."><b>DEV Full Stack</b></p><h3><b></b></h3><h6>2019 – 2020</h6><ul><li>Apprentissage basé sur la Méthodologie Agile (EduSCRUM)</li><li>Conception, développement et optimisation d’un site web sur un référencement de créatures de jeu vidéo</li><li>Réalisation d’applications Android (Cinéma, Quizz)</li></ul><p><br></p><h3><b>FLEX-N-GATE </b></h3><p style="."text-align: right;"."><b>AGENT DE PRODUCTION</b></p><h6>2013 – 2019</h6><ul><li>Lead d’une équipe </li><li>Contrôle qualité et retouche sur ligne de pièces automobiles </li><li>Logistique et mise en place des approvisionnements </li><li>Peinture sur carrosserie<br></li></ul>";
	
?>

<div class="col-12 mt-3">
	<div class="row">
		<img class="col-md-2 col-sm-2" src="<?php echo "img/".$profil_picture; ?>">
		<div class="col-md-9 col-sm-7">
			<h1><?php echo $name; ?></h1>
			<h2><?php echo $age; ?> ans</h2> 
		</div>
	</div>
</div>

<div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<button type="button" class="btn btn-light" onclick="changeContent(1)">Formations</button>
				</li>
				<li class="nav-item">
					<button type="button" class="btn btn-light" onclick="changeContent(2)">Experiences</button>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Competences</a>
				</li>
			</ul>
		</div>
	</nav>
</div>

<div class="col-12" id="content">
</div>

<script type="text/javascript">
	function changeContent(numbr){
		switch(numbr) {
			case 1 :
			document.getElementById("content").innerHTML = "<?php echo $studies_content; ?>";
			break;
			case 2 :
			document.getElementById("content").innerHTML = "<?php echo $experience_content; ?>";
			break;
		}
		
	};

</script>


