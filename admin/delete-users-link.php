<?php
session_start();
include('dbcon.php');

if(isset($_POST['delete_link'])) {
    $user_id = $_POST['u-link'];

    $link_query = "DELETE FROM posts WHERE id ='$user_id'";
    $link_query_run = mysqli_query($jcon, $link_query);

    if($link_query_run) {
        $_SESSION['message'] = "link has been deleted successfully!";
        header("Location: view-link.php");
    }
    else {
        {
            $_SESSION['message'] = "link has been deleted unsuccessfully!". mysqli_error($jcon);
        }
    }
}
?>