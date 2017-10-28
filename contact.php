<!DOCTYPE html>
<html lang="fr">
<head>
		<meta charset="UTF-8"/>
		<title>Devenir coach</title>
		<link type="text/css" rel="stylesheet" href="css/csscommun.css"/>
		<link type="text/css" rel="stylesheet" href="css/csscontact.css"/>
		<link type="text/css" rel="stylesheet" href="css/cssprint.css" media="print"/>
		<link type="text/css" rel="stylesheet" href="css/cssdevice.css" media="screen and (max-width:800px)"/>
<body>

<header>
	<a href="accueil.html" title="Accueil"><img src="images/image0x.png" title="Accueil"/></a>
	<nav>
		<ul id="menu">
			<li><a href="page1.html" title="Page1">Articles</a></li>
			<li><a href="page2.html" title="Page2">Tableau</a></li>
			<li><a href="#" title="PageMédias">Médias</a>
				<ul>
					<li><a href="page3.html" title="Page3">Photos</a></li>
					<li><a href="page4.html" title="Page4">Video</a></li>
				</ul>
			</li>
			<li><a href="page3.html" title="Page3">Photos</a></li>
			<li><a href="page4.html" title="Page4">Video</a></li>
			<li><a href="liens.html" title="Liens">Liens</a></li>
			<li><a href="contact.html" title="Contact">Contact</a></li>
		</ul>
	</nav>
</header>


<?php


$html = '';
$nom = '';
$prenom = '';
$email = '';
$tel = '';
$message = '';
$avis = '';
$boutonradio =  '';
 

if (isset($_POST['nom'])) {
	$nom = $_POST['nom'];
	if(strlen($_POST['nom'])< 1)
		$html = '<p class="error"> Le champ doit contenir au moins 2 caractères</p>';
}
if(empty($_POST['nom'])) {
	$html = '<p> Champ non rempli... </p>';
}


if (isset($_POST['prenom'])) {
	$prenom = $_POST['prenom'];
	if(strlen($_POST['prenom']) < 1)
		$html = '<p class="error"> Le champ doit contenir au moins 2 caractères</p>';
}
if(empty($_POST['prenom'])) {
	$html = '<p class= "error"> Champ non rempli... ! </p>';
} 


if(empty($_POST['email'])) {
	$html = '<p class= "error"> Champ non rempli... ! </p>';
}



if (isset($_POST['tel'])) {
	$tel = $_POST['tel'];
}


if (isset($_POST['message'])) {
	$message= $_POST['message'];
}
if(empty($_POST['message'])) {
	$html = '<p class="error"> Champ non rempli... !</p>';
} 


if (isset($_POST['avis'])) {
	$avis= $_POST['avis'];
}
if(empty($_POST['avis'])) {
	$html='<p class= "error"> Raison non sélectioné... ! </p>';
} 


if (isset($_POST['boutonradio'])) {
	$boutonradio= $_POST['boutonradio'];
}
if(empty($_POST['boutonradio'])) {
	$html='';
} 


if (count($_POST) > 0  && strlen($html) == 0) {
	$html .= '<p class="bien"> Formulaire envoyé avec ces informations :</p>' .
	'<p class="bien"> Votre nom : ' . $_POST['nom'] . ' </p>' .
	'<p class="bien"> Votre prenom : ' . $_POST['prenom'] . ' </p>' .
	'<p class="bien"> Votre e-mail : ' . $_POST['email'] . ' </p>' .
	'<p class="bien"> Votre message est : ' . $_POST['message'] . ' </p>' .
	'<p class="bien"> Votre numéro de téléphone : ' . $_POST['tel'] . ' </p>' .
	'<p class="bien"> ' . $_POST['avis'] . ' </p>' .
	'<p class="bien"> ' . $_POST['boutonradio'] . ' </p>' ;
}


?>



<section>
	<form method="POST">
		<p>
			<label for="nom">Nom :</label>
			<input type="text" name="nom" id="nom" value="<?php echo $nom ?>" placeholder="Votre nom..." required/>
		</p>
		<p>
			<label for="prenom">Prénom :</label>
			<input type="text" name="prenom" id="prenom" placeholder="Votre prénom..." value="<?php echo $prenom ?>"/>
		</p>
		<p>
			<label for="email">E-mail :</label>
			<input type="email" name="email" id="email" placeholder="Votre e-mail..." required value="<?php echo $email ?>"/>
		</p>
		<p>
			<label for="tel">Votre numéro :</label>
			<input type="tel" name="tel" id="tel" placeholder="Votre numéro (facultatif)..." value="<?php echo $tel ?>">
		</p>
		<p>
			<label for="message">Message :</label>
			<textarea name="message" id="message" placeholder="Une idée, une réaction ? Faîtes moi en part ici..." rows="10" cols="50" required value="<?php echo $message ?>"></textarea>
		</p>
		<select name="avis" id="avis">
			<option value="Un bug est présent." value="<?php echo $avis === 'bug' ? ' selected' : ''; ?>">Un bug ?</option>
			<option value="Je t'envoie ce beau formulaire pour une amelioration." value="<?php echo $avis === 'amelioration' ? ' selected' : ''; ?>">Une amélioration ?</option>
			<option value="Ce formulaire est envoyé pour une autre raison." value="<?php echo $avis === 'autre' ? ' selected' : ''; ?>">Autre chose :)</option>
		</select>
		<p>
			<label for="boutonradio1">Toute première visite ?</label>
			<input type="radio" name="boutonradio" id="boutonradio1" value="C'est ma toute première visite. :)" checked value="<?php echo $boutonradio ?>"/>
			<label for="boutonradio2">Un habitué ?</label>
			<input type="radio" name="boutonradio" id="boutonradio2" value="Je suis un habitué." value="<?php echo $boutonradio ?>"/>
		</p>
		<p>
			<input type="submit" value="Envoyer"/>
		</p>
	</form>
</section>


<?php
	echo $html;
?>

<?php
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			echo("$email est un email valide.");
		}
		else {
			echo("$email est un email non-valide.");
		}
	}
?>



<footer>
	<div>
		<p>Le site a été conçu par <strong>Maxime Golfier </strong>du <em>groupe 4</em>.</p>
	</div>
</footer>

</body>
</html>
