<?php  
require_once("fonctions.PHP");
$validerMotDePasse=validerMotDePasse($_POST['motDePasse']);
echo$validerMotDePasse;


?>