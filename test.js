function validate()
{
	var user = document.getElementById("txtUsername").value;
	var password = document.getElementById("pwdPass1").value;
	var password2 = document.getElementById("pwdPass2").value;
	var gender = document.getElementById("rdoGender").value;
	var email = document.getElementById("txtEmail").value;
	var atpos = email.indexOf("@");
	var dotpos = email.lastIndexOf(".");
	
	if(user==""||user==null)
	{
		alert("Please fill out the username");
		return false;
	}
	else if(password==""||password==null)
	{
		alert("Please fill out the password");
		return false;
	}
		else if(email==""||email==null)
	{
		alert("Please fill out the E-mail");
		return false;
	}
	else if( password.length < 8)
	{
		alert("Password shoud not be less than 8 letters");
		return false;
	}
	else if(password != password2)
	{
		alert("The two password are not same");
		return false;
	}
//This code is retrieved from http://www.w3schools.com/js/js_form_validation.asp
	else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
	{
		alert("Not a valid e-mail address");
		return false;
	}
	else
	{
		alert("Sign up successful! Thank you! Please login.");
	}
}