<?php
// Paramètres de connexion à la base de données
$dbhost = 'localhost';
$dbname = 'allocation_chambre';
$dbuser = 'root';
$dbpswd = '';
// Connexion à la base de données
$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

// Exemple de requête SELECT
$query = "SELECT * FROM ma_table";
$result = mysqli_query($conn, $query);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Traitez les données ici
        echo $row['colonne1'] . ' ' . $row['colonne2'] . '<br>';
    }
} else {
    echo 'Erreur de requête : ' . mysqli_error($conn);
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>
