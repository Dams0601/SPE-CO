/* Signup form string lenght check */
document.querySelector('#submit').addEventListener('click', function(e){
    if(document.getElementById("password").value.length > 3 && document.getElementById("mail").value.length > 3 && document.querySelector('#confirm_password').value==document.querySelector('#password').value){
		document.getElementById("form").submit();
	}
	else{
		alert("Les coordonées entrées sont erronées.");
	}
})