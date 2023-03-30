<?php
session_start();
include('dbcon.php');

if(isset($_POST['delete_account'])) {
    $user_id = $_POST['user_id'];

    $user_account_query = "DELETE FROM users WHERE id ='$user_id'";
    $user_account_query_run = mysqli_query($jcon, $user_account_query);

    if($user_account_query_run) {
        $_SESSION['message'] = "User Account has been deleted successfully!";
        header("Location: view-user.php");
    }
    else {
        {
            $_SESSION['message'] = "User Account has been deleted unsuccessfully!". mysqli_error($con);
        }
    }
}
?>
