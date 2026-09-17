<?php 
// define plugins path
if(!defined('ABSPATH'))
{
exit;
}
/* 

---------create a mysqli connection--------------------- 

*/ 
$mysqli=new mysqli(

DB_HOST,
DB_USER,
DB_PASSWORD,
DB_NAME

);

if($mysqli->connect_error)
{
die('Database connection failed :' .$mysqli->connect_error);
}

// ---------table schema add ------------------
 global $wpdb;
$table=$wpdb->prefix . 'teams';

// add teams set a button
if(isset($_POST["save_team"]))
{
 echo "hi";
}    
?>

<!--add teams   -->
<div class="wrap">
    <h1>Add Teams</h1>
    <form method="post" action="">
        <?php wp_nonce_field('ct_add_team'); ?>
        <table class="form-table">
            <tr>
                <th scope="row"><label for="team_name">Team Name</label></th>
                <td><input type="text" name="team_name" id="team_name" class="regular-text" required></td>
            </tr>
            <tr>
                <th scope="row"><label for="team_description">Description</label></th>
                <td><textarea name="team_description" id="team_description" class="large-text" rows="4"></textarea></td>
            </tr>
            <tr>
                <th scope="row"><label for="team_leader">Team Leader</label></th>
                <td><input type="text" name="team_leader" id="team_leader" class="regular-text" required></td>
            </tr>
            <tr>
                <th scope="row"><label for="members">Members Count</label></th>
                <td><input type="number" name="members" id="members" class="small-text" min="1" required></td>
            </tr>

              <tr>
                <td><input type="submit" name="save_team" id="save_team" class="button button-primary" value="Save Teams"></td>
            </tr>
        </table>
       
    </form>
</div>

<!-- manage teams  -->

<!-- edit teams  -->

<!-- delete teams  -->
<!-- close the connection  -->
<?php 
$mysqli->close();

?>
