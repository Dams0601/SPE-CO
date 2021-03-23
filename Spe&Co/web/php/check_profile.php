<?php

    # Check the informations into the cookies
    $user_enter=$_POST['user'];
    $password_enter=$_POST['password'];

    if(isset($_COOKIE["User_user"]) && isset($_COOKIE["User_password"])){
        if($_COOKIE["User_user"] == $user_enter && $_COOKIE["User_password"] == $password_enter){
            # Redirect to the index page
            header("Location: index.php");
            exit;
        }
        else {
            header("Location: ../html/connexion.html");
            exit;
        }
    }
    else{
        header("Location: ../html/inscription.html");
        exit;
    }

?>