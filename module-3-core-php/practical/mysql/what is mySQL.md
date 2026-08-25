# what is mySQL  ?

  1. mysql is a database
  2. mysql is provide a connection string with database
  3. mysql is case sensitive 
  4. mysql is used to provides connection and relationship in database 

# what is difference b/w SQL and mySQL   

  1. sql is a language
  2. sql is provide to create database and tables structures
  3. sql is case in-sensitive 
 

# what is RDBMS 
  1. RDBMS stands relation database management systems 
  2. RDBMS provides relational database 
  3. RDBMS is used a MFCODE rules to providess relational database management systems 
  4. RDBMS manages all DBMS


# what is difference  b/w MySQL and MySQLi

**MySQL**

1. mysql is a database
2. mysql is provide a connection string with database
3. mysql is case sensitive 
4. mysql is used to provides connection and relationship in database 

**MySQLi**

1. mysqli is a database
2. mysqli is provide a connection string with database
3. mysqli is case sensitive 
4. mysqli is used to provides connection and relationship in database
5. mysqli is an advanced version of mysql improved version
6. it is also support in advanced php version
7. work on same port i.e 3306
8. mysql and mysqli provides some engine that are .
   examples : MyISAM  | InnoDB  | CSV | MEMORY  | Aria 


# mysqli database connection string  function 

  **start connection**
  ```
  $con=mysqli_connect("localhost","root","","dbanme");
  or 
  $con=new mysqli("localhost","root","","dbanme");
  or
  $ser="localhost";
  $user="root";
  $pass="";
  $dbname="app";
  $con=new mysqli($ser,$user,$pass,$dbname);
  
  ```

# mysqli database execute a query 

   ```
   $insert="insert into tbl_addusers(name,email,phone,added_date_time) values('$name','$email','$phone','$date_time')";

   $query=mysqli_query($con,$insert);

   ```  

   
# mysqli database fetch data function 

  ```
  $select="select * from tbl_addusers";
  $query=mysqli_query($con,$select);
  $fetch=mysqli_fetch_array($query);

  ```  

# mysqli data fetch data 

 1 . $fetch=mysqli_fetch_array($query);  //fetch data in array
 2 . $fetch=mysqli_fetch_assoc($query);  //fetch data in assoc
 3 . $fetch=mysqli_fetch_object($query); //fetch data in object
 4 . $fetch=mysqli_num_rows($query);     //fetch data and check total num and rows