<?php
if (isset($_POST['delete'])) 
{
    $id_etudiant= $_POST['IDE'];


 $db= new PDO('$dbhost = 'localhost', $dbname = 'allocation_chambre', $dbuser = 'root',$dbpswd = ');


 $sqc = "DELETE FROM etudiant WHERE IDE = $id_etudiant";
 $fab=$db->query($sqc);
 
 if ( $fab) {
    
    header('Location: affichage.php');
   echo "Supprimer avec succes";
} else {
    echo "L'ID n'existe pas";
}
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="le_css.css">
 </head>
 <body>
 <div id="page1">
 <img src="photo_2023-02-26_03-38-37.jpg">
    <div id="logo">
        <img src="photo_2023-02-26_03-36-11.jpg"alt="non disponible"width="200px"height="100px">
        <div id="div1">
       
            <ul>
                <li> <a href="indexaccueil.php"> ACCEUIL</a></li>
                <li> <a href="service.php"> SERVICES</a></li>
                <li> <a href="index1.php">CONTACTS</a></li>
                <li> <a href="index2.php"> A PROPOS</a></li> 
            </ul>
            <input placeholder="RECHERCHE" type="search">
         </div>
    
    </div>
    <div id="login">
        <ul>
            
        <li><a href="inscrire.php"><strong><em>s'inscrire</em></strong></a></li>
        <li><a href="identifier.php"><strong><em>s'identifier</em></strong></a></li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br><br><br><br><br>
    <div id="dei">
 <form method="post" action="">
    <label for=""><font color="beige"> Identifiant de l'étudiant à supprimer :</font> </label>
    <input type="text" name="IDE"value="IDE">
    <button type="submit"name="delete"value="delete">Supprimer l'étudiant</button>
</form>
</div>
    <br><br><br><br>
 </div>
  
 </body>
 </html>