<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['login'])) {
    header("location:./loginfolder/index.php");
}

$dbservername = "localhost";
$dbUsername = "root";
$dbpassword = "";
$dbname = "my_db";
$conn = mysqli_connect($dbservername, $dbUsername, $dbpassword, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $delete = mysqli_query($conn, "DELETE FROM users WHERE name = '$name'");
    header("location:admin.php");
}

if (isset($_POST['add_user'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

    $insert = mysqli_query($conn, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");

    if ($insert) {
        header("location:admin.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

$select = "SELECT * FROM users";
$query = mysqli_query($conn, $select);
$num = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ad.css">
    <title>ADMIN PAGE</title>
    <style>
        @media print {
            #mainContent {
                display: none;
            }
            #printSection {
                display: block;
            }
        }
        #printSection {
            display: none;
        }
    </style>
    <script>
        function printUsers() {
            var printContents = document.getElementById('printSection').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
</head>
<body>

    <div id="mainContent">
        <form action="admin.php" method="POST">
            <input type="text" name="name" placeholder="Enter Name" required>
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit" name="add_user">Add User</button>
        </form>
        
        <button onclick="printUsers()">Print Users</button>

        <table id="usersTable"> 
            <tr>
                <th> NAME</th>
                <th> EMAIL </th>
                <th>OPTION</th>
            </tr>
            <?php
            if ($num > 0) {
                while ($result = mysqli_fetch_assoc($query)) {
                    echo "
                    <tr>
                    <td>".$result['name']."</td>
                    <td>".$result['email']."</td>
                    <td> 
                    <a href='admin.php?name=".$result['name']."' class='btn'>DELETE</a>
                    </td>
                    </tr>
                    ";
                }
            }
            ?>
        </table>
    </div>

    <div id="printSection">
        <table> 
            <tr>
                <th> NAME</th>
                <th> EMAIL </th>
            </tr>
            <?php
            if ($num > 0) {
                mysqli_data_seek($query, 0); // Reset result pointer to the start
                while ($result = mysqli_fetch_assoc($query)) {
                    echo "
                    <tr>
                    <td>".$result['name']."</td>
                    <td>".$result['email']."</td>
                    </tr>
                    ";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
