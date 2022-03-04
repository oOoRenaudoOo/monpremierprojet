<?php

// Importation des fichiers utiles

include ("common/functions.php");
include ("common/data.php");



var_dump($stagiaires); // affiche les logs de la variable $stagiaires




/*
permet d'afficher le contenu du tableau stagiaires
verifier l'existence de la variable $stagiaires avant le foreach()
*/

foreach ($stagiaires as &$value) { // A l'aide la variable $value je lis le contenu du sous_tableau avec sa clé nom ou prenom

  // j'utilise la function affiche pour afficjher le resultat a l'ecran
  // verifier l'existence de $value["nom] et $value["prenom"]
  affiche ($value["nom"], $value["prenom"], 25);

}


?>