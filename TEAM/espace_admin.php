<?php
require('../inc/db_con.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $username = $_POST['username'];
 $password = $_POST['password'];

 $requet = "select username,password from administrateurs where username='$username'";
 $res = $db->query($requet);
 $data= $res->fetch();

 if ($res->fetch() != null) {
    $username_exist=false;

 }else {
    if ($data['username'] == $username) {
        if ($data['password'] == hash("md5",$password)) {
             session_start();
             $_SESSION['username']=$username;
             $_SESSION['password']=$password;
             header('Location: branche.php');

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
    <link rel="icon"  href="image/favicon.ico">
    <script src="js/main.js"></script>
    <title>Admin Login</title>
</head>
    <?php
	include('nav.php');
	?>
<body  >
	<div class ="premierpage">
		<div class="content2">
			<div class="banner"><a href="#"><img src="image/logofssm.png" class="logofssm" alt="logo FSSM"></a></div>
			<div id="container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <h1 style="color:white; font-size:45px; margin-left:120px;"><font face="Monospace">Connexion</font></h1>
                <label><b style="color:black;font-size:25px;"><font face="Monospace">Nom d'utilisateur</font></b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required></br>
                <?php
                    if(isset($username_exist)){
                     echo '<small id="telelHelp"  class="form-text myred text-center text-muted"><font face="times new roman" color=#dc3545 size=4px> le username est incorrecte ! </font></small>';
                        }
                    ?>
                    </br>
                <label><b style="color:black;font-size:25px;"><font face="Monospace">Mot de passe</font></b></label>
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
                    </br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>



</body>
</html>