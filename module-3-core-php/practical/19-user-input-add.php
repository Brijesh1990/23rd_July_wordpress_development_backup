<?php 
/*
if(isset($_POST["ad"]))
{
    $a=$_POST["a"];
    $b=$_POST["b"];
    echo "the sum of a and b is: ".($a+$b);
}

*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        .container{
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label{
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"]{
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"]{
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover{
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="addition.php">
            <label for="name">Enter a values:</label>
            <input type="text" id="name" name="a"><br><br>
            <label for="email">Enter b values:</label>
            <input type="text" id="email" name="b"><br><br>
            <input type="submit" name="ad" value="Submit">
        </form>
    </div>
</body>
</html>