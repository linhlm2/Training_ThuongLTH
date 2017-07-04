<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

//create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$connection){
    die("connection failed: ". mysqli_connect_error());
}
if(mysqli_num_rows($result)>0) {
$sql = "SELECT maNV, hoten, ngaysinh, quequan FROM nhanvien";
$result = (mysqli_query($connection, $sql));
if(mysqli_num_rows($result)>0){
    while($row= mysqli_fetch_assoc($result)){
        echo "Mã NV: " . $row["maNV"]. "Họ Tên: ". $row["hoten"]. "Ngày Sinh: ". $row["ngaysinh"]. "Quê Quán: ". $row["quequan"]."<br>";
    }
}else{
       echo "0 result"; 
    }
    echo "suscess";
}else{
    echo "fails";
}



