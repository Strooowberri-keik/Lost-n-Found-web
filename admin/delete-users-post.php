<?php
session_start();
include('dbcon.php');

if(isset($_POST['delete_psa'])) {
    $user_id = $_POST['psa_id'];

    $lnf_query = "DELETE FROM posts WHERE id ='$user_id'";
    $lnf_query_run = mysqli_query($jcon, $lnf_query);

    if($lnf_query_run) {
        $_SESSION['message'] = "Post has been deleted successfully!";
        header("Location: view-post.php");
    }
    else {
        {
            $_SESSION['message'] = "Post has been deleted unsuccessfully!". mysqli_error($jcon);
        }
    }
}
?>