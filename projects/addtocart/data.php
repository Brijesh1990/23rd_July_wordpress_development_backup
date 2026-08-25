<?php 
require_once("./admin/functions.php");
if(isset($_POST["country"]))
{
 $country=$_POST["country"];
 $select="select * from tbl_state where cid='$country'";
 $query=mysqli_query($conn,$select);
 while($fetch=mysqli_fetch_array($query))
    {
        ?>
         <option value='<?php echo $fetch["sid"];?>'><?php echo $fetch["sname"];?></option>
        <?php 
    }    
}   

if(isset($_POST["state"]))
{
 $state=$_POST["state"];
 $select="select * from tbl_city where sid='$state'";
 $query=mysqli_query($conn,$select);
 while($fetch=mysqli_fetch_array($query))
    {
        ?>
         <option value='<?php echo $fetch["ctid"];?>'><?php echo $fetch["ctname"];?></option>
        <?php 
    }    
}   
?>