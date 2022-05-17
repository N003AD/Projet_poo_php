<?php
// 1- Inclure le fichier de la classe
require_once("../models/Personne.php");
require_once("../models/User.php");
require_once("../models/AC.php");
// 2- Créer OBjet ou instanciation
  // $pers1= new Personne(); 
// Apppel méthode de la classe nommée le constructeur
// 3- Donner un état a un objet
// -> : opérateur de portée d'instance(objet)
// $pers1-> Interface de la classe
// 

$ac=new AC(); 
$ac->setRole("ROLE_AC"); 

