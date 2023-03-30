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

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4 " style="width: 50%;">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                <h6 class="m-2 font-weight-bold text-primary">Manage Links</h6>
            </div>
            <main>
                
        <?php include('../message.php'); ?>
        <?php 

        $query = "SELECT * FROM posts";
        $query_run = mysqli_query($jcon, $query);

        while($row = mysqli_fetch_array($query_run))
        {
        ?>
        <ul class="list-group">
         <li class="list-group-item"><a href="<?php echo $row['link']?>"><?php echo $row['link']?></a></li>
        </ul>
    <form action="delete-users-link.php" method="POST">
                    <input type="hidden" name="u-link" value="<?php echo $row['id']?>">
                    <th><input type="submit" name="delete_link" class="btn btn-danger mx-auto d-block mt-3 mb-5" value="DELETE"></th>
                </form>
        <?php } ?>
  </main>
        </div>
    </div>
</div>
    </div>
</div>

     <?php include('includes/footer.php') ?>