<?php 
 $username = $_GET['id'];
 require('../../inc/db_con.php');
 $select = 'select * from etudiant where username="'.$username.'"';
 $sth = $db->query($select);
 $data = $sth->fetch();
$fil = $data['fil'];

 $delete = 'delete from etudiant where username="'.$username.'"';
 $sth = $db->prepare($delete);
 $sth->execute();

 if ($fil == "Génie Informatique") {
    header('Location: GI.php');
 }
 if ($fil == "LP R2SI") {
    header('Location: R2SI.php');
}
if ($fil == "Data Science") {
    header('Location: DS.php');}
    
if ($fil == "LP Developpement Web") {
    header('Location: DW.php');
}





?>