

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Contact</title>
  

</head>
<body>


  
<?php

// $mailVerf = $_GET['mail'];

include 'database.php';


if(isset($_GET['mail'])){  // isset si une valeur est nulle booelan
  if(strlen($_GET['mail']) <= 10){
     echo '<p class="alert alert-warning">Votre adresse mail est trop court</p>';
  }else{
  }
}

if(isset($_GET['motDePasse'])){
  if(strlen($_GET['motDePasse']) <=10){
    echo '<p class="alert alert-warning">Mot de passe trop court ou pas ecris</p>';
  } 
}


?>


<form action="contact.php" method="get">

<input type="text" name="prenom" placeholder="Taper votre prenom">
<input type="text" name="nom" placeholder="Taper votre nom">
<input type="email" name="mail" placeholder="Taper votre adresse mail">
<input type="password" name="motDePasse" placeholder="Votre mot de passe">

<button type="submit">Envoie</button>


</form>



