<?php
$servername = "localhost"; // Database server (localhost by default)
$username = "root";        // Database username
$password = "";            // Database password (leave empty if using default)
$dbname = "user_db";       // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Insert
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert'])) {
    $id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];

    // Check if user already exists
    $sql_check = "SELECT user_id FROM user WHERE user_id = '$id'";
    $result = $conn->query($sql_check);
    if ($result->num_rows > 0) {
        echo "Error: User ID already exists.";
    } else {
        $sql = "INSERT INTO user (user_id, user_name, user_email, user_salary) VALUES ('$id','$name', '$email', '$salary')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Handle Update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];

    $sql = "UPDATE user SET user_name='$name', user_email='$email', user_salary='$salary' WHERE user_id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM user WHERE user_id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch all records for displaying
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER Table</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>User Management</h1>
        
        <!-- Insert or Update Form -->
        <form method="POST" action="">
            <label for="user_id">User ID:</label>
            <input type="text" name="user_id" id="user_id" required>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            
            <label for="salary">Salary:</label>
            <input type="number" name="salary" id="salary" required>
            
            <!-- Buttons change based on context -->
            <button type="submit" name="insert" id="insertButton">Add User</button>
            <button type="submit" name="update" id="updateButton" style="display: none;">Update User</button>
        </form>

        <h2>User List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['user_name']; ?></td>
                        <td><?php echo $row['user_email']; ?></td>
                        <td><?php echo $row['user_salary']; ?></td>
                        <td>
                            <a href="index.php?delete=<?php echo $row['user_id']; ?>">Delete</a>
                            <a href="#" onclick="editEmployee(<?php echo $row['user_id']; ?>, '<?php echo $row['user_name']; ?>', '<?php echo $row['user_email']; ?>', '<?php echo $row['user_salary']; ?>')">Edit</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        function editEmployee(id, name, email, salary) {
            document.querySelector('input[name="user_id"]').value = id;
            document.querySelector('input[name="name"]').value = name;
            document.querySelector('input[name="email"]').value = email;
            document.querySelector('input[name="salary"]').value = salary;

            // Switch to "Update" mode
            document.getElementById('insertButton').style.display = 'none';
            document.getElementById('updateButton').style.display = 'inline-block';
        }
    </script>
</body>
</html>

<?php
$conn->close();
?>
