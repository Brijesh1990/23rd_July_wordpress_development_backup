
## SQL Joins

SQL joins are used to combine tables based on matching column data. If data matches, tables are joined; if not, null values are returned.

### Types of Joins

1. Join
2. Inner Join
3. Outer Join
    - Left Outer Join
    - Right Outer Join
    - Full Outer Join (not supported)
4. Cross Join

### Examples of Join

```sql
SELECT orders.*, customer_name, product_name 
FROM orders 
JOIN customers ON orders.customer_id = customers.customer_id 
JOIN products ON products.product_id = orders.product_id;
```

### Examples of Inner Join

> Note: JOIN and INNER JOIN are essentially the same.

```sql
SELECT orders.*, customer_name, product_name 
FROM orders 
INNER JOIN customers ON orders.customer_id = customers.customer_id 
INNER JOIN products ON products.product_id = orders.product_id;
```

### Outer Join

- Left Join
- Right Join
- Full Join

#### Left Join

Left join matches column data and returns all rows from the left table with matching rows from the second table. Unmatched data returns null.

```sql
SELECT orders.*, customer_name, product_name 
FROM orders 
LEFT JOIN customers ON orders.customer_id = customers.customer_id  
LEFT JOIN products ON products.product_id = orders.product_id;
```

#### Right Join

Right join matches column data and returns all rows from the right table with matching rows from the first table. Unmatched data returns null.

```sql
SELECT orders.*, customer_name, product_name 
FROM orders 
RIGHT JOIN customers ON orders.customer_id = customers.customer_id  
RIGHT JOIN products ON products.product_id = orders.product_id;
```

#### Cross Join

Cross join multiplies tables and returns all combinations.

```sql
SELECT * FROM customers CROSS JOIN country;
```

### E-commerce App Database

1. Create a database named `ecommerce_app`
2. Create a `products` table with: product_id, product_name, price, stock
3. Insert 5+ records into products
4. Create a `customers` table with: customer_id, customer_name, email, country_id
5. Insert 3+ records into customers
6. Create an `orders` table with: order_id, customer_id, product_id, quantity, order_date
7. Insert 5+ records into orders
8. Query all orders with customer and product names
9. Query total revenue from all orders
10. Query most popular product by quantity

#### Solutions

```sql
CREATE DATABASE ecommerce_app;

CREATE TABLE products (
     product_id INT AUTO_INCREMENT PRIMARY KEY,
     product_name VARCHAR(255),
     price INT,
     stock INT
);

INSERT INTO products VALUES
(NULL, 'Samsung Guru', 1550, 5),
(NULL, 'Oppo', 45500, 10),
(NULL, 'Vivo', 1550, 15),
(NULL, 'Shoes', 550, 2),
(NULL, 'Mens T-shirts', 150, 5);

CREATE TABLE country (
     country_id INT AUTO_INCREMENT PRIMARY KEY,
     country_name VARCHAR(255)
);

CREATE TABLE customers (
     customer_id INT AUTO_INCREMENT PRIMARY KEY,
     customer_name VARCHAR(255),
     email VARCHAR(255),
     country_id INT REFERENCES country(country_id)
);

CREATE TABLE orders (
     order_id INT AUTO_INCREMENT PRIMARY KEY,
     customer_id INT REFERENCES customers(customer_id),
     product_id INT REFERENCES products(product_id),
     qty INT,
     order_date VARCHAR(255)
);


7) select orders .*, customer_name,product_name from orders join customers on orders.customer_id=customers.customer_id join products on orders.product_id=products.product_id

8) select sum(price) as total_revenue from orders join products on orders.product_id=products.product_id

9) select order_id,qty,product_name from orders join products on orders.product_id=products.product_id where qty >=1

10) select order_id,qty,product_name from orders join products on orders.product_id=products.product_id where qty >=15

11) UPDATE products 
JOIN orders  ON orders.product_id = products.product_id
SET products.stock = products.stock - orders.qty
WHERE order_id= 1;

12) delete from orders where order_id=2;


```

### Faculty Database

1. Create database `university`
2. Create `faculty` table with: faculty_id, faculty_name, department, country_id, email (unique)
3. Insert 5+ faculty records
4. Create `courses` table with: course_id, course_name, faculty_id
5. Insert 3+ course records
6. Create `students` table with: student_id, student_name, age, country_id
7. Insert 5+ student records
8. Create `enrollments` table with: enrollment_id, student_id, course_id, enrollment_date
9. Insert 5+ enrollment records
10. write a query to select all enrollments along with student names and course names.
11. write a query to find the total number of students enrolled in each course.
12. write a query to find the faculty member teaching the most courses.
13. write a query to update the department of a faculty member with a specific faculty_id.
14. write a query to delete a student with a specific student_id.

### Students Database

1. Create database `school`
2. Create `students` table with: id, name, age, grade, country_id
3. Insert 5+ student records
4. Create `country` table with: country_id, country_name
5. Insert 3+ country records
6. Query all students with country names
7. Query average age by grade
8. Query total students by country
9. Query student with highest grade
10. Query to update student grade
11. Query to delete student record

