
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="application/x-pdf; charset=UTF-8">
    <link rel="stylesheet" href="../php/css/mystyle.css">
    <title>Informations</title>
</head>
<body>

<?php

require('../inc/db_con.php');
session_start();
if (!isset($_SESSION["username"])) {
header('Location: ../php/inscription_etudiant.php');
}
$username = $_SESSION["username"];
$requette='select * from etudiant where username="'.$username.'"';

$stm=$db->query($requette);
if(($students = $stm->fetch(PDO::FETCH_ASSOC))==null)header('Location: ../php/inscription_etudiant.php');


?>
<script type="text/javascript" src="3ef8862c-ad94-11eb-8b25-0cc47a792c0a_id_3ef8862c-ad94-11eb-8b25-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:594px;height:841px;border-style:outset;overflow:hidden">
<table class="first">
    <tr > 
        <td><?php echo '<img src="'."../php/files/".$students["photo"].'" alt="photo de profile" class="profile" >'; ?>  </td>
        <td> <span class="cls_003">Faculté des Sciences Semlalia - Marrakech</span>
        <span class="cls_004">Formulaires de demande d'inscription</span></td>
    </tr>
  </table>
    <table  class="second">

    <tr> <td colspan="2" align="center" ><span class="cls_005">Numéro de la demande: <?php echo $students["num_demande"]; ?></span> </td> </tr>
    <tr> 
    <td>Nom</td><td><?php echo $students["nom"]; ?></td>
   </tr>
   <tr> 
    <td>Prénom</td><td><?php echo $students["prenom"]; ?></td>
   </tr>
   <tr> 
    <td>Date de naissance</td><td><?php echo date('Y-m-d', strtotime($students["dateN"])); ?></td>
   </tr>
   <tr> 
    <td>Carte Nationale d'Identité</td><td><?php echo $students["cin"]; ?></td>
   </tr>
   <tr> 
   <tr> 
    <td>ville</td><td><?php echo $students["ville"]; ?></td>
   </tr>
   <tr> 
    <td>Adresse électronique</td><td><?php echo $students["email"]; ?></td>
   </tr>
   <tr> 
    <td>Numéro de téléphone</td><td><?php echo $students["tele"]; ?></td>
   </tr>
   
   <tr> 
    <td>Mention du bac</td><td><?php echo $students["mention_bac"]; ?></td>
   </tr>
   <tr> 
    <td>Code Nationnal de l'Etudiant</td><td><?php echo $students["code"]; ?></td>
   </tr>
   <tr> 
    <td>Série du bac</td><td><?php echo $students["serie_bac"]; ?></td>
   </tr>
   <tr> 
    <td>statut actuel</td><td>Etudiant</td>
   </tr>
   <tr> 
    <td>Filière demandée</td><td><?php echo $students["fil"]; ?></td>
   </tr>
   <tr> 
    <td>Date de la demande</td><td><?php echo date('Y-m-d',strtotime($students["date_insc"])); ?></td>
   </tr>

</table>
  </br>
<table class="third">
    <tr>
        <th class="bleu">Année</th>
        <th class="bleu">Réusite</th>
        <th class="bleu">Moyenne</th>
        <tr>
            <td>Année 1</td>
            <td><?php if($students["annee1"]>=10) echo "Oui"; else echo "Non"; ?></td>
            <td><?php echo $students["annee1"]; ?></td>
          
        </tr>
        <tr>
            <td>Année 2</td>
            <td> <?php if($students["annee2"]>=10) echo "Oui"; else echo "Non"; ?> </td>
            <td> <?php echo $students["annee2"]; ?></td>
            
        </tr>
        <tr><td colspan="3" align="center"><span class="cls_005">Filière Demandée: <?php echo $students["fil"]; ?> </span></td></tr>
    </tr>
</table>
  </br>
  <div class="last">
<div style="margin-right: 8%; text-align: justify"><span class="cls_008">Je déclare sur l’honneur que toutes les informations mentionnées sontexactes. Toute fausse déclaration entrainera automatiquementl’annulation de ma demande.</span></div>
  </br>
<div><span class="cls_008" style="margin-left:70%">Lu et approuvé</span></div>
</br></br></br></br></br>
<div><span class="cls_002">1/1</span></div>
</div></div>

</body>
</body>
</html>
