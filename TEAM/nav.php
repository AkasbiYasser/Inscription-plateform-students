<html lang="en">
<head>
    <meta charset="UTF-8">
	<link href="css/style.css" rel="stylesheet">
    <script src="js/main.js"></script>
</head>
<body>


<div class="navWrapper">
	<div class="boxContainer" id="box" onclick="showNavi();">
		<div class="box">
			<div class="one"></div>
			<div class="two"></div>
			<div class="three"></div>
		</div>
	</div>

	<div id="nav">
		<div class="box2" onclick="hideNavi();">
			<div class="four"></div>
			<div class="five"></div>
        </div>
        <div class="navContainer">
			<nav>
				<ul>
					<div><li><a id="homeIcon" href="http://localhost/PROJECT/team-mate/accueil.php"></a></li><div id="iconLabel">Accueil</div></div>
					<div><li><a id="servicesIcon" href="http://localhost/PROJECT/team-mate/espace_admin.php"></a></li><div id="iconLabel">Administration</div></div>
					<li><a id="contactIcon" href="http://localhost/PROJECT/team-mate/espace_etudiant.php" onclick="showContact();"></a><div  id="iconLabel2">Etudiant</div></li>
				</ul>
			</nav>
		</div>
	</div>
	</body>
</div></html>