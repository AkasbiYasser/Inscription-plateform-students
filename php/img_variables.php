<?php

 $currentDir = getcwd();
 $uploadDirectory = "/files/";

 $errors = []; // Store all foreseen and unforseen errors here

 $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

 $fileName = $_FILES['photo']['name'];
 $fileSize = $_FILES['photo']['size'];
 $fileTmpName  = $_FILES['photo']['tmp_name'];
 $fileType = $_FILES['photo']['type'];
 $string=explode('.',$fileName); // explode pour split selon une separateur.
 $fileExtension = strtolower(end($string));

 $uploadPath = $currentDir . $uploadDirectory;


 ?>


