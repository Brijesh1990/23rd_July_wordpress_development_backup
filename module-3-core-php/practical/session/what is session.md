# what is session in php ?
  1. session is one type of a variables that can be stored data on server side in php
  2. session work server side 
  3. session should be always start inside of <?php  ?>
  4. session is used to stored data one page to another page 

# how to start session 
  **examples to start session**
  ```
  <?php
  session_start();
  ?>
  ```

# how to stored data in  session 
  **examples to stored session data**
  ```
  <?php
  session_start();
  $_SESSION["name"];
  $_SESSION["id"];
  $_SESSION["email"];

  ?>
  ```  

# how to unset data from  session 
  **examples to unset session data**
  ```
  <?php
  session_start();
  $_SESSION["name"];
  $_SESSION["id"];
  $_SESSION["email"];
  <!--unset() is a function that can be removed session from current page  -->

 unset($_SESSION["name"]);
 unset($_SESSION["id"]);
 unset($_SESSION["email"]); 

  
  ?>
  ```  

# how to destroy data from  session 
  **examples to destroy session data**
  ```
  session_start();
  $_SESSION["name"];
  $_SESSION["id"];
  $_SESSION["email"];
  <!--unset() is a function that can be removed session from current page  -->

  unset($_SESSION["name"]);
  unset($_SESSION["id"]);
  unset($_SESSION["email"]); 

  <!-- session destroy -->
  session_destroy();
  
  <!-- header("location:login.php") -->

  echo "you are successfully logout";
  header("refresh:3,login.php");

  ```
  
## note : by default expiry time of session is 24 minutes in php 