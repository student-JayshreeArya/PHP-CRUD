<?php
$servername = "localhost:3306";
$username   = "root";
$password   = "";
$dbname     = "responsiveform";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    //echo "Connection Successful";
}
else{
    echo "Connection Failed" .mysqli_connect_error();
}
?>