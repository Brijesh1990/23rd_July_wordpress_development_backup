// login first 
function login_first()
{
 alert('Are you sure to add product in Cart Login First ?')
 window.location='index.php';    
}
// loader js 
var myVar;
function mainContent()
{
myVar=setTimeout("display()",500);    
}
function display()
{
document.getElementById("main-content").style="display:block";
document.getElementById("loader").style="display:none";    
}