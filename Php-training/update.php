<?php
$connection = "localhost";
$username = "root";
$password = "";
$dbname = "dulieulogin";
$connection = mysqli_connect($connection, $username, $password, $dbname);
if(!$connection){
    die("connection failed: ". mysqli_connect_error());
} 
$username = $_POST['username'];
$password = $_POST['password'];
$id=$_GET['id'];
$query ="UPDATE user1 SET username='$username',pword ='$password' WHERE id='$id'";
if (mysqli_query($connection,$query)){
    echo 'updated';
}else{
    echo 'fail';
}
