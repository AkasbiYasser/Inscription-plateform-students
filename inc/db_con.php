<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=ecole;charset=utf8','root','');
}catch(Exception $e){
    die ('error'.$e->getMessage);

}
?>