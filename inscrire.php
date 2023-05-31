<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIPTION</title>
    <link rel="stylesheet"href="le_css.css"> 
</head>
<body>
    
    <div id="page1">
    <img src="photo_2023-02-26_03-38-37.jpg">
        <div id="logo">
            <img src="logo-iam-01.jpg"alt="non disponible"width="200px"height="100px">
            <div id="div1">
                <ul>
                    <li> <a href="indexaccueil.php"> ACCEUIL</a></li>
                    <li> <a href="index.php"> SERVICES</a></li>
                    <li> <a href="index1.php">CONTACTS</a></li>
                    <li> <a href="index2.php"> A PROPOS</a></li>
                    
                </ul>
                <input placeholder="RECHERCHE" type="search">
            </div>
        </div>
        <div id="login">
            <ul>
            
            <li><a href="identifier.php"><em>s'identifier</em></a></li>
            </ul>
        </div>
        <br><br>
    </div>
    
    <h1 id="rr"><strong><em> LE FORMULAIRE D'INSCRIPTION</em></strong></h1>
    <div id="formulaire">
        
        <form action="" method="post">
            <fieldset>
            <legend><font color="white">INSCRIPTION</font> </legend>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="  CODE" type="int" name="code">
            </div>
            <br>
            <br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="  NOM" type="text" name="nom">
            </div>
            <br>
            <br>
            <br><br>
            <div>
                <label for=""> </label>
                <input id="attac" placeholder="  PRENOM"  type="text" name="prenom">
            </div>
           
             <br><br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="  Email" type="email" name="email">
            </div>
            
            <br>
             <br><br><br>
            <div>
                <label for=""> </label>
                <input id="attac" placeholder="  AGE" type="int" name="age">
            </div>
            
             <br><br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="  MOT DE PASSE" type="password" name="motdepasse">
            </div>
            <br>
            <br><br><br><br>
            >
            <div>
                <button id="bouton" type="submit" name="suivant" value="suivant">SUIVANT</button>
            </div>
            <br>
            <br>
        </fieldset>
            </form>

    </div>
</body>
</html>