<?php
$conn=new mysqli("localhost","root","");
$sql="CREATE DATABASE StudentDB";
$conn->query($sql);
$conn->close();
?>