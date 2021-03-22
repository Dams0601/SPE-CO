<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="../css/test_php.css">
		<title>PhP Project</title>
	</head>
	<body>
		<h1>Initiation au php</h1>
		<script src="../script/userlog.js"></script>
		<div>
			<?php
				$cookie_name = "user";
				$cookie_value = "Batman";
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "../cookies/");
				
				if(isset($_COOKIE[$cookie_name])) {
					echo "Bonjour " .$cookie_value. " content de vous revoir !";				
				}
				
				$user=$_POST['user_name'];
				$password=$_POST['user_password'];
				if($user == "Bruce" AND $password == "batman"){
					echo "Bonjour " .$user . " content de vous revoir !";
				}
				else{
					echo "Informations incorrectes... Redirection dans 5sec...";
					wrongInfo();
				}
			?>
		</div>
	</body>
</html>