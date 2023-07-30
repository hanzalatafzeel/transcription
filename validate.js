
email = document.getElementById("signup-email");
password = document.getElementById("signup-password");
email_error = document.getElementById("email-error");
password_error = document.getElementById("password_error");

email.onkeyup = function () {
	var emailpattern = '^[^@\\s]+@[^@\\s]+\\.[^@\\s]+$';
	if(email.value.match(emailpattern)) {  
	  email_error.classList.remove("is-visible");
	} else {
	  email_error.classList.add("is-visible");
	}
}

password.onkeyup = function () {
	var passwordpattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
	console.log(password_error.classList);
	if(password.value.match(passwordpattern)) {  
	  password_error.classList.remove("visible");
	  console.log("pass remove");
	} else {
	  password_error.classList.add("visible");
	  console.log("pass add");
	}
}

check = document.getElementById('accept-terms');
submit = document.getElementById('signup').classList;

check.onchange = function () {
 console.log(check.checked);
 if(check.checked){
	if(submit.contains("hide")){
		submit.remove("hide");
	}
 }
 else {
	if(!submit.contains("hide")){
		submit.add("hide");
	}
 }
}