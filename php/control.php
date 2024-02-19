
<?php

if (isset($_POST['submit'])) {
    

    if($_POST['pass1'] != $_POST['pass2'] ){
    $boolean=true;
}else {
    $PasswordRegularExpression="#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#";
    $UsernameRegularExpression="#[A-Za-z\d_]{4,20}$#";
    $CodeRegularExpression = "#^[A-Z][0-9]{9}$#";
    $TeleRegularExpression = "#^[06-7]{2}[0-9]{8}$#";

    $PassordRegularExpressionResult=preg_match($PasswordRegularExpression,$_POST['pass1']);
    $UsernameRegularExpressionResult=preg_match($UsernameRegularExpression,$_POST['username']);
    $CodeRegularExpressionResult=preg_match($CodeRegularExpression,$_POST['code']);
    $TeleRegularExpressionResult=preg_match($TeleRegularExpression,$_POST['tele']);
        if ($PassordRegularExpressionResult == 0) {
            
            $PasswordRegException = "le mot de passe doit contenir des Majiscule, Miniscule, caractére special ";
            $GlobalRegExc = true;            
        } if ($UsernameRegularExpressionResult == 0)  { 
            $UsernameRegException = "le Username doit respecter les expression reguliere.";
            $GlobalRegExc = true;
            
        }if ($CodeRegularExpressionResult == 0)  { 
            $CodeRegException = "le code doit respecter les expression reguliere.";
            $GlobalRegExc = true;
        }
        if ($CodeRegularExpressionResult == 0)  { 
            $CodeRegException = "le code doit respecter les expression reguliere.";
            $GlobalRegExc = true;
        }if ($TeleRegularExpressionResult == 0)  { 
            $TeleRegException = "le numéro  doit respecter les expression reguliere.";
            $GlobalRegExc = true;
        }


        if(!isset($GlobalRegExc)) {
            require('conditions.php');
       }
    
    }
}

?>
