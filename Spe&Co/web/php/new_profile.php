<?php

    # Putting all that infos into some cookies ;) yummy
    $user=$_POST['user'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];

    setcookie("User_user",$user, time()+3600*24*12);
    setcookie("User_mail",$mail, time()+3600*24*12);
    setcookie("User_password",$password, time()+3600*24*12);

    # Redirect to the login page
    header("Location: ../html/connexion.html");
    exit;
?>
