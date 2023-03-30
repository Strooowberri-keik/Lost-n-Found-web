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
    <title>Dashboard | EARIST LOST AND FOUND</title>
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
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
                        ?>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7 ">
        <div class="card shadow mb-4" style="width: 120%;">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                <h6 class="m-2 font-weight-bold text-primary">Manage Users</h6>
            </div>
  
            <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Role as</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php



                $user_list = "SELECT * from users";
                $query_run = mysqli_query($jcon, $user_list);
                
                    while($row = mysqli_fetch_array($query_run)) {
                    
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['fullname']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['role_as']?></td>

                    <form action="delete-account.php" method="POST">
                        <input type="hidden" name="user_id" value="<?php echo $row['id']?>">
                        <th><input type="submit" name="delete_account" class="btn btn-danger" value="DELETE"></th>
                    </form>
                    <form action="update-user-acc.php" method="GET">
                        <input type="hidden" name="user_id" value="<?php echo $row['id']?>">
                        <th><input type="submit" name="update_account" class="btn btn-primary" value="UPDATE"></th>
                    </form>
                </tr>
                <?php }?>
</table>
        </div>
        
    </div>
    
        </div>
    </div>
</div>
     <?php include('includes/footer.php') ?>