<?php

    $conn = mysqli_connect('localhost', 'root', '', 'prepared_statement');
    if(!$conn){
        echo "not connected to database";
    }

?>