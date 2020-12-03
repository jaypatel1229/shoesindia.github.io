<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];	
$ans=$_POST['ans'];
$useremail=$_POST['useremail'];
$txtPassword=$_POST['txtPassword'];	
$txtConfirmPassword=$_POST['txtConfirmPassword'];

$conn=new mysqli("localhost","root","","studentdb");

	$sql="insert into registration(Firstname,LastName,Gender,email,password,conformpassword)    
values('$fname','$lname','$ans','$useremail','$textPassword','$txtConfirmPassword')";
$conn->query($sql);
echo "insertion successfull";
?>
<p><a href="Login.html"> Go to Login Page</a></p>