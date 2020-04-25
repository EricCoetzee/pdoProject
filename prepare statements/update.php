<?php

    require_once('db.php');

    $sql = "UPDATE users SET username = ?, user_email = ?, user_password = ? WHERE user_id = ?";

    // CREATE Prepared statement
    $stmt = mysqli_stmt_init($conn);

    //Preperation
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "Failed";
    }else{
        $username = 'Maxine';
        $user_email = 'maxine@email.com';
        $user_password = '12345678';
        $user_id = 2;
        
       //Binding
        mysqli_stmt_bind_param($stmt, "sssi",  $username, $user_email, $user_password, $user_id);

        //Execute statement
        mysqli_stmt_execute($stmt);
 
    } 
?>