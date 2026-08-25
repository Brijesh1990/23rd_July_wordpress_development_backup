<?php 
require_once "config.php";
// create a function for adding task
function addTask($task_name)
{
    global $conn;
    $sql="INSERT INTO tbl_task (taskname) VALUES ('$task_name')";
    if(mysqli_query($conn,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }

}
// create a function for edit task by id
function getTaskById($id)
{
    global $conn;
    $sql="SELECT * FROM tbl_task WHERE taskid='$id'";
    $query=mysqli_query($conn,$sql);
    return mysqli_fetch_assoc($query);
}
// create a function for getting all tasks
function getAllTasks()
{
    global $conn;
    $sql="SELECT * FROM tbl_task";
    $query=mysqli_query($conn,$sql);
    while($fetch=mysqli_fetch_assoc($query))
    {
        $tasks[]=$fetch;
    }
    return $tasks;
}

// create a function for delete task
function deleteTask($id)
{
    global $conn;
    $sql="DELETE FROM tbl_task WHERE taskid='$id'";
    if(mysqli_query($conn,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}

// create a function for edit a task
function editTask($id,$task_name)
{
    global $conn;
    $sql="UPDATE tbl_task SET taskname='$task_name' WHERE taskid='$id'";
    if(mysqli_query($conn,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}

// create a function for counting total tasks
function countTasks()
{
    global $conn;
    $sql="SELECT COUNT(*) as total FROM tbl_task";
    $query=mysqli_query($conn,$sql);
    $result=mysqli_fetch_assoc($query);
    return $result["total"];
}

?>