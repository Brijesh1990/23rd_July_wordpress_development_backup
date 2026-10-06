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
//  echo "hi";
// stored data in variables 
$team_name=$_POST["team_name"];
$team_description=$_POST["team_description"];
$team_leader=$_POST["team_leader"];
$members=$_POST["members"];
// stored data with query
$insert="insert into $table(team_name,team_description,team_leader,members) values('$team_name','$team_description','$team_leader','$members')";
$query=mysqli_query($mysqli,$insert);
// pass a simple alert messages 
echo "<script>
alert('member successfully added')
</script>";

// pass a flash messages
// if ($query) {
//         wp_safe_redirect(
//             admin_url('admin.php?page=custom-teams-add&message=team_deleted')
//         );
//         exit;
//     }

}    
?>


<!-- delete team -->
<?php  
if(isset($_GET['delid']) && !empty($_GET['delid']))
{
    
    $delid=$_GET['delid'];
    $delete="delete from $table where id='$delid'";
    $query=mysqli_query($mysqli,$delete);
    // pass a simple messages
    // echo "<script>
    // alert('member successfully deleted')
    // window.location.href='admin.php?page=custom-teams-add';
    // </script>";
    if ($query) {
       echo "<script>
       window.location='admin.php?page=custom-teams-add&message=team_deleted';
       </script>";
        exit;
    }
}


// for edit team
if(isset($_GET['editid']) && !empty($_GET['editid']))
{
    $editid=$_GET['editid'];
    $select="select * from $table where id='$editid'";
    $query=mysqli_query($mysqli,$select);
    $fetch=mysqli_fetch_array($query);
}
?>

<!-- update team -->
<?php
if(isset($_POST["upd_team"]))
{
    $team_name=$_POST["team_name"];
    $team_description=$_POST["team_description"];
    $team_leader=$_POST["team_leader"];
    $members=$_POST["members"];

    $update="update $table set team_name='$team_name',team_description='$team_description',team_leader='$team_leader',members='$members' where id='$editid'";
    $query=mysqli_query($mysqli,$update);
    echo "<script>
    alert('member successfully updated')
    window.location.href='admin.php?page=custom-teams-add';
    </script>";
}

?>

<!--add teams   -->
<!-- for edit team -->
<?php if(isset($_GET['editid']))
{
?>

<div class="wrap">    
<h1>Edit Teams</h1>
<form method="post" action="">
<?php wp_nonce_field('ct_add_team'); ?>
<table class="form-table">
<tr>
<th scope="row"><label for="team_name">Edit Team Name</label></th>
<td><input type="text" name="team_name" value="<?php echo $fetch["team_name"];?>" id="team_name" class="regular-text" required></td>
</tr>
<tr>
<th scope="row"><label for="team_description">Edit Description</label></th>
<td><textarea name="team_description" id="team_description" class="large-text" rows="4"><?php echo $fetch["team_description"];?></textarea></td>
</tr>
<tr>
<th scope="row"><label for="team_leader">Edit Team Leader</label></th>
<td><input type="text" name="team_leader" value="<?php echo $fetch["team_leader"];?>" id="team_leader" class="regular-text" required></td>
</tr>
<tr>
<th scope="row"><label for="members">Edit Members Count</label></th>
<td><input type="number" name="members" value="<?php echo $fetch["members"];?>" id="members" class="small-text" min="1" required></td>
</tr>

<tr>
<td><input type="submit" name="upd_team" id="save_team" class="button button-primary" value="Update Teams"></td>
</tr>
</table>

</form>
</div>
<?php 
} 
else 
{
 ?>
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
<td><input type="submit" name="save_team" id="save_team" class="button button-primary" value="Add Teams"></td>
</tr>
</table>

</form>
</div>
<?php 
}
?>
<!-- manage teams  -->
<!-- flash messages area -->
<?php
if (isset($_GET['message']) && $_GET['message'] === 'team_deleted') {
    ?>
    <div id="team-delete-message" class="notice notice-success is-dismissible">
        <p><strong>Success:</strong> Team successfully deleted.</p>
    </div>

    <script>
    setTimeout(function () {
        const message = document.getElementById('team-delete-message');

        if (message) {
            message.style.transition = 'opacity 0.5s ease';
            message.style.opacity = '0';
            setTimeout(function () {
                message.remove();
            }, 500);
        }
    }, 5000);
    </script>
    <?php
}
?>

<div class="wrap">
<h1 class="wp-heading-inline">Manage Teams</h1>

<a href="<?php echo admin_url('admin.php?page=custom-teams-add'); ?>"
class="page-title-action">
Add New Team
</a>

<hr class="wp-header-end">

<table class="wp-list-table widefat fixed striped">
<thead>
<tr>
<th width="60">ID</th>
<th>Team Name</th>
<th>Description</th>
<th>Team Leader</th>
<th>Members Count</th>
<th>Status</th>
<th width="150">Actions</th>
</tr>
</thead>
<tbody>
<?php
global $wpdb;
$table=$wpdb->prefix . 'teams';
/* Change team status */
if (isset($_GET['action']) && $_GET['action'] === 'toggle_status' && isset($_GET['id'])) {
$id = absint($_GET['id']);
// Get current status
$get_team = mysqli_query($mysqli, "SELECT status FROM $table WHERE id = $id");
$team = mysqli_fetch_array($get_team);

if ($team) {
$new_status = ($team['status'] === 'active') ? 'deactive' : 'active';
mysqli_query(
$mysqli,
"UPDATE $table SET status = '$new_status' WHERE id = $id"
);
}

// Redirect to remove action from URL
wp_safe_redirect(
admin_url('admin.php?page=custom-teams-add')
);
exit;
}

// Fetch teams
$select ="select * from $table order by id desc";
$query=mysqli_query($mysqli,$select);
while($fetch=mysqli_fetch_array($query))
{

?>

<tr>
<td>
<?php echo $fetch["id"]; ?>
</td>

<td>
<strong>

<?php echo $fetch["team_name"]; ?>
</strong>
</td>

<td>
<?php echo $fetch["team_description"]; ?>
</td>

<td>
<?php echo $fetch["team_leader"]; ?>
</td>

<td>
<?php echo $fetch["members"];?>
</td>
<td>
    <?php if ($fetch["status"] === 'active') { ?>

        <a
            href="<?php echo esc_url(
                admin_url(
                    'admin.php?page=custom-teams-add&action=toggle_status&id=' . absint($fetch["id"])
                )
            ); ?>"
            class="button button-small"
            style="
                background-color: #198754;
                border-color: #198754;
                color: #fff;
            "
        >
            Active
        </a>

    <?php } else { ?>

        <a
            href="<?php echo esc_url(
                admin_url(
                    'admin.php?page=custom-teams-add&action=toggle_status&id=' . absint($fetch["id"])
                )
            ); ?>"
            class="button button-small"
            style="
                background-color: #dc3545;
                border-color: #dc3545;
                color: #fff;
            "
        >
            Deactive
        </a>

    <?php } ?>
</td>


<td>

<a href="<?php echo admin_url("admin.php?page=custom-teams&editid=".$fetch['id']);?>" class="button button-small" onclick="return confirm('Are you sure you want to edit this team?')">
    Edit
</a>

<!-- 
<a href="<?php echo admin_url("admin.php?page=custom-teams&delid=".$fetch['id']);?>" class="button button-small" onclick="return confirm('Are you sure you want to delete this team?')">
    Delete
</a> -->
<!-- for flash messages -->

<a href="<?php echo esc_url(
    admin_url(
        'admin.php?page=custom-teams-add&delid=' . absint($fetch['id'])
    )
); ?>"
class="button button-small"
onclick="return confirm('Are you sure you want to delete this team?')">
    Delete
</a>

</td>
</tr>

<?php } ?>

</tbody>
</table>
</div>


<!-- edit teams  -->

<!-- delete teams  -->
<!-- close the connection  -->
<?php 
$mysqli->close();

?>
