<?php 
require_once "functions.php";
// edit task
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $task=getTaskById($id);
}   
if(isset($_POST["submit_task"]))
{
    $task_name=$_POST["task_name"];
    if(editTask($id,$task_name))
    {
        echo "<script>
        alert('Task updated successfully')
        window.location='index.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Failed to update task')
        window.location='index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Task</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-6">
        <h1 class="text-2xl font-bold text-center mb-6">Edit Task</h1>
        <form method="post">
        <div class="mb-4">
            <input 
            type="text" 
            name="task_name" value="<?php echo $task["taskname"]; ?>"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>
        <button type="submit" name="submit_task"
            class="w-full bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition"
        >
            Update Task
        </button>
        </form>
    </div>

</body>
</html>
