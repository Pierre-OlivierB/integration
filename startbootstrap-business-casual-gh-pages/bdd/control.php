<!-- //INSERT INTO `commentaires` (`pseudo`, `texte`, `id`) VALUES
//('x', 'test de comentaire', '1'); -->
<?php
try {
$dbhost = 'localhost';
$dbname='hr';
$dbuser = 'root';
$dbpass = '';
$connec = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
}catch (PDOException $e) {
echo "Error : " . $e->getMessage() . "
";
die();
}
$pseudo=$_POST['pseudo'];
$comment=$_POST['comment'];
/* Execute a prepared statement by passing an array of values */
$sql = "INSERT INTO `commentaires` (`pseudo`, `texte`, `id`) VALUES
        (:pseudo,:comment)"
$res = $pdo->prepare($sql);
$exec= $res->execute(array(":pseudo" => $pseudo,":comment"=>$comment));

if ($exec) {
    echo 'Données ajoutées';
}
else{
    echo "Echec de l'opération d'insertion";
}
?>