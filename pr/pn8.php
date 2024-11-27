<?php
/* Write a PHP script that connects to a MySQL database named company . 
The script should use localhost as the server. root as the username , and an empty password. 
display a message indicating whether the  conection was sucess ful. */


$servername ="localhost";
$username = "root";
$password = "";
$dbname ="company";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){				
	die("Connection failed: ".$conn->connect_error);
}

echo "connected successfully!";

/*Write php script to inser a new  employee record into the table named employees in the company
The table has the following fields 
Insert a new record */

$sql = "INSERT INTO employees (id, name_emp, email,salary) VALUES ('102','user4','user4@example.com',40000)"; 

if($conn->query($sql) == TRUE){
	echo "New record created successfully";
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
} 

/* display all record of table with column name  */

/* write php script to delete an employee data with id E102 */

$sql2 = "DELETE FROM employees  WHERE id ='102' ";

if($conn->query($sql2) == TRUE){
	echo "Record deleted  successfully";
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
} 

$sql3 = " SELECT * FROM employees ORDER BY id";
$result = $conn->query($sql3);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Employee details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Company</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Employee Id </th>
                <th>Employee Name</th>
                <th>Employee Email</th>
                <th>GFG Articles</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php 
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name_emp'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['salary'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>