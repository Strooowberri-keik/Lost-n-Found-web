<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="emc_lnf_db";

    $jcon = mysqli_connect("$host" , "$username" , "$password" , "$database"); 

    if(!$jcon)
    {
    header("Location:error/dberror.php");
    die();

    }


?>
