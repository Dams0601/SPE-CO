<?php

    // Putting all that infos into some cookies ;) yummy
    $user=$_POST['user'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];

    setcookie("User_user",$user, time()+3600*24*12);
    setcookie("User_mail",$mail, time()+3600*24*12);
    setcookie("User_password",$password, time()+3600*24*12);

    // Préparation du mail - problème avec envoi de mail
    $destinataire = $mail;
    $sujet = "Naissance d'un nouvel utilisateur" ;
    $entete = "From: inscription@votresite.com" ;
    
    // Message
    $message = 'Bienvenue sur Spe&CO,
    Nous sommes ravis que vous ayez adhéré à notre site.
    
    ---------------
    Ceci est un mail automatique, Merci de ne pas y répondre.';
    
    
    mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail

    // Redirect to the login page
    header("Location: ../html/connexion.html");
    exit;
?>
