<?php


?>
<!DOCTYPE htm>

    <head>
<link rel="stylesheet" href="ad.css">
    </head>
    <body>
<div class="form-container">
    <form action="adsign.php" method="POST">
    <h1>register now</h1>
    <?php
    if(isset($_GET['error'] )){
        if($_GET['error'] = "emptyfields"){
            echo '<p class = "error"> FILL IN ALL FIELDS</p>';

        }
        else if($_GET['error'] = "usernametake"){
            echo '<p class = "error"> USER NAME TAKEN</p>';
            }

    }
    else if(isset($_GET['registerd'] )){
        if($_GET['registerd'] = "signupsuccess"){
            echo '<p class = "error"> SIGN UP SUCCESSFUL</p>';
        }
    }
    ?>
    <label for ="user">NAME</label><br>
    <input type="text" name= "name"  placeholder="enter your name"> 
    <label for ="user">EMAIL</label><br>
    <input type="email" name= "email"  placeholder="enter your email"> 
    <label for ="password" >password</label>
    <input type="password" name= "password" placeholder="enter your password">
   
   
    <button id="but" type ="submit" name ="submit"> REGISTER</button>
   
    </form>
    </div>
</body> 
    
