<?php
session_start();
if (isset($_POST['Envoyer'])){
    $C = $_POST['codeA'];
    $E = $_POST['Email'];
    $M = $_POST['Motdepasse'];
    $dbhost = 'localhost';
$dbname = 'allocation_chambre';
$dbuser = 'root';
$dbpswd = '';
$db = new PDO(" localhost=$dbhost;allocation_chambre=$dbname", $dbuser, $dbpswd);


$sqp= "SELECT * FROM administrateur WHERE codeA='$C'";
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