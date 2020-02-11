function formValidation()  
{  
var first = document.registration.first;  
var last = document.registration.last;  
var address = document.registration.address;  
var email = document.registration.email; 
var phone = document.registration.address; 

if(allLetter(first))
 {
	 if(allLetter(last))
	 {
		 if(alphanumeric(address))
		 {
			if(ValidateEmail(email))
			{
				if(allnumeric(phone))  
		 		{
				}
			}
		 }
	 }
 }
 return false;
}


function allLetter(first)  
{   
  var letters = /^[A-Za-z]+$/;  
  if(first.value.match(letters))  
    {  
		return true;  
	}  
  else  
	{  
		alert('First name must have alphabet characters only');  
		first.focus();  
		return false;  
    }  
} 


function allLetter(last)  
{   
  var letters = /^[A-Za-z]+$/;  
  if(last.value.match(letters))  
    {  
		return true;  
	}  
  else  
	{  
		alert('Last name must have alphabet characters only');  
		last.focus();  
		return false;  
    }  
}  
 
function allnumeric(phone)  
{  
	var passid_len = phone.value.length;  
	if (passid_len == 0 ||passid_len >10)  
	{  
		alert("Phone Number must have 10 digits");  
		passid.focus();  
		return false;  
	} 
	else 
	{
		var numbers = /^[0-9]+$/;  
		if(phone.value.match(numbers))  
		{  
			return true;  
		}  
		else  
		{  
			alert('PHONE NUMBERS must have numeric characters only');  
			phone.focus();  
			return false;  
		} 
	}
}  

function alphanumeric(address)  
{   
	var letters = /^[0-9a-zA-Z\s,'-]+$/;  
	if(uadd.value.match(letters))  
		{  
			return true;  
		}  
	else  
		{  
			alert('User address must have alphanumeric characters only');  
			address.focus();  
			return false;  
		}  
}  
  
function ValidateEmail(email)  
{  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(email.value.match(mailformat))  
	{  
		return true;  
	}  
	else  
	{  
		alert("You have entered an invalid email address!");  
		email.focus();  
		return false;  
	}  
} 

