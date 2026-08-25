function validation()
{
if(document.frm.fname.value=="")
{
alert('Enter your firstName')
document.frm.fname.focus();
return false;
}    
//only accept firstName as alphabetic character applied regular expression 
var fnm=/^[A-Za-z]+$/;
if(!fnm.test(document.frm.fname.value))
{
alert('Enter your FirstName only alphabetic character')
document.frm.fname.focus();
return false;
}    
if(document.frm.lname.value=="")
{
alert('Enter your lastName')
document.frm.lname.focus();
return false;
}    
//only accept firstName as alphabetic character applied regular expression 
var lnm=/^[A-Za-z]+$/;
if(!lnm.test(document.frm.lname.value))
{
alert('Enter your LastName only alphabetic character')
document.frm.lname.focus();
return false;
}    

if(document.frm.email.value=="")
{
alert('Enter your email')
document.frm.email.focus();
return false;
}    
//only accept valid email  applied regular expression 
var em=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
if(!em.test(document.frm.email.value))
{
alert('Enter your valid email address')
document.frm.email.focus();
return false;
}

// check phone
if(document.frm.phone.value=="")
{
alert('Enter your email')
document.frm.email.focus();
return false;
}    
//only accept valid phone numbers in digit
var ph=/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
if(!ph.test(document.frm.phone.value))
{
alert('Enter your valid phone numbers accept thease formate 1234567890, 123-456-7890, (123) 456-7890')
document.frm.phone.focus();
return false;
}

// check subject
if(document.frm.subject.value=="")
{
alert('Enter your subject')
document.frm.subject.focus();
return false;
}  


// check message
if(document.frm.message.value=="")
{
alert('Enter your Message')
document.frm.message.focus();
return false;
}    
//only accept only 200 character
var msg=/^[\S\s]{0,200}$/;
if(!msg.test(document.frm.message.value))
{
alert('Enter your message not more than 200 character sort it')
document.frm.message.focus();
return false;
}



}