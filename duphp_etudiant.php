<?php  
session_start();
if (isset($_POST['VALIDER'])){
    $A = $_POST['code'];
    $B = $_POST['email'];
    $D = $_POST['motdepasse'];
    $dbhost = 'mysql-projet1-php.alwaysdata.net';
$db= new PDO('mysql:host=mysql-projet1-php.alwaysdata.net;dbname=projet1-php', '303709_test', 'Laye-makhtar');
$sqp= "SELECT * FROM etudiant WHERE code='$A' AND motdepasse = '$D'";
$result= $db->prepare($sqp);
$result->execute();

if($result->rowCount() > 0)
{
    header("Location: affichage.php");

}
else
{ 
    echo "information incorrect";
}

}
?>