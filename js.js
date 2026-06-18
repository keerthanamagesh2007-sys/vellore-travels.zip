// Validating the Contact Us Form

function ValidateNo( NumStr, String )
{
	for( var Idx = 0; Idx < NumStr.length; Idx ++ )
	{
		 var Char = NumStr.charAt( Idx );
		 var Match = false;

		for( var Idx1 = 0; Idx1 < String.length; Idx1 ++)
		{
		 if( Char == String.charAt( Idx1 ) )
		 Match = true;
		}

		if ( !Match )
		return false;
 	}
   	return true;
}

function validNameofPerson(name)
	{
		invalidChars = "!(),.<>?\"0123456789"
			for (i=0; i<invalidChars.length; i++)
			{
				badChar = invalidChars.charAt(i)
				if (name.indexOf(badChar,0) > -1)
			{
				return false
			}
		}
		
	return true
}

function ContactCheck1() {
	d = document.cntctus;

	if (d.FullName.value.length<2) {
	   alert("Please enter the Full Name...");
	   d.FullName.select();
	   d.FullName.focus();
           return false;
	}

	if (d.FullName.value.charAt(0) == " " ) {
	   alert("Please enter the Full Name...");
	   d.FullName.select();
	   d.FullName.focus();
           return false;
	}
	 if(!validNameofPerson(document.getElementById('FullName').value))
	{
		alert("Please enter the Full Name without numbers and special chracter.");
		d.FullName.select();
		d.FullName.focus();
		return false;
	}
	if (d.PhoneNo.value.charAt(0) == "" ) {
		alert("Please enter the Phone No...");
  		d.PhoneNo.focus();
		d.PhoneNo.select();
		return false;
        }
		
    if (!ValidateNo(document.getElementById('PhoneNo').value,'0123456789')) 
		{		 
		   alert("Please enter the Digits...");
		   d.PhoneNo.select();
		   d.PhoneNo.focus();
		   return false;
		} 

	if (d.Email.value.length<4){
		alert("Please enter your Email");
  		d.Email.focus();
		d.Email.select();
		return false;
        }
    if(d.Email.value.indexOf('@')<1){
		alert("Please note the e-mail id must have @")
		d.Email.focus();
		d.Email.select();
		return false;
	}
	
	var emaillen = d.Email.value.length;
	if(d.Email.value.lastIndexOf('.')>(emaillen-3)){
		alert("Please specify whether you belong .com or .net or .org etc...");
		d.Email.focus();
		d.Email.select();
		return false;
	}
	 
	if (d.Comments.value.length < 5) {
		alert("Please enter Your Message... ");
  		d.Comments.focus();
		d.Comments.select();
		return false;
        } 
	if (d.Comments.value.charAt(0) == " "){
		alert("Please enter Your Message... ");
  		d.Comments.focus();
		d.Comments.select();
		return false;
         }
	return true;
}

function ContactCheck() {
	d = document.cntctus;

	if (d.FullName.value.length<2) {
	   alert("Please enter the Full Name...");
	   d.FullName.select();
	   d.FullName.focus();
           return false;
	}

	if (d.FullName.value.charAt(0) == " " ) {
	   alert("Please enter the Full Name...");
	   d.FullName.select();
	   d.FullName.focus();
           return false;
	}
	
	if (d.PhoneNo.value.charAt(0) == "" ) {
		alert("Please enter the Phone No...");
  		d.PhoneNo.focus();
		d.PhoneNo.select();
		return false;
        }
		
    if (!ValidateNo(document.getElementById('PhoneNo').value,'0123456789')) 
		{		 
		   alert("Please enter the Digits...");
		   d.PhoneNo.select();
		   d.PhoneNo.focus();
		   return false;
		} 

	if (d.Email.value.length<4){
		alert("Please enter your Email");
  		d.Email.focus();
		d.Email.select();
		return false;
        }
    if(d.Email.value.indexOf('@')<1){
		alert("Please note the e-mail id must have @")
		d.Email.focus();
		d.Email.select();
		return false;
	}
	
	var emaillen = d.Email.value.length;
	if(d.Email.value.lastIndexOf('.')>(emaillen-3)){
		alert("Please specify whether you belong .com or .net or .org etc...");
		d.Email.focus();
		d.Email.select();
		return false;
	}
	 
	if (d.Comments.value.length < 5) {
		alert("Please enter Your Message... ");
  		d.Comments.focus();
		d.Comments.select();
		return false;
        } 
	if (d.Comments.value.charAt(0) == " "){
		alert("Please enter Your Message... ");
  		d.Comments.focus();
		d.Comments.select();
		return false;
         }
	return true;
}
