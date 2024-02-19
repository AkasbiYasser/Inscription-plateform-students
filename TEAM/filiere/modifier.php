<?php
 $username = $_GET['id'];
 require('../../inc/db_con.php');
 $select = 'select * from etudiant where username="'.$username.'"';
 $sth = $db->query($select);
$data = $sth->fetch();
if (isset($_POST['valider'])){
  $delete = 'delete from etudiant where username="'.$_POST['username'].'"';
  $sth = $db->prepare($delete);
  $sth->execute();


 $currentDir = getcwd();
 $uploadDirectory = "../../php/files/";

 $errors = []; // Store all foreseen and unforseen errors here

 $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

 $fileName = $_FILES['photo']['name'];
 $fileSize = $_FILES['photo']['size'];
 $fileTmpName  = $_FILES['photo']['tmp_name'];
 $fileType = $_FILES['photo']['type'];
 $string=explode('.',$fileName);
 $fileExtension = strtolower(end($string));

 $uploadPath = $currentDir . $uploadDirectory . basename($fileName);







    if (! in_array($fileExtension,$fileExtensions)) {
        $errors[] = "il faut UpLoader une image !!";
        $img=true;
    }

    if ($fileSize > 4000000) {
        $errors[] = "il faut UpLoader une image avec une taille au plus 4MB !";
        $img=true;
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {

                    if (!isset($img)) {
                        require('insert.php');
                            }

                }

        } else {
            $errors[]=
             "un erreur a été reconnu, contactez l'admin pour résoudre cette probléme.";
             $img=true;
        }
                    if (!isset($global_test)) {
                    $query="insert into etudiant(nom,prenom,cin,code,dateN,fil,ville,photo,tele,email,username,pass) values (?,?,?,?,?,?,?,?,?,?,?,?)";
                            $req = $db->prepare($query);
                           $res = $req->execute(array($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['code'],$_POST['date'],$_POST['Fil'],$_POST['ville'],$fileName,$_POST['tele'],$_POST['email'],$_POST['username'],$_POST['pass1']));

                           if ($res) {
                            header('Location: ../espace_admin.php');

                           }
                         }



}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <script src="../../js/bootstrap.js"></script>
</head>



<body background="../../img/bg.jpg">

  <div class="container form-group text-center ">
<form action="modifier.php" method="POST" enctype="multipart/form-data">
    <label for="exampleInputEm"> <font face="times new roman" color=#002752 size=5px> Nom :</font> </label>
    <input type="text" required  name="nom" class="form-control" id="exampleInputEm" value="<?php echo $data['nom'] ?>" >

    <label for="exampleInputEm"><font face="times new roman" color=#002752 size=5px>Prenom :</font></label>
    <input type="text" required  name="prenom" class="form-control" id="exampleInputEm" value="<?php echo $data['prenom'] ?>">

    <label for="exampleInputEm"> <font face="times new roman" color=#002752 size=5px> CIN:</font></label>
    <input type="text" required   name="cin" class="form-control" id="exampleInputEm" value="<?php echo $data['cin'] ?>">


    <label for="exampleInputEm"> <font face="times new roman" color=#002752 size=5px> Code Massar :</font></label>
    <input type="text" class="form-control"  name="code"  id="exampleInputEm" value="<?php echo $data['code'] ?>">

    <label for="exampleInputEm">  <font face="times new roman" color=#002752 size=5px>Date de Naissance :</font></label>
    <input type="date" required class="form-control"  name="date"  id="exampleInputEm" value="<?php echo $data['dateN'] ?>">
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
    <select required name="ville" id="city-select" select="<?php echo $data['ville'] ?>" >
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
    <input type="file" required id="photo" name="photo" value="<?php echo "../../php/files/".$data['photo'] ?>" />

    </br>
    </div>
    </br>
    <label for="exampleInputEm">  <font face="times new roman" color=#002752 size=5px>Télé </font></label>
    <input required type="number"  name="tele" required class="form-control" id="exampleInputEm" aria-describedby="teleHelp" value="0<?php echo $data['tele'] ?>">
    <small id="telelHelp"  class="form-text text-muted">  <font face="times new roman" color=#002752 size=4px>entrer le numéro de télephone sans (+212) ! </font></small>


    <label for="exampleInputEmail1">  <font face="times new roman" color=#002752 size=5px> Email address</font></label>
    <input type="email" class="form-control"  name="email" id="exampleInputEmail1" value="<?php echo $data['email'] ?>">


    <label for="exampleInputEm">  <font face="times new roman" color=#002752 size=5px>Username</font></label>
    <input type="text"  class="form-control"  name="username" id="exampleInputEm" value="<?php echo $data['username'] ?>">


    <label for="exampleInputPassword1" >  <font face="times new roman" color=#002752 size=5px>Password</font></label>
    <input type="password" required  class="form-control"  name="pass1" id="exampleInputPassword1">

    <label for="exampleInputPassword1">  <font face="times new roman" color=#002752 size=5px>Re-entre Password</font></label>
    <input type="password" required class="form-control"  name="pass2" id="exampleInputPassword2" aria-describedby="passeHelp" >

    </br>

    <button type="submit" name="valider" class="btn btn-primary">Valider</button>

    </form>

    </div>

</body>
</html>