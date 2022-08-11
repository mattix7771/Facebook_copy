<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    //Database connection
    $conn = new mysqli('localhost','root','','fb');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection failed: ". $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into test(username, password) values(?,?)");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        echo "Operation successful";
        $stmt->close();
        $conn->close();
    }

?>