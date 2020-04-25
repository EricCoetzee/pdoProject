<?php

    require_once('db.php');

    //Templete

    $sql = 'INSERT INTO users( username, user_email, user_password)';
    $sql .='VALUES(?, ?, ?)';

    // CREATE Prepared statement
    $stmt = mysqli_stmt_init($conn);

    //Preperation
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "Failed";
    }else{
        $username = 'Eric';
        $user_email = 'eric@email.com';
        $user_password = '1234';
        
       //Binding
        mysqli_stmt_bind_param($stmt, "sss",  $username, $user_email, $user_password);

        //Execute statement
        mysqli_stmt_execute($stmt);
 
    } 

    ?>