
<?php
require('../inc/db_con.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $username = $_POST['username'];
 $password = $_POST['password'];

 $requet = "select username,pass from etudiant where username='$username'";
 $res = $db->query($requet);
 $data= $res->fetch();

 if ($res->fetch() != null) {
    $username_exist=false;

 }else {
    if ($data['username'] == $username) {
        if ($data['pass'] == hash("sha512",$password)) {
             session_start();
             $_SESSION['username']=$username;
             $_SESSION['pass']=$password;
             header('Location: info_etu.php');

        }else {
        $password_exist=false;
        }
    }else {
        $username_exist=false;
    }

 }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/styl2.css" rel="stylesheet">
    <script src="js/main.js"></script>
    <link rel="icon"  href="image/favicon.ico">
    <title>Login</title>
</head>
    <?php
	include('nav.php');
	?>
<body  >
	<div class ="premierpage">
		<div class="content">
            <div class="banner"><a href="#"><img src="image/logofssm.png" class="logofssm" alt="logo FSSM"></a></div>
            <?php	if (!isset($username_exist) && !isset($password_exist)) {

            ?>
            <dialog id="myDialog" class="myalog" open>
			<div class ="stdial">
			<img src="image/c2.png" class="igdialo" alt="etudiant">
		    <div><h2 class="dich1">Bienvenue dans Espace login d'Etudiant</h2>
            <p class="dicp1" >Mme/Mr,tu dois Entrer votre Nom d'utilisateur et votre mot passe <br><br> afin d'accéder à vos informations.<br><br>
            <span class="remarq">REMARQUE : CETTE PAGE VOUS PERMET DE VISUALISER VOS INFORMATIONS.<br><br> SI VOUS VOULEZ MODIFIER VOUS DEVEZ CONTACTER VOTRE ADMINISTRATEUR.</span></p></div></div>
            <button onclick="closeDialog()" id="cancel1">Close</button>
            </dialog>

            <?php }   ?>
            <div id="container">
            <form action="  <?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <h1 style="color:white; font-size:45px; margin-left:120px;"><font face="Monospace">Connexion</font></h1>
                <label><b style="color:white;font-size:20px;"><font face="Monospace">Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                <?php
                    if(isset($username_exist)){
                     echo '<small id="telelHelp"  class="form-text myred text-center text-muted"><font face="times new roman" color=#dc3545 size=4px> le username est incorrecte ! </font></small>';
                        }
                    ?>
                    </br>
                <label><b style="color:white;font-size:20px;"><font face="Monospace">Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                </br>
                <?php
                    if(isset($password_exist)){
                     echo '<small id="telelHelp" style {  text-align: center !important;  } class="form-text text-center myred text-muted"><font face="times new roman" color=#dc3545 size=4px> le mot de passe est incorrecte ! </font></small>';
                        }
                    ?>
                <input type="submit" id='submit' value='LOGIN' >

            </form>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>



</body>
</html>
