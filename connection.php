<?php

$servername="localhost";
$username="root";
$password="Dar";
$dbname="derma_info";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo"connection success";
}
else{
    echo"connection failed";
}
?>