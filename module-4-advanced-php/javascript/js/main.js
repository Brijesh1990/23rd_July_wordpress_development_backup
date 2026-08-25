// subtotal of products when change qty
function subTotal()
{
var price=document.getElementById("price").value;
var qty=document.getElementById("qty").value;    
var subtotal=price*qty;
document.getElementById("tot").innerHTML=+subtotal;
}

// load loader create a function 
function mainFunction()
{
 setTimeout(() => {
       loaderApp()
 }, 5000);
}

function loaderApp()
{
 document.getElementById("loader").style="display:none";
 document.getElementById("mainPage").style="display:block";   
}

// create a function for check eligibility for vote 
function CheckVote()
{
 
    var age=parseInt(document.getElementById("age").value); //type casting 
    var res=age>=18?"I am eligible for vote":"i am not eligible for vote";
    document.getElementById("para").innerHTML=res;
}