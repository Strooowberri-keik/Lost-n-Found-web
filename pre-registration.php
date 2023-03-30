<?php
session_start();
include('admin/dbcon.php');

if(isset($_POST['register-btn'])) 
{
    $fullname = mysqli_real_escape_string($jcon,$_POST['fullname']);
    $email = mysqli_real_escape_string($jcon,$_POST['email']);
    $username = mysqli_real_escape_string($jcon, $_POST['username']);
    $password = mysqli_real_escape_string($jcon,$_POST['password']);
    $confirm_password = mysqli_real_escape_string($jcon,$_POST['confirm_password']);

    if($password == $confirm_password)
    {
        $checkemail = "SELECT email FROM users WHERE email = '$email'";
        $checkemail_run = mysqli_query($jcon, $checkmail);

        if(mysqli_num_rows($checkemail_run) > 0) {
            $_SESSION['message'] = "Email Already Exist!";
            header("Location: register.php");
            exit(0);
        }
        else
        {
            $user_query = "INSERT INTO users (fullname, email, username, password) VALUES('$fullname', '$email','$username','$password')";
            $user_query_run = mysqli_query($jcon, $user_query);
            
            if($user_query_run)
            {
                $_SESSION['message'] = "Registered Successfully!";
                header("Location: login.php");
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Something went wrong!";
                header("Location: register.php");
                exit(0);
            }
        }
    }
    else {
        $_SESSION['message'] = "Password and Confirm Password does not match";
        header("Location: register.php");
    }
}
else
{
    header("Location: register.php");
    exit(0);
}
    
    ?>