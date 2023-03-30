<?php
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('../message.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard | EARIST LOST AND FOUND </title>
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
        <?php include('includes/sidebar.php') ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <?php include('includes/navbar-top.php') ?>
     <div class="container-fluid">
      <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">EARIST LOST AND FOUND DASHBOARD</h1>
    <a href="report.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Users
                            <?php
                        $user_count = "SELECT * FROM users";
                        $user_count_run = mysqli_query($jcon, $user_count);

                        if($user_count_total = mysqli_num_rows($user_count_run))
                        {
                            echo '<h4 class="mb-0">' . $user_count_total . '</h4>';
                        }
                        else
                         {
                            echo '<h4 class="mb-0"> No Data  </h4>';
                        }
                        ?></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7 ">
        <div class="card shadow mb" style="width: 50%;">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                <h6 class="m-2 font-weight-bold text-primary">Update Account</h6>
            </div>
        <?php

                $id = $_GET['user_id'];
                $req = mysqli_query($jcon, "SELECT * FROM users WHERE id = $id");
                $row = mysqli_fetch_assoc($req);
                if(isset($_POST['button']))
                {
                    extract($_POST);
                if(isset($fullname) && isset($password) && isset($role) && isset($email) && $username) {
                    $req = mysqli_query($jcon, "UPDATE users SET fullname='$fullname', password='$password', role_as='$role', email='$email', username='$username'  WHERE id = $id");
                
                    if ($req){

                        $_SESSION['message'] = "Your account is successfully updated";
                    }

                }
                else{
                   $_SESSION['message'] = "Your account was unsuccessfully updated". mysqli_error($jcon);

                }

                }
        ?>
        <form action="" method="POST">
        <div class="mt-3 mb-4 mx-auto d-block w-75">
             <input type="text" class="form-control p-1" name="fullname" value="<?php $row['fullname']?>" placeholder="New Fullname"required>
		</div>
		  <div class="mb-4 mx-auto d-block w-75"> 
            <input type="password" class="form-control p-1" name="password" value="<?php $row['password']?>" placeholder="New Password" required>
        </div>
        <div>
                <select class="form-select mt-3 mx-auto w-75 mb-4" name="role" value="<?php $row['role_as']?>">
                    <option disabled>--SELECT ROLE--</option>
                    <option value="1">Admin</option>
                    <option value="0">Default User</option>
                </div>  
        <div class="mx-auto d-block w-5"> 
            <input type="email" class="form-control mx-auto w-75 mb-4 p-1" name="email" value="<?php $row['email']?>"placeholder="New Email" required>
        </div>
        <div class="mb-4 mx-auto d-block w-75"> 
            <input type="text" class="form-control p-1" name="username" value="<?php $row['username']?>" placeholder="New Username" required>
        </div>
            <input type="submit" value="UPDATE" class="btn btn-success mt-3 mb-3 mx-auto d-block" name="button">
        </form>
        </div>
        
    </div>
    
        </div>
    </div>
</div>
     <?php include('includes/footer.php') ?>