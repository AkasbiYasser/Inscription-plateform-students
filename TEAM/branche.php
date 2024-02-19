


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

	<?php
session_start();
if(isset($_SESSION['username'])){

?>
	<div class ="premierpage">
		<div class="content2">
			<div class="banner"><a href="#"><img src="image/logofssm.png" class="logofssm" alt="logo fssm"></a></div>
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="exp">
			<center>
				<button class="btn1"><span><a style="text-decoration: none; color: white;" href="http://localhost/PROJECT/team-mate/filiere/R2SI.php">R2SI</a></span></button>
				<button class="btn1"><span><a style="text-decoration: none; color: white;" href="http://localhost/PROJECT/team-mate//filiere/GI.php">GI</a><br></span></button>
				<button class="btn1"><span><a style="text-decoration: none; color: white;" href="http://localhost/PROJECT/team-mate/filiere/DW.php">DW</a></span></button>
				<button class="btn1"><span><a style="text-decoration: none; color: white;" href="http://localhost/PROJECT/team-mate//filiere/DS.php">DS</a></span></button></div><br>
				<button class="btndet" style="margin-left: 850px;"><span><a style="text-decoration: none; color: white;" href="logout.php">Se Deconnecter</a></span></button>
			</center>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br>
	</div>
	<?php

}else {
	header('Location: espace_admin.php');
}
?>

</body>
</html>