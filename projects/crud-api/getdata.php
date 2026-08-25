<?php 
require_once("config.php");
if(isset($_REQUEST["country"]))
{
$cn=$_REQUEST["country"];
$select="select * from tbl_state where cid='$cn'";
$query=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($query))
{
?>
<option value='<?php echo $fetch["sid"];?>'><?php echo $fetch["sname"];?></option>
<?php  
}
}
// fetch state of city in dropdown
if(isset($_REQUEST["state"]))
{
$sn=$_REQUEST["state"];
$select="select * from tbl_city where sid='$sn'";
$query=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($query))
{
?>
<option value='<?php echo $fetch["ctid"];?>'><?php echo $fetch["ctname"];?></option>
<?php  
}
}
?>