# What is SQL?

SQL stands for **Structured Query Language**.

## SQL Characteristics

- **Case-insensitive**: Examples - `Insert`, `INSERT`, `insert` (all are valid)
- Used to create databases and table structures

## Types of SQL Commands

- **DDL** - Data Definition Language
- **DML** - Data Manipulation Language
- **DQL** - Data Query Language
- **TCL** - Transactional Control Language

---

## DDL (Data Definition Language)

DDL stands for **Data Definition Language** and is used to create databases and table structures.

### DDL Commands

1. `CREATE`
2. `ALTER`
3. `RENAME`
4. `CHANGE`
5. `DROP`
6. `TRUNCATE`

---

## 1) CREATE - Creating a Database

Used to create a new database.

### Syntax
```sql
CREATE DATABASE database_name;
```

### Examples
```sql
CREATE DATABASE flipkart_db;
CREATE DATABASE amazon;
```

### What is a Database?

A **database** is used to store information about users and other data. It's a structured collection of organized data.

### Popular Databases

1. MySQL
2. SQLite
3. MongoDB
4. SQL Server
5. Oracle

**Note:** MySQL is an open-source database and is case-sensitive.

---

## 2) CREATE - Creating a Table

Used to create and store data in the form of columns and rows.

### What is a Table?

A **table** is a collection of related data organized in rows and columns.

### Example Table Structure

| uid | name | age | pin   | salary | address |
|-----|------|-----|-------|--------|---------|
| 1   | abc  | 32  | 36005 | 15600  | rjt     |

### SQL Data Types Chart

| Column Name | Data Type      | Size         |
|-------------|----------------|--------------|
| id          | int            | default (11) |
| name        | char, varchar  | 0-255        |
| date        | date, varchar  | 0-255        |
| datetime    | datetime       | -            |
| comments    | text           | -            |
| message     | text           | -            |
| price       | int, float     | -            |
| mobile      | bigInteger     | default (20) |
| image       | blob, varchar  | 0-255        |

### Syntax
```sql
CREATE TABLE table_name (
    column_name datatype(size) AUTO_INCREMENT PRIMARY KEY,
    column_name datatype(size),
    ...
);
```

### Examples

**Create Users Table:**
```sql
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    address TEXT,
    mobile BIGINT,
    salary FLOAT
);
```

**Create Country Table:**
```sql
CREATE TABLE country (
    country_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)
);
```

**Create Feedback Table:**
```sql
CREATE TABLE feedback (
    feedback_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    ranking INT,
    phone BIGINT,
    comment TEXT
);
```

---

## 3) ALTER - Modifying Tables

Used to add, modify, or update new columns after creating tables.

### Syntax Examples

**a) Add a column at the end:**
```sql
ALTER TABLE users ADD photo VARCHAR(255);
```

**b) Add a column after a specific column:**
```sql
ALTER TABLE users ADD photo VARCHAR(255) AFTER name;
```

**c) Modify/Change a column:**
```sql
ALTER TABLE users CHANGE mobile phone BIGINT;
```

---

## 4) RENAME - Renaming Tables

Used to rename any table.

### Syntax
```sql
RENAME TABLE feedback TO tbl_feedback;
```

---

## 5) CHANGE - Renaming Columns

Used to change any column name.

### Syntax
```sql
ALTER TABLE users CHANGE mobile phone BIGINT;
```

---

## 6) TRUNCATE - Removing Table Data

Used to remove or empty all data from tables.

### Syntax
```sql
TRUNCATE TABLE tbl_country;
```

**Note:** After truncate, data cannot be rolled back.

---

## 7) DROP - Deleting Database and Tables

Used to delete database and table structures.

### Syntax

**a) Drop a database:**
```sql
DROP DATABASE flipkart_db;
```

**b) Drop a table:**
```sql
DROP TABLE tbl_country;
``` 

## DML (Data Manipulation Language)

DML stands for **Data Manipulation Language** and is used to manage data within tables.

### DML Commands

- `INSERT` - Add data to tables
- `UPDATE` - Modify existing data
- `DELETE` - Remove data from tables

---

## 1) INSERT - Adding Data to Tables

Used to insert data into tables.

### Single Data Insert

**Syntax:**
```sql
INSERT INTO table_name (column_name1, column_name2) VALUES ('val1', 'val2');
```

Or:
```sql
INSERT INTO table_name VALUES ('null', 'val1', 'val2');
```

**Example:**
```sql
INSERT INTO tbl_users (name, photo, email, password, address, phone, salary) 
VALUES ('vijay', 'vijay.jpg', 'vijay@gmail.com', 'v123', '150 feet ring road', 9998003879, 18500);
```
### Multiple Data Insert

**Syntax:**
```sql
INSERT INTO tbl_users (name, photo, email, password, address, phone, salary) 
VALUES ('govind', 'govind.jpg', 'govind@gmail.com', 'g123', '150 feet ring road', 9998006879, 29500),
       ('jay', 'jay.jpg', 'jay@gmail.com', 'j123', '150 feet ring road', 9998053879, 18900),
       ('meet', 'meet.jpg', 'meet@gmail.com', 'm123', '150 feet ring road', 9998003879, 28500);
```

Or:
```sql
INSERT INTO tbl_users VALUES ('null', 'vinod', 'vinod.jpg', 'vinod@gmail.com', 'g123', '150 feet ring road', 9998006879, 29500),
                             ('null', 'yogesh', 'yogesh.jpg', 'yogesh@gmail.com', 'j123', '150 feet ring road', 9998053879, 18900);
```

---

## 2) UPDATE - Modifying Data

Used to update/modify existing data in tables.

**Syntax:**
```sql
UPDATE table_name SET column1='val1', column2='val2' WHERE user_id=6;
```

**Example:**
```sql
UPDATE tbl_users 
SET name='brijesh', email='brij@gmail.com', photo='brij.png', password='brij$$123', 
    address='near 150 feet ahmdabad', phone=91733357217, salary=89500 
WHERE user_id=6;
```

Or:
```sql
UPDATE tbl_users 
SET phone=9173357217, salary=115500 
WHERE user_id=6;
```

---

## 3) DELETE - Removing Data

Used to delete/remove data from tables.

### Delete All Data

**Syntax:**
```sql
DELETE FROM table_name;
```

### Delete Particular Data

**Syntax:**
```sql
DELETE FROM table_name WHERE user_id=6;
```

Or:
```sql
DELETE FROM table_name WHERE name='brijesh';
```

### Delete with IN Operator

**Syntax:**
```sql
DELETE FROM table_name WHERE user_id IN (1, 2);
```

**Example:**
```sql
DELETE FROM tbl_users WHERE user_id IN (1, 2);
```

### Delete with BETWEEN Operator

**Syntax:**
```sql
DELETE FROM table_name WHERE user_id BETWEEN 6 AND 20;
```
**Note:** After delete, data can be rolled back (using transactions).        

## 2) DQL - stands for data query language

DQL is used to select all data or fetch all data from tables 

 **select all data or fetch all**

 1. select * all data from tables 

 **syntax:**
 ```
 select * from tablename
 ```
 2. select multiple column of data 

 **syntax:**
 ```
 select id,name,email from tablename
 ```

 3. select particular id of data 

 **syntax:**
 ```
 select * from tablename where id=2
 ```
 
 4. select particular name of data 

 **syntax:**
 ```
 select * from tablename where name='bhavesh'

 ```

 5. select alternate  of data from its id 

 **syntax:**
 ```
 select * from tablename where id in (2,4,6)
 examples :
 select * from tbl_users where user_id in (2,4,6)
 
 ```
 6. select alternate  of data from its id 

 **syntax:**
 ```
 select * from tablename where id in (2,4,6)
 ```

 7. select data using limit 

 **syntax:**
 ```
 select * from tablename where id limit 1,3;
 ```
 7. select data using between 

 **syntax:**
 ```
 select * from tablename where id between 1 and 3;
 examples : 
 select * from tbl_users where user_id between 4 and 6;

 ```

8. **using order by and group by**
**order by**
``` 
order by is used to filter data in ascending and descending order
```
**syntax**
```
select * from tbl_users   order by  name asc;
or
select * from tbl_users   order by  name;
or 
select * from tbl_users   order by  name desc;

```
**group by**
``` 
group by is used to filter data on group of columns
examples :

select sum(salary),department from tbl_users where department in ('IT','CSE','HR') group by department;
```
**syntax**
```
select * tbl_name group by column name;
examples : select sum(salary),department from tbl_users group BY department
or
select sum(salary),department from tbl_users group BY department
or

select sum(salary),department as sum_of_department from tbl_users group BY department
or
select sum(salary),department from tbl_users where department in ('IT','CSE','HR') group by department;
```

## search any data from tables there we used like operator 

   **search name start with a letter**
   ```
   select * from tbl_users where name like 'a%';

   ```
   **search name end with h letter**
   ```
   select * from tbl_users where name like '%h';
   ```
     **search name end with abcds letter**

## search name with pattern with  letter**
   ```
   select * from tbl_users where name like 'a%';

   ```
 
## search name with pattern with  letter **
   ```
   select * from tbl_users where name like '%ab%';

   ```
## search name with pattern with end with a and name at least three character  letter **
   ```
   select * from tbl_users where name like '%a__';
```


## search name with pattern with start with a and at least three character  letter **
   ```
   select * from tbl_users where name like 'v__%';
```

## sql function 
   sql function in inbuild function  provides some query
   THere are two types of function 
   1. aggrigate function

      1. sum()
          ```
          select sum(salary) as sum_of_salary from tbl_users;
          select sum(salary),department from tbl_users group by department;
          ```
      2. avg()
         ```
          select avg(salary) as average_of_salary from tbl_users;
         ```
      3. max()
         ```
         select max(salary) as highest_salary from tbl_users;
         ```
      4. min()
         ```
           select min(salary) as highest_salary from tbl_users;

           select min(salary) as highest_salary from tbl_users where name='jay';

           select  min(salary) as highest_salary from tbl_users;

         ```
      5. count(): total numbers of users count will be used
           ```
           select count(user_id) as total_numbers_users from tbl_users;
           ```

   2. scalar function 

      1. first() : select first rows of any table
                  ```
                  select first as  from tbl_users;
                  ```
      2. last()  : select last rows of any table
                  ```
                   select first as  from tbl_users;
                   ```
      3. lcase() : select and convert upper case to lower case 
                    ```
                    select lcase(name) from tbl_users;
                    ```
      4. ucase() : select and convert lower case to upper case
                    ```
                    select ucase(name) from tbl_users;
                    ```

   

## subquery in sql
   query within query there we used subquery

    ```
  select max(salary) as second_highest_salary from tbl_users where salary < (select max(salary) from tbl_users);

    ```


## TCL (transactional control language)

   1. commit :
       commit is used to save query after delete from tables 
    ```
    start TRANSACTION;
    DELETE from tbl_users where user_id=8;
    commit;
    
     ``` 
   2. rollback
          rollback is used to rollback a data after commit 
      ```
         start TRANSACTION;
         select * from tbl_users where user_id=8;
         rollback;
      ```

   Note :mysql is also not support rollback


## sql key constraints 

   key constraints is used to provide a primary key | foreign key | unique key in a tables there we used key constraints

   1. **primary key**:

       1. A pk key only provides one time in a table on id 
       2. A pk is always auto_increments
       3. A pk is never return null value 
       4. A pk is stored uniquely 

  **tbl_country**

  | country_id(pk)   | countryname |
  |------------------|-------------|
  |1                 | india       |         


   2. **unique key**:

       1. A uk key provides more than one columns 
       2. A uk is at least stored one times a null value 
       4. A uk is stored uniquely
       5. A uk ke never return dublicate value 

  **tbl_users**

  | user_id(pk)   |name | age | email(uk)  | phone     |
  |---------------|-----|-----|--------|---------------|
  |1              |A    | 3   |a@gmail.com | 9173565245| 


     ```
     ALTER TABLE `tbl_employee` ADD UNIQUE(`email`);
 
    ```      


  3. **foreign key**  

       1. A fk key provides more than one columns 
       2. A fk is never return null value 
       4. A fk is used to provides dublicate data and create relationship between one tables to another tables  with common field
      

  **tbl_students**

  | student_id(pk)   | studentname |
  |------------------|-------------|
  |1                 | meet        |
  |2                 | vijay       |
  |3                 | govind      | 

  
  **tbl_faculty**

  | faculty_id(pk)   | facultyname | age   |   department  |  student_id(fk) |
  |------------------|-------------|-------|---------------|-----------------|
  |1                 | brijesh     | 34    |   CSE         |    1            |
  |2                 | mitesh      | 29    |   IT          |    2            |
  |3                 | prakruti    | 29    |   EC          |    3            |

  **how to create a foreign key**

  ```
   create table tbl_faculty
  (
   faculty_id int primary key AUTO_INCREMENT,
   facultyname varchar(255),
   age int,
   salary int,
   department varchar(255),
   student_id int REFERENCES tbl_students(student_id)    
   )
  ``` 

## sql join 

  **types of join**
  1. inner join
  2. join 
  3. outer join 
     a) left join 
     b) right join 
     c) full join (mysql is not supported) 
  4. cross    

  join is used to join more than one tables with common field if data match join table otherwise return null value.

  **join**
  ```
   select tbl_faculty.*, studentname from tbl_faculty join tbl_students on tbl_faculty.student_id=tbl_students.student_id;

   or

   select tbl_products.*,categoryname from tbl_products join tbl_category on tbl_products.category_id=tbl_category.category_id;

  ```

  **inner join**

  join and inner join both are similar 

  ```
   select tbl_products.*,categoryname from tbl_products inner join tbl_category on tbl_products.category_id=tbl_category.category_id;

   or

  select product_id,productname,price,categoryname from tbl_products inner join tbl_category on tbl_products.category_id=tbl_category.category_id;
 
  ```

**outer join**
  a) left join 
  b) right join 
  c) full join 

  **left join**
   left join is used to join first table of left rows to second table of left rows if data matched return all data otherwise return null value. 

   ```
  select tbl_products.*,categoryname from tbl_products left join tbl_category on tbl_products.category_id=tbl_category.category_id;
   ```

   
  **right join**
   right join is used to join second table of right rows to first table of right rows if data matched return all data otherwise return null value. 

   ```
  select tbl_products.*,categoryname from tbl_products right join tbl_category on tbl_products.category_id=tbl_category.category_id;
   ```


4. cross join 
   cross join is used to join more than one tables and return a multiplication of repeated data.

   table 1 total 4 data 
   table 2 total 2 data

   4*2=8  
   ```
   select * from tbl_products cross join tbl_category;
   ```