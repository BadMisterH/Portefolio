<?php 

$bdd = new PDO('mysql:host=localhost;dbname=utilisateur', 'root', '');
$sql = 'SELECT * FROM use';

$stmt = $bdd->query($sql);

foreach($stmt as $a){
    var_dump($a);
}




?> 