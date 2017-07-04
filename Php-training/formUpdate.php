<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$servername ='localhost';
$username ='root';
$password = '';
$username_return ='';
$password_return ='';
$dbname = 'dulieulogin';
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(!$connection){
    die("connection failed: ". mysqli_connect_error());
} 
$id=$_GET['id'];
$sql = "SELECT * FROM user1 WHERE id =".$id."";
$result = mysqli_query($connection, $sql);
if(mysqli_num_rows($result)>0){
     while ($row = mysqli_fetch_assoc($result)){
    $username_return = $row['username'];
    $password_return = $row['pword'];
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form update</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <fieldset style="width: 330px">
            <legend><b>Form Insert Data</b></legend>
            <form method="POST" action='http://localhost/Php-training/update.php?id=<?=$id?>'>
            <table border="0">
                <tr>
                    <td>Username </td>
                    <td><input type = "text" name ="username" value="<?=$username_return;?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input tyle="password" name="password" value="<?=$password_return;?>"></td>
                </tr>
                <tr>
                    <td><button input tyle="submit" VALUE <a href="http://localhost/Php-training/update.php"></a>Update</button></td>
                </tr>
            </table>
            </form>
        </fieldset>
    </body>
</html>
