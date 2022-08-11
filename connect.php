<?php

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Database connection
    $conn = new mysqli('localhost','root','','fb');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection failed: ". $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into credentials(f_name, l_name, username, pass) values(?,?,?,?)");
        $stmt->bind_param("ssss",$f_name, $l_name, $username, $password);
        $stmt->execute();
        echo "Operation successful";
        $stmt->close();
        $conn->close();
    }

?>