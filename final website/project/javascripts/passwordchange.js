// JavaScript Document
function password_change()
{
	var form = document.forms['changepassword'];
	var newpass=document.getElementById('newpassword');
	var cpass=document.getElementById('cpassword');
	if((newpass.value.replace(/\s/g,'')== "")||(cpass.value.replace(/\s/g,'')== ""))
	{
		alert("Password empty");
		return false;
	}
	/*else if(!(newpass==cpass))
	{
		alert("Password Mismatch");
		return false;
	}*/
	else
		return true;
	
}