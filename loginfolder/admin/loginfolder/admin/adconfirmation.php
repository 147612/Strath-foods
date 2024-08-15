<?php


    require 'adbh.php';

    $name = $_POST ['name'];
    $password = $_POST ['password'];
    
    if( empty($password) || empty($name) ){
        header("location:adminlogin.php?error=emptyfileds");
        
             }  
    else{
        $sql ="SELECT * FROM admin_table WHERE name =?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt ,$sql)){
            header("location:admin.php?error=sqlerror") ;   
exit();

        }
        else{
            mysqli_stmt_bind_param( $stmt,"s",$name);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result( $stmt);
            if($row = mysqli_fetch_assoc($result)){
            $passwordCheck = password_verify($password ,$row['password']);
            if($passwordCheck == false){
                header("location:admin.php?error=wrongpassword") ;
                echo "wrong password";
                exit();
            }
            else if($passwordCheck == true){
            session_start();
            $_SESSION ['name'] = $row['name'];
            header("location:../order1.php?LOGINSUCCESSFUL") ;
                exit();
            }
        
            else {
                header("location:admin.php?error=wrongpassword") ;
                exit();

            }
            
        }
        
            else{   
                header("location:admin.php?error=NOUSERFOUND") ;
            }
        }
        

        }
    
    
