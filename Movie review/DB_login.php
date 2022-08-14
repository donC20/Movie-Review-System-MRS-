<?php
session_start();
include 'db.php';
if (isset($_POST['submit'])) {
    if (!empty($_POST['s-username']) && !empty($_POST['s-password']) && !empty($_POST['s-email']) && !empty($_POST['confirm-password'])) {
        $username = $_POST['s-username'];
        $email = $_POST['s-email'];
        $password = $_POST['s-password'];
        $errors = array();
        $display = array();
        $check = "SELECT Username FROM auth WHERE Username = '$username'";
        $checksql = mysqli_query($connection, $check);
        $check_e = "SELECT Email FROM auth WHERE Email = '$email'";
        $checksql_email = mysqli_query($connection, $check_e);
        if (mysqli_num_rows($checksql) > 0) {
            $errors['A'] = "Username already exists!";
            $display['D'] = "block";
        } elseif (mysqli_num_rows($checksql_email) > 0) {
            $errors['A'] = "Email already exists!";
            $display['D'] = "block";
        } else {
            $getcount = "SELECT COUNT(id) AS count FROM auth";
            $count = mysqli_query($connection, $getcount);
            while ($row = $count->fetch_assoc()) {
                $last_id = $row['count'];
            }
            $code = rand(1, 99999);
            $user_id = "USR_" . $code . "_" . $last_id;
            $user_type = "user";
            $query = "INSERT INTO `auth`(`Username`, `Email`, `password`,`userid`,`user_type`) VALUES ('$username','$email','$password','$user_id','$user_type')";
            $run = mysqli_query($connection, $query) or die(mysqli_error($connection));
            if ($run) {
                echo "
                          <script>
                          document.location.href='login.php?name=' + 'login';
                          </script>
                          ";
            }
        }
    }
}

// login cheking

if (isset($_POST['login'])) {
    if (!empty($_POST['username_log']) && !empty($_POST['password_log'])) {
        $log_username = $_POST['username_log'];
        $log_password = $_POST['password_log'];
        $log_check = "SELECT * FROM auth WHERE Username='$log_username' AND password='$log_password'";
        $log_check_sql = mysqli_query($connection, $log_check);

        if (mysqli_num_rows($log_check_sql) === 1) {
            $row = mysqli_fetch_assoc($log_check_sql);
            $_SESSION['Username'] =$row['Username'];
            $_SESSION['user_type'] =$row['user_type'];
            if ($log_username === $row["Username"] && $log_password === $row["password"]) {
                if ($row["user_type"] === "admin") {
                    header('Location: adminpanel.php?login=success');
                    
                } else {
                    header('Location: index.php?login=success');
                   
                }
            } 
        } else {
            $errors['A'] = "Username or password is incorrect.";
            $display['D'] = "block";
        }
    }
}
