<?php

// Classe contenant les différentes requêtes liées au CRUD.

// Include des autres fichiers .php
include_once("Constantes.php"); // Inclut une seule fois le fichier Constantes.php
include_once("DbConnect.php"); // Inclut une seule fois le fichier DbConnect.php
include_once("Client.php"); // Inclut une seule fois le fichier Client.php


require_once('DbConnect.php');


$method = $_SERVER['REQUEST_METHOD'];

//read
if($method == "GET") 
{

    $sql = "SELECT * from client";


    $resultat = mysqli_query($connec, $sql);


    $rows = array();

    // Si il y a au moins 1 résultat
    if(mysqli_num_rows($resultat) > 0)
    {
        while($r = mysqli_fetch_assoc($resultat))
        {

            array_push($rows, $r);
        }
    }



    $res = $rows;



//create
}
else if($method == "POST" && $_POST['METHOD'] == "create") 
{

    $ncli = $_POST['NCLI'];
    $nom = $_POST['NOM'];
    $adresse = $_POST['ADRESSE'];
    $localite = $_POST['LOCALITE'];
    $cat = $_POST['CAT'];
    $compte = $_POST['COMPTE'] ? $_POST['COMPTE'] : null;


    $sql = "INSERT INTO client VALUES ('" . $ncli . "','" . $nom . "','" . $adresse . "','" . $localite . "','" . $cat . "','" . $compte . "')";

    if($connec_post->query($sql) === true)
    {

    }
    else
    {
        var_dump("error" . mysqli_error($connec));
    }


    $text = file_get_contents('journal.txt');


    $horaire = date('Y-m-d H:i:s');
            

    $text .= "\n" . $horaire . " : insertion client " . $ncli;
            
    file_put_contents('journal.txt', $text);


    $connec_post->close();
}
//delete
else if($method == "POST" && $_POST['METHOD'] == "delete")
{

    $ncli = $_POST['NCLI'];

    // Supression du client
    $sql = "DELETE FROM client WHERE NCLI = '" . $ncli . "'";

    if($connec_post->query($sql) === true)
    {

    }
    else
    {
        var_dump("error" . mysqli_error($connec));
    }


    $text = file_get_contents('journal.txt');


    $horaire = date('Y-m-d H:i:s');
            

    $text .= "\n" . $horaire . " : suppression client " . $ncli;
            

    file_put_contents('journal.txt', $text);


    $connec_post->close();
}
//upadate
else if($method == "POST" && $_POST['METHOD'] == "update") 
{

    $ncli = $_POST['NCLI'];
    $nom = $_POST['NOM'];
    $adresse = $_POST['ADRESSE'];
    $localite = $_POST['LOCALITE'];
    $cat = $_POST['CAT'];
    $compte = $_POST['COMPTE'] ? $_POST['COMPTE'] : null;

    // Modification des valeurs selon le client
    $sql = "UPDATE client SET NOM = '" . $nom . "', ADRESSE = '" . $adresse . "', LOCALITE = '" . $localite . "', CAT = '" . $cat . "', COMPTE = '" . $compte . "' WHERE NCLI = '" . $ncli . "'";

    if($connec_post->query($sql) === true)
    {

    }
    else
    {
        var_dump("error" . mysqli_error($connec));
    }


    $text = file_get_contents('journal.txt');


    $horaire = date('Y-m-d H:i:s');
            

    $text .= "\n" . $horaire . " : modification client " . $ncli;
            

    file_put_contents('journal.txt', $text);


    $connec_post->close();
}


?>