<?php

$uname=$_POST['uname'];
$psw=$_POST['psw'];	



$conn=new mysqli("localhost","root","","studentdb");
$sql="insert into Login(uname,psw) 

values('$uname','$psw')";
$conn->query($sql);
echo "Login successfully";

?>
<p><a href="../Project-wt/Project.html"> Go to Login Page </a> </p>