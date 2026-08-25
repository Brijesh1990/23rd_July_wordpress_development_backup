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
//var number=20;
var i=num;
for(num=1;num<=i; num++)
{
    if(num%2==1)
    {
        //document.getElementById("result").innerHTML=num;
        document.write(num+"<br>");
    }
}

}
</script>    
</head>
<body>
<form>
Enter Numbers : <input type="text" id="number" placeholder="Enter a Numbers :" />
<br><br>
<button type="button" onclick="display()">Submit</button>
<br>
<p id="result"></p>

</form>
</body>
</html>