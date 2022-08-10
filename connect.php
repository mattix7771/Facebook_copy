<?php
/*
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Database connection
    $conn ? new mysqli('localhost','root','','fb');
    if($conn->connect_error){
        die('Connection failed: ' $conn->connect_error)
    }
    else{
        $stmt = $conn->prepare("insert into test(username, password) values(?,?)");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        echo "Operation successful";
        $stmt->close();
        $conn-close();
    }*//*

    // database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','fb');

// get the post records
$username = $_POST['username'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `test` (`username`, `password`) VALUES ($username, $password)";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}*/

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo "hdioewf";

?>