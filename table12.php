<?php

$conn=new mysqli("localhost","root","","studentdb");
$sql="CREATE TABLE table12
(name VARCHAR(25),eno INT(15),email VARCHAR(50),city VARCHAR(15),contact BIGINT(10))";
$conn->query($sql);
$conn->close();
?>