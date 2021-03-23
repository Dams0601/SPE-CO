<?php

    # Check the informations into the cookies
    $user_enter=$_POST['user'];
    $password_enter=$_POST['password'];

    if($_COOKIE["User_user"] == $user_enter && $_COOKIE["User_password"] == $password_enter){
        echo "yes boi !";
    }
    else{
        echo "lmao lol no";
    }

    # Redirect to the index page
    header("Location: index.php");
    exit;
?>