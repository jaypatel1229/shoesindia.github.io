<?php
include('db_con.php');

$email = $_POST['useremail'];
$passwrd = $_POST['textpassword'];

$find_email = "SELECT * FROM loginwithjerry WHERE email = '$useremail'";
$query = mysqli_query($conn, $Useremail);

$email_count = mysqli_num_rows($query);

if ($email_count) {
    $email_pass = mysqli_fetch_assoc($query);
    $userpassword = $email_pass['useremail'];
    $varifiedpass = password_verify($passwrd, $userpassword);
    if ($varifiedpass) {
        $_SESSION['fname'] = $psw['fname'];
        echo "okey welcome man";
        // header("../index.php");
        ?>
        
        <script>
            alert("Login success...")
            location.replace('../Project-wt/project.html');
        </script>
        <?php
    }
    else {
        ?>
        <script>
            alert('Enter right Password');
            location.replace('login.html');
        </script>
        <?php
    }
}
else {
    ?>
     <script>
            alert('User Not Found Please Register');
            location.replace('registration.html');
        </script>
        <?php
}


?>
