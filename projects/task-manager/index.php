<?php 
require_once "functions.php";
// added task
if(isset($_POST["submit_task"]))
    {
        $task_name=$_POST["task_name"];
        if(addTask($task_name))
        {
            echo "<script>
            alert('Task added successfully')
            window.location='index.php';
            </script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Task Manager UI</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

  <div class="w-full max-w-2xl bg-white shadow-lg rounded-2xl p-6">
    
    <h1 class="text-2xl font-bold text-center mb-6">Task Manager</h1>

    <!-- Input Section -->
    <form method="post"> 
    <div class="flex flex-col sm:flex-row gap-3 mb-6">
      <input 
        type="text" 
        placeholder="Enter task name" name="task_name"
        class="flex-1 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
      <button type="submit" name="submit_task"
        class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition"
      >
        Submit
      </button>
    </div>
    </form>

    <!-- Task Count -->
    <div class="flex justify-between items-center mb-4">
      <button 
        class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition"
      >
      <span class="font-semibold text-white-700">
        Total Tasks: <?php 
        $tasks=getAllTasks();
        if($tasks)
        {
            echo count($tasks);
        }
        else
        {
            echo "0";
        }
        ?>
      </span>
      </button>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
      <table class="w-full border border-gray-200 rounded-lg">
        <thead class="bg-black text-white">
          <tr>
            <th class="text-left px-4 py-2">#</th>
            <th class="text-left px-4 py-2">Task Name</th>
             <th class="text-left px-4 py-2">Action</th>
          </tr>
        </thead>
        <!-- display all task here -->
        <tbody class="bg-white">
         <?php 
        $tasks=getAllTasks();
        $index=0;
        if($tasks)
        {
            foreach($tasks as $value)
            {

                $index++;
        
                ?>
          <tr class="border-t">
            <td class="px-4 py-2"><?php echo $index;?></td>
            <td class="px-4 py-2"><?php echo $value["taskname"];?></td>
            <td colspan="2">
            <a href="edit.php?id=<?php echo $value['taskid'];?>" class="text-blue-500 hover:underline bg-blue-100 px-2 py-1 rounded" onclick="return confirm('Are you sure you want to edit this task?')">Edit</a>
            
            |
            <a href="delete.php?id=<?php echo $value['taskid'];?>" class="text-red-500 hover:underline bg-red-100 px-2 py-1 rounded" onclick="return confirm('Are you sure you want to delete this task?')">Delete</a>
        
           </td>
          </tr>
        <?php 
            }
        }
        ?>
       </tbody>
      </table>
    </div>

  </div>

</body>
</html>