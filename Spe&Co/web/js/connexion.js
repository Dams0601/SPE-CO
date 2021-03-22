document.querySelector('.connexion').addEventListener('click',function(e){
	location.href = "../html/index.html";
})

/* Signup form string lenght check */
function submit_form(){
	if(document.getElementById("password").value.length > 3 && document.getElementById("mail").value.length > 3){
		document.getElementById("form").submit();
	}
	else{
		alert("Vos identifiants ne peuvent pas être aussi court !");
	}
}