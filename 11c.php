<?php

$name=$_POST['name'];
$eno=$_POST['eno'];	
$email=$_POST['email'];

$conn=new mysqli("localhost","root","","studentdb");
$sql="insert into registration(name,eno,email) 
values('$name','$eno','$email')";
$conn->query($sql);
echo "insertion successfull";

?>