<?php 

setcookie("User_user", NULL, -1);
setcookie("User_mail", NULL, -1);
setcookie("User_password", NULL, -1);

header('Location: index.php');

?>