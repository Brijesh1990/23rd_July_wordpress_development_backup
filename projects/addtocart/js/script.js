// change qty price change of products 
function subTotal()
{
  var price=document.getElementById("price").value;
  var qty=document.getElementById("qty").value;
  var tot=price*qty;
  document.getElementById("subtot").innerHTML=+tot;
}