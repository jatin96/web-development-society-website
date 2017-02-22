// JavaScript Document
function validate_frontend()
	{
	var form = document.forms['Sign-Up'];
	var name = document.getElementById('name');
	var regno=document.getElementById('regno');
	var year=document.getElementById('year');
	var mobile = document.getElementById('mob');
	var email=document.getElementById('email');
	
	var pass = document.getElementById('pass');
	
	 var phoneno = /^\d{10}$/;
	 var regisno = /^\d{8}$/;
	 var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(name.value.replace(/\s/g, '') == "")
	{
		alert("Name can't be empty");
		return false;
	}
	else if(regno.value.replace(/\s/g, '') == "")
	{
		alert("Registration number can't be empty");
		return false;	
	}
	else if(!regno.value.match(regisno))
	{
		alert("Not a valid registration Number");
     return false;
	}
	
	 else if(year.value.replace(/\s/g,'')== "")
	 {
		alert('year field empty');
		return false;
	}
	else if(!mobile.value.match(phoneno))
  {
      alert("Not a valid Phone Number");
     return false;
  }
	else if(!(email.value.match(mailformat)))
{
alert("You have entered an invalid email address!");
return false;
}
else if(pass.value.replace(/\s/g,'')== ""){
		alert('Password empty');
		return false;
	}
	else
		return true;	
}
