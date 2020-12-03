<?php

$name=$_POST['name'];
$eno=$_POST['eno'];	
$email=$_POST['email'];

$conn=new mysqli("localhost","root","","studentdb");
$sql="delete from registration where
name='$name' and eno='$eno' and email='$email'";
if($conn->query($sql))
echo "deletion successfull";
else
	echo "wrong name or er no";
?>