<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="ad.css">
</head>
<body>
<section class="signup-form">

<div class="form-container">
    

<form action="adconfirmation.php" method="post">
<div class="but">
<h1>Log In</h1>
<?php
    if(isset($_GET['error'] )){
        if($_GET['error'] == "emptyfields"){
            echo '<p class = "error"> FILL IN ALL FIELDS</p>';

        }
        else if($_GET['error'] == "wrongpassword"){
            echo '<p class = "error"> WRONG PASSWORD/USER NAME</p>';
            }

    }
    else if(isset($_GET['registerd'] )){
        if($_GET['registerd'] = "signupsuccess"){
            echo '<p class = "error"> SIGN UP SUCCESSFUL</p>';
        }
    }
    ?>
<input type="text" name="name" placeholder="name">

<input type="password" name="password" placeholder="Password ...">
<button id="button" type="submit" name="login">Log In</button>
<br>
<br>

</form>

</div>
</section>
</body>
</html>