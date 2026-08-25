// create a function for clear input values after click on clear button
function clrButton()
{
document.getElementById("result").value="";   
}

// create a function for slice result values 
function slcData()
{
var res=document.getElementById("result").value;
var slc=res.slice(0,-1);
document.getElementById("result").value=slc;
}
// create a function for input button values in result 
function inpValue(val)
{
document.getElementById("result").value+=val;
}

// create a function for all airtmatical expression 
function finalResult()
{
var x=document.getElementById("result").value;   
var y=eval(x);
document.getElementById("result").value=y;
}
// create a square root
function SQRT()
{
  var sq=document.getElementById("result").value;
  var res=Math.sqrt(sq);
  document.getElementById("result").value=res;

}

// create a square value
function SQ()
{
  var sq=document.getElementById("result").value;
  var res=Math.pow(sq,2);
  document.getElementById("result").value=res;

}

// rightclick displabe on webpage
document.addEventListener('contextmenu', event => event.preventDefault());