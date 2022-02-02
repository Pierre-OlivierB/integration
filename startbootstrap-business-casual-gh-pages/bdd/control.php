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
$exec= $res->execute(array(":pseudo" => $pseudo,":comment"=>$comment));

if ($exec) {
    echo 'Données ajoutées';
}
else{
    echo "Echec de l'opération d'insertion";
} 
//affichage base de données
$select = 'SELECT * FROM commentaire;';
try {
   $sth = $connec->query($select);
   if ($sth ===false) {
    die("Erreur");
    }
} catch(PDOException $exc){
    echo $exc->getMessage();
}

}

?>