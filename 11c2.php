<?php

$name=$_POST['name'];
$eno=$_POST['eno'];	
$email=$_POST['email'];

$conn=new mysqli("localhost","root","","studentdb");
$sql="update registration set email='$email' where
name='$name' and eno='$eno'";
if($conn->query($sql))
echo "update successfull";
else
	echo "wrong name or er no";
?>