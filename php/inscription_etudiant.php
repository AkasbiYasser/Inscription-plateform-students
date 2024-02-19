<?php
require('control.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
</head>



<body background="../img/bg.jpg" style="background-size:  100% 100%">
  <div class="container form-group text-center">
    <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  enctype="multipart/form-data">
    <label for="exampleInputEm"> <font face="times new roman" color=#002752 size=5px> Nom :</font> </label>
    <input type="text" required  name="nom" class="form-control" id="exampleInputEm" >
    
    <label for="exampleInputEm"><font face="times new roman" color=#002752 size=5px>Prenom :</font></label>
    <input type="text" required  name="prenom" class="form-control" id="exampleInputEm">

    <label for="exampleInputEm"> <font face="times new roman" color=#002752 size=5px> CIN:</font></label>
    <input type="text" required   name="cin" class="form-control" id="exampleInputEm">
  
    <?php
    if(isset($cin_exist)){
        echo '<small id="telelHelp" class="form-text myred text-muted"><font face="times new roman" color=#dc3545 size=4px>le cin déja utilisé !!!!!</font></small>';
        
        
    }
    ?>

    <label for="exampleInputEm"> <font face="times new roman" color=#002752 size=5px> Code Massar :</font></label>
    <input type="text" class="form-control"  name="code"  id="exampleInputEm">
  
    <?php
    if(isset($code_exist)){
    
        echo '<small id="telelHelp"  class="form-text myred text-muted"><font face="times new roman" color=#dc3545 size=4px>le code massar déja utilisé !!!!!</font></small>';
        }
        if (isset($CodeRegException)) {
            echo '<small id="telelHelp"  class="form-text myred text-muted"><font face="times new roman" color=#dc3545 size=4px>'.$CodeRegException.'!!</font></small>';
          }
    ?>
    <label for="exampleInputEm">  <font face="times new roman" color=#002752 size=5px>Date de Naissance :</font></label>
    <input type="date" required class="form-control"  name="date"  id="exampleInputEm" min=<?php echo (date("Y")-24)."-01"."-01";  ?> max=<?php echo (date("Y")-18)."-01"."-01";  ?>>
    <div class="costum text-left">
     </br>
    <p>Filiére : </p>
    
    <div>
    <input type="radio" id="rssi" name="Fil" value="LP R2SI" checked>
    <label for="rssi">LP R2SI</label>
    </div>

    <div>
    <input type="radio"  id="GI" name="Fil" value="Génie Informatique" >
    <label for="GI">Génie Informatique</label>
    </div>
    <div>
    <input type="radio" id="LPDW" name="Fil" value="LP Developpement Web">
    <label for="LPDW">LP Developpement Web</label>
    </div>

    <div>
    <input type="radio" id="DS" name="Fil" value="Data Science">
    <label for="DS">Data Science</label>
    </div>
    </div>
    <div class="select">
    </br>
    <label for="city-select">Choix de ville :</label>
    </br>
    <select required name="ville" id="city-select">
    <option value="">--choisir une ville--</option>
    <option value="Agadir">Agadir</option>
    <option value="Béni Mellal">Béni Mellal</option>
    <option value="Casablanca">Casablanca</option>
    <option value="El Jadida">El Jadida</option>
    <option value="Fès">Fès</option>
    <option value="Kénitra">Kénitra</option>
    <option value="Khémisset">Khémisset</option>
    <option value="Khouribga">Khouribga</option>
    <option value="Marrakech">Marrakech</option>
    <option value="Meknès">Meknès</option>
    <option value="Mohammédia">Mohammédia</option>
    <option value="Oujda">Oujda</option>
    <option value="Rabat">Rabat</option>
    <option value="	Safi">Safi</option>
    <option value="Salé">Salé</option>
    <option value="Tanger">Tanger</option>
    <option value="Taourirt">Taourirt</option>
    <option value="	Taza">Taza</option>
    <option value="Témara">Témara</option>
    <option value="	Tétouan">Tétouan</option>
    </select>
    </br>
    </br>
    <label for="photo">  <font face="times new roman" color=#002752 size=5px>Upload de photo : </font></label>   </br>
    <input type="file" required id="photo" name="photo" />

    <?php
    if(isset($img)){
        if ($img==true) {        
        foreach ($errors as $error) {
            echo $error . "\n";
        }
    }}
    ?>

    

    </br>
    </div>
    </br>
    <label for="exampleInputEm">  <font face="times new roman" color=#002752 size=5px>Téléphone </font></label>
    <input required type="numeric"  name="tele" required class="form-control" id="exampleInputEm" aria-describedby="teleHelp">
    <small id="telelHelp"  class="form-text text-muted">  <font face="times new roman" color=#002752 size=4px>entrer le numéro de télephone sans (+212) ! </font></small>
    <?php
    if(isset($tele_exist)){
       
        echo '<small id="telelHelp"  class="form-text myred text-muted"><font face="times new roman" color=#dc3545 size=4px> numéro de téléphone déja utilisé !!</font></small>';
    }  if (isset($TeleRegException)) {
            echo '<small id="telelHelp"  class="form-text myred text-muted"><font face="times new roman" color=#dc3545 size=4px>'.$TeleRegException.'!!</font></small>';
          }
    ?>
    
    
    <label for="exampleInputEmail1">  <font face="times new roman" color=#002752 size=5px> Email address</font></label>
    <input type="email" class="form-control"  name="email" id="exampleInputEmail1">
    <?php
    if(isset($email_exist)){
       
        echo '<small id="telelHelp"  class="form-text myred text-muted"><font face="times new roman" color=#dc3545 size=4px> email déja utilisé !!</font></small>';
    }
    ?>
    
    <label for="exampleInputEm">  <font face="times new roman" color=##002752 size=5px>Username</font></label>
    <input type="text"  class="form-control"  name="username" id="exampleInputEm">
    <?php
    if(isset($username_exist)){
        echo '<small id="telelHelp"  class="form-text myred text-muted"> <font face="times new roman" color=#dc3545 size=4px>le username déja utilisé !! </font></small>';
    }
    if (isset($UsernameRegException)) {
        echo '<small id="telelHelp"  class="form-text myred text-muted"><font face="times new roman" color=#dc3545 size=4px>'.$UsernameRegException.'!!</font></small>';
      }
    ?>

    <label for="exampleInputPassword1" >  <font face="times new roman" color=#002752 size=5px>Password</font></label>
    <input type="password" required  class="form-control"  name="pass1" id="exampleInputPassword1">
 
    <label for="exampleInputPassword1">  <font face="times new roman" color=##002752 size=5px>Re-entre Password</font></label>
    <input type="password" required class="form-control"  name="pass2" id="exampleInputPassword2" aria-describedby="passeHelp">
    <?php
    if(isset($boolean)){
        if ($boolean==true) {
        echo '<small id="telelHelp"  class="form-text myred text-muted"><font face="times new roman" color=#dc3545 size=4px>les mots de passe ne sont pas identique !!!!!</font></small>';
        unset($_POST['pass1']);
        } }
        if (isset($PasswordRegException)) {
            echo '<small id="telelHelp"  class="form-text myred text-muted"><font face="times new roman" color=#dc3545 size=4px>'.$PasswordRegException.'!!</font></small>';
          }
    ?>
    <label for="input_serie_de_bac">  <font face="times new roman" color=##002752 size=5px>série de bac</font></label>
    <input type="text" required class="form-control"  name="serie" id="input_serie_de_bac">
    <div class="select">
    </br>
    <label for="city-select"><font face="times new roman" color=##002752 size=5px>Choix de mention :</font></label>
    </br>
    <select required name="mention" id="mention-select">
    <option value=""><font face="times new roman" color=##002752 size=5px>mention de bac </font></option>
    <option value="passable">passable</option>
    <option value="assez bien">assez bien</option>
    <option value="bien">bien</option>
    <option value="tres_bien">trés bien</option>
    </select>
        </div>
        </br>
    <label for="input_serie_de_bac">  <font face="times new roman" color=##002752 size=5px>note de premiére année</font></label>
    <input type="number" required class="form-control"  name="note1" id="input_serie_de_bac" min=0 max=20 step=".01">

    <label for="input_serie_de_bac">  <font face="times new roman" color=##002752 size=5px >note de deuxiéme année</font></label>
    <input type="number" required class="form-control"  name="note2" id="input_serie_de_bac" min=0 max=20 step=".01">
   
    </br>
    <div display-align>
    <button type="reset" class="btn btn-danger">Vider</button>
    <button type="submit" name="submit" class="btn btn-primary">Valider</button>
    </div>
    </form>

    </div>

</body>
</html>