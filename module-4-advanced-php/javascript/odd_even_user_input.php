<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>Page Title</title>
<link rel='stylesheet' href='main.css'>
<script>
function display()
{
var num=document.getElementById("number").value;
if(num%2==0)
{
//document.write("The number is even");
document.getElementById("result").innerHTML="The numbers is even";
}
else 
{
//document.write("The number is odd");

document.getElementById("result").innerHTML="The numbers is odd";
}
}
</script>    
</head>
<body>
<form>
Enter Numbers > <input type="text" id="number" placeholder="Enter a Numbers :" />
<br><br>

<button type="button" onclick="display()">Submit</button>
<br>
<br>
<p id="result"></p>

</form>
</body>
</html>