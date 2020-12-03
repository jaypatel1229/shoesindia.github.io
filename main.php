<?php
    session_start();
    include('db_con.php');       
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $useremail = $_POST['useremail'];
        $pass = $_POST['txtPassword'];
        $getquery = "SELECT * FROM loginwithjerry WHERE email = '$useremail'";
        $res = mysqli_query($conn,$getquery);
        $no = mysqli_num_rows($res);
        if ($no) {
            ?>
            <script>
                alert("Email Id Alredy Exist");
                location.replace("Login.html");
            </script>
            <?php
        }
        else {
            $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
            $query = "INSERT INTO loginwithjay (fname, lname, useremail, textpassword,)
            VALUES ('$fname', '$lname', '$useremail', '$hashedpass' 'textpassword')";
            mysqli_query($conn, $query);
            ?>
            <script>
                alert("user added");            
            </script>
            <?php
            $_SESSION['fname'] = $fname;
            ?>
            <script>
            location.replace("Login.html");
            </script>
            <?php
            
        }
?>
