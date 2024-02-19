
<?php

    require('../inc/db_con.php');

                        $cin = $_POST['cin'];
                        $sql = "select cin from etudiant where cin='$cin'";
                        $res = $db->query($sql);


                        if ($res->fetch() != null) {
                            $cin_exist=true;
                            $global_test=true;
                        }

                        $code = $_POST['code'];
                        $sql = "select code from etudiant where code='$code'";
                        $res = $db->query($sql);

                        if ($res->fetch() != null) {
                            $code_exist=true;
                            $global_test=true;
                        }

                       $tele = $_POST['tele'];
                        $sql = "select tele from etudiant where tele='$tele'";
                        $res = $db->query($sql);


                        if ($res->fetch() != null) {
                            $tele_exist=true;
                            $global_test=true;
                        }


                        $username = $_POST['username'];
                        $sql = "select username from etudiant where username='$username'";
                        $res = $db->query($sql);


                        if ($res->fetch() != null) {
                            $username_exist=true;
                            $global_test=true;
                        }


                        $email = $_POST['email'];
                        $sql = "select username from etudiant where email='$email'";
                        $res = $db->query($sql);


                        if ($res->fetch() != null) {
                            $email_exist=true;
                            $global_test=true;
                        }

                        if (!isset($global_test)) {
                            try {
                                 $query="insert into etudiant(nom,prenom,cin,code,dateN,fil,ville,photo,tele,email,username,pass,serie_bac, mention_bac, annee1, annee2) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                                $req = $db->prepare($query);
                               $res = $req->execute(array($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['code'],$_POST['date'],$_POST['Fil'],$_POST['ville'],$_POST['nom'].'_'.$_POST['cin'].'.'.$fileExtension,$_POST['tele'],$_POST['email'],$_POST['username'],hash("sha512",$_POST['pass1']),$_POST['serie'],$_POST['mention'],$_POST['note1'],$_POST['note2']));

                               if ($res) {
                                session_start();
                                define ('SESSION_TIMEOUT', "550000");
                                session_set_cookie_params(SESSION_TIMEOUT);
                                $_SESSION['cin'] = $_POST['cin'];
                                header('Location:validate.php');

                               }
                            } catch (Exception $e) {
                            die($e->getMessage());
                            }

                             }


?>