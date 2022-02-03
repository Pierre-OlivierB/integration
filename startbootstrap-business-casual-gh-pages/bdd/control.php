<!-- //INSERT INTO `commentaires` (`pseudo`, `texte`, `id`) VALUES
//('x', 'test de comentaire', '1'); -->
<?php
$dbhost = 'localhost';
$dbname='commentaires';
$dbuser = 'root';
$dbpass = '';
if (isset($_POST['ok'])) {
try {
$connec = new PDO("mysql:host=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
// $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the error mode to exceptions
// $connec->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); // run real prepared queries
}catch (PDOException $e) {
echo "Error : " . $e->getMessage() . "
";
die();
}

    $pseudo=$_POST['pseudo'];
    $comment=$_POST['comments'];
    $message="$pseudo <br> $comment";

/* Execute a prepared statement by passing an array of values */
$sql = "INSERT INTO commentaire (pseudo, texte) VALUES
        (:pseudo,:comment)";
$res = $connec->prepare($sql);
$res->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$res->bindValue(':comment',$comment, PDO::PARAM_STR);
$res->execute();

if ($res) {
    echo 'Données ajoutées';
}
else{
    echo "Echec de l'opération d'insertion";
} 
//affichage base de données


}
try {
    $connec = new PDO("mysql:host=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
    // $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the error mode to exceptions
    // $connec->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); // run real prepared queries
}catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "
    ";
    die();
}

$select =('SELECT * FROM commentaire;');     
    try {
        $sth = $connec->query($select);
        if ($sth ===false) {
            echo("Error.");
        }
        
    } catch(PDOException $e){
        echo "Il n'y a pas encore de commentaire.";
    }
?>