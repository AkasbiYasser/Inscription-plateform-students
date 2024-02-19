
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap2.css">

    <link rel="stylesheet" href="../css/all.css">
</head>

<body>
<?php 
session_start();
if(isset($_SESSION['username'])){

?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">photo</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">CIN</th>
                <th scope="col">Code Massar</th>
                <th scope="col">date de naissance</th>
                <th scope="col">Filiére</th>
                <th scope="col">ville</th>
                <th scope="col">Tele</th>
                <th scope="col">username</th>
                <th scope="col">Edit</th>
                <th scope="col" col="2">Delete</th>

            </tr>
        </thead>
        <tbody>
            <tr>
            <?php  
            require('../../inc/db_con.php');
            $requete="select * from etudiant where fil='Data Science'";
             $sth = $db->prepare($requete);
              $sth->execute();
             $sth= $sth->fetchAll(PDO::FETCH_ASSOC);
            foreach ($sth as $data) {         ?>
                <th scope="row"></th>
                <td><img class="roundedImage" src="../../php/files/<?php echo $data['photo'] ?>"></td>  
                <td><?php echo $data['nom'] ?></td>  
                <td><?php echo $data['prenom'] ?></td>  
                <td><?php echo $data['cin'] ?></td>  
                <td><?php echo $data['code'] ?></td>  
                <td><?php echo $data['dateN'] ?></td>  
                <td><?php echo $data['fil'] ?></td>  
                <td><?php echo $data['ville'] ?></td>  
                <td>0<?php echo $data['tele'] ?></td>  
                <td><?php $username = $data['username']; echo $data['username'] ?></td>  
                <td><a href=<?php echo '"modifier.php?id='.$username.'"' ?>><i class="fas fa-edit"></i></a></td>
                <td><a href=<?php echo '"supprimer.php?id='.$username.'"' ?> class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                
             </tr>
            <?php } ?>
        	<?php 

}else {
	header('Location: ../espace_admin.php');
}
?>   
        </tbody>
    </table>
</body>
