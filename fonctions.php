<?php

function validerMotDePasse($motDePasse)
{
    // Vérifier la longueur du mot de passe
    if (strlen($motDePasse) < 6 || strlen($motDePasse) > 10) {
        echo "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }
    else{
    // Définir le salt statique
    $salt = "ABC1234@";

    // Concaténer le salt au mot de passe
    $motDePasseAvecSalt = $motDePasse . $salt;

    
    // faire l'encodage
    
    $encodeMotDePasse= sha1($motDePasseAvecSalt);
    

    // Afficher le salt et le mot de passe concaténé et le mot de passe encodé
    echo"Salt : $salt <br>";
    echo"Mot de passe concaténé : $motDePasseAvecSalt <br>";
    echo"Mot de passe encodé :    $encodeMotDePasse <br>";


    // Tester le mot de passe 
    $motDePasseTest = "MotDePasseTestABC1234@";
    if ($motDePasseAvecSalt === $motDePasseTest) {
        return "Mot de passe correct !";
    } else {
        return "Mot de passe incorrect. Accès refusé.";
    }
    }
}

?>
