<?php
/**
 * Created by PhpStorm.
 * User: chalomberdah
 * Date: 29/10/2018
 * Time: 17:59
 */
function getbillets()
{

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=blog1;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur de connexion à la base de donnée : ' . $e->getMessage());
    }


    $requete = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, "%d/%c/%Y à %Hh%imin%Ss") as date_fr, DATE_FORMAT(date_creation, "%c/%d/%Y at %Hh%imin%Ss") as date_en FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

    return $requete;
}