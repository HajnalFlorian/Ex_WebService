<?php 
//include des fichier
include_once("Constantes.php"); 
include_once("DbOperations.php");
include_once("Client.php"); 


try
{
    // Connexion à la DB avec les constantes de Constantes.php
    $connec = mysqli_connect(SERVEUR, USER, MDP, DB);
    $connec_post = new mysqli(SERVEUR, USER, MDP, DB);
}
catch(Exception $e)
{
    var_dump($e->getMessage());  // Envoie du message d'erreur
}   




 ?>