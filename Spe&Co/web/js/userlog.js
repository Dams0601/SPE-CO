/* Signin button redirection */
function goToSignIn(){
    window.location = "../html/signin.html";
}

/* Signup form string lenght check*/
function submit_form(){
	if(document.getElementById("password").value.length > 2 && document.getElementById("mail").value.length > 2){
		document.getElementById("form").submit();
		console.log(document.getElementById("password").value.length);
		console.log(document.getElementById("mail").value.length);
	}
	else{
		alert("Vos identifiants ne peuvent pas être aussi court !");
	}
}
