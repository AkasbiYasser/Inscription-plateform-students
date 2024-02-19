<?php
            
            require('img_variables.php');

    if (! in_array($fileExtension,$fileExtensions)) {
        $errors[] = "il faut UpLoader une image !!";
        $img=true;
    }

    if ($fileSize > 4000000) {
        $errors[] = "il faut UpLoader une image avec une taille au plus 4MB !";
        $img=true;
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath.$_POST["nom"]."_".$_POST["cin"].".".$fileExtension);

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
        ?>