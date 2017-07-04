<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "dulieulogin";
//create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if(!$connection){
    die("connection failed: ". mysqli_connect_error());
}
$username= mysqli_real_escape_string($connection,$_POST["username"]);
$password = mysqli_real_escape_string($connection,$_POST["password"]);
$sql = "INSERT INTO user1 (username, pword) VALUES ('$username', '$password')";
if(mysqli_query($connection, $sql)){
    echo 'records added successfully';
}else{
    echo 'Error: could not able to excute $sql.' . mysqli_error($connection);
}
$connection->close();

