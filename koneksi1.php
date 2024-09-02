<?php
$conn=mysqli_connect("localhost","root","","pekerjaan");
if(mysqli_connect_errno()){
    printf("connect failed: %s\n", mysqli_connect_errno());
    exit();
} 
?>