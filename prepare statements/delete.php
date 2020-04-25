<?php

    require_once('db.php');

    //Templete

    $sql = "DELETE FROM users  WHERE user_id = ?";


    // CREATE Prepared statement
    $stmt = mysqli_stmt_init($conn);

    //Preperation
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "Failed";
    }else{
        $user_id = 1;
        
       //Binding
        mysqli_stmt_bind_param($stmt, "i",  $user_id);

        //Execute statement
        mysqli_stmt_execute($stmt);
 
    } 

?>