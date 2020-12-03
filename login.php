<?php
include('db_con.php');

$uname = $_POST['uname'];
$psw = $_POST['psw'];

$find_email = "SELECT * FROM loginwithjerry WHERE email = '$useremail'";
$query = mysqli_query($conn, $find_email);

$email_count = mysqli_num_rows($query);

if ($email_count) {
    $email_pass = mysqli_fetch_assoc($query);
    $userpassword = $email_pass['password'];
    $varifiedpass = password_verify($passwrd, $userpassword);
    if ($varifiedpass) {
        $_SESSION['fname'] = $email_pass['fname'];
        echo "okey welcome man";
        
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
            location.replace('registration.html');
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
