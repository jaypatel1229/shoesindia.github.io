<?php

$conn=new mysqli("localhost","root","","studentdb");
$sql="CREATE TABLE registration(fname VARCHAR(25),lname VARCHAR(25),gender VARCHAR(10),Useremail VARCHAR(50),textpassword VARCHAR(20),textconformpassword VARCHAR(20))";
$conn->query($sql);
$conn->close();
?>