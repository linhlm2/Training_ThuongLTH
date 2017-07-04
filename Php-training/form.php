<?php
$user = null;
if(isset($_GET['f']) && function_exists($_GET['f'])) {
    if(isset($_GET['id'])) {
        $_GET['f']($_GET['id']);
    }
}
function delete($id) 
{
    // delete user
    $connection = connectDB();
    $sql = "DELETE FROM user1 WHERE id=".$id;
    $result = mysqli_query($connection, $sql);
    $GLOBALS['user'] = $id;
    getAllUser($connection);
}
function insert($id)
{
    //insert user
    $connection = connectDB();
    $sql = "INSERT INTO user1 WHERE id=". $id;
    $result = mysqli_query($connection, $sql);
    $GLOBALS['user'] = 1;
    getAllUser($connection);
}

function checkAdmin($data, $connection) 
{
    $sql = "SELECT *FROM user1 WHERE username = '".$data["username"]."' AND pword='".$data["password"]."' AND admin=1";
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result)>0){
        return true;
    }
    return false;
}

function getAllUser($connection) 
{
    $sql1 = "SELECT * FROM user1 ";
    $result = mysqli_query($connection, $sql1);
    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "ID: ".$row["id"]. "username: ".$row["username"]. "Password: ".$row["pword"]. "admin: ". $row["admin"]." <a href ='http://localhost/Php-training/form.php?f=delete&id=".$row['id']."'>Delete</a> "." <a href ='http://localhost/Php-training/formUpdate.php?f=update&id=".$row['id']."'>Update</a> "."<br>";
        }
    }
    echo "<form method ='POST' action='http://localhost/Php-training/formupdate.html'>";
    echo "<form method='POST' action='http://localhost/Php-training/Form-login/forminsert.html'>";
    echo "<button type='submit'>Insert</button></br>";
    echo "<a href='logout.php' action>Logout</a>";
    echo "</form>";
}
function connectDB()
{
    $servername ="localhost";
    $username ="root";
    $password = "";
    $dbname = "dulieulogin";
    return mysqli_connect($servername,$username,$password,$dbname);
}

if (isset($_POST['username'])) {
    $user = $_POST['username'];
}
if($user) {
    $connection = connectDB();
    //check connection
    if(!$connection){
        die("connection failed: ". mysqli_connect_error());
    }
    if(isset($_POST['username'])) {
        if(checkAdmin($_POST, $connection)){
            getAllUser($connection);
        } else {
            echo "login fail";  
        }
    }
} //xong


