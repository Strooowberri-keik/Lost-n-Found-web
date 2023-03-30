<?php
session_start();
include('admin/dbcon.php');


  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] ==='on') {
    $url = "https;//";
  }
  else {
    $url = "https://";  
    $url .= $_SERVER['REQUEST_URI'];
    $url;
  }
$page = $url;
$sec = "10";
?>

<!doctype html>
<html lang="en">

<head>
  <meta http-equiv="refresh" content="<?php echo $sec;?>" URL="<?php echo $page;?>">
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include('emc-icon.php');?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
  <header>
  <?php include('assets/home-navbar.php');?>
  </header>
  <main>
 <?php include('message.php'); ?>

    

<?php 

$query = "SELECT * FROM posts";
$query_run = mysqli_query($jcon, $query);

while($row = mysqli_fetch_array($query_run))
{
  ?>
  <div class="card mt-4 mx-auto" style="width: 35%;">
  <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="Image" style= " width: 100%; height: 90%;">'; ?>
  <div class="card-body">
    <p class="card-title">
      <b><?php echo $row['post_username']?></b> <?php echo $row['create_post'] ?></p>
    <p class="card-text" style="text-align: justify;">
    <p class="card-text mb-2"><small class="text-muted"> <?php echo $row['location']?> <?php echo $row['date_created']?> </small>
    <a href="<?php echo $row['link']?>"><button type="button" class="btn btn-primary mx-auto d-block w-100 mt-3">Message</button></a>
  </div>
</div>
<?php } ?>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>