<html>
<head>
    <meta charset="UTF-8">
	<link href="css/style.css" rel="stylesheet">
	<link rel="icon"  href="image/favicon.ico">
    <script src="js/main.js"></script>
    <title>Inscription</title>
</head>
    <?php
	include('nav.php');
	?>
<body  >
	<div class ="premierpage">
		<div class="content">
			<div class="banner"><a href="http://localhost/PROJECT/team-mate/accueil.php"><img src="image/logofssm.png" class="logofssm" alt="logo fssm"></a></div>
			<dialog id="myDialog" class="myalog" open>
			<div class ="stdial">
			<img src="image/c2.png" class="igdialo" alt="etudiant">
		    <div><h2 class="dich">Bienvenue dans Espace Etudiant</h2>
			<p class="dicp">Bonjour je m'appel Yasser Je t'accompagne pendant votre circulation dans espace étudiant.<br><br><span class="dicli">- Si tu déjà inscrit cliquez sur le bouton ETUDIANT.</span><br><br>
			<span class="dicli"> - Si tu es un nouveau étudiant cliquez sur le bouton NOUVEAU.</span></p></div></div>
            <button onclick="closeDialog()" id="cancel">Close</button>
            </dialog>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<form action="">
			<button class="btn"><span><a style="text-decoration: none; color: white;" href="http://localhost/PROJECT/php/inscription_etudiant.php">Nouveau</a></span></button></form>
			<br><br>
			<form action="l">
			<button class="btn"><span><a style="text-decoration: none; color: white;" href="http://localhost/PROJECT/team-mate/login_etudiant.php">Etudiant</a></span></button></form>
			<br><br><br><br><br><br><br><br><br><br>
			</div>
		</div>
	</div>



</body>
</html>