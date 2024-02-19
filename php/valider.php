

<html lang="en">
<head>
    <link rel="stylesheet" href="../css/validation.css">
  <link rel="stylesheet" href="../css/main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info</title>
</head>
<body>
<?php
include('nav.php');
?>
<body>
<div class="table-title">
<h3>Data Table</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Champ</th>
<th class="text-left">Description</th>
</tr>
</thead>
<tbody class="table-hover">

  <?php
    require('../inc/db_con.php');


    session_start();
   // define ('SESSION_TIMEOUT', "550000");
    $cin=$_SESSION['cin'];
    // session_set_cookie_params(SESSION_TIMEOUT);


    $sql = "select * from etudiant where cin='$cin'";
     $res = $db->query($sql);
     $data=$res->fetch();
 ?>
 <tr>
<td class="text-left">Photo</td>
<td class="text-left"><img src="../php/files/<?php echo $data['photo']; ?>" width="370px" height="450" alt="photo d'étudiant(e)" ></td>
</tr>

<tr>
<td class="text-left">Username</td>
<td class="text-left"><?php   echo $data['username']   ?></td>
</tr>

<tr>
<td class="text-left">Nom : </td>
<td class="text-left"><?php   echo $data['nom']   ?></td>
</tr>

<tr>
<td class="text-left">Prenom : </td>
<td class="text-left"><?php   echo $data['prenom']   ?></td>
</tr>

<tr>
<td class="text-left">Date de Naissance</td>
<td class="text-left"><?php   echo $data['dateN']   ?></td>
</tr>

<tr>
<td class="text-left">Cin</td>
<td class="text-left"><?php   echo $data['cin']   ?></td>
</tr>

<tr>
<td class="text-left">Code Massar</td>
<td class="text-left"><?php   echo $data['code']   ?></td>
</tr>

<tr>
<td class="text-left">Filiére</td>
<td class="text-left"><?php   echo $data['fil']   ?></td>
</tr>

<tr>
<td class="text-left">ville</td>
<td class="text-left"><?php   echo $data['ville']   ?></td>
</tr>

<tr>
<td class="text-left">Téle</td>
<td class="text-left"><?php   echo $data['tele']   ?></td>
</tr>

<tr>
<td class="text-left">Email Adresse</td>
<td class="text-left"><?php   echo $data['email']   ?></td>
</tr>



</tbody>
</table>


  </body>
</body>
</html>
