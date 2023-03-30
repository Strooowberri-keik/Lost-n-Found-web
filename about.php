<?php
session_start();
include('admin/dbcon.php');
?>
<!doctype html>
<html lang="en">


<head>
  <title>About | EARIST Lost and Found</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include('emc-icon.php');?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>
</head>

<body style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('imgs/lostnfound.jpg'); background-size: cover; height: 135vh; background-position: center; background-repeat: no-repeat;  ">
  <main>
 <div class="logout-icon pt-3 px-5" style="font-size: 20px;">
  <a href="index.php"><p><i class="bi bi-box-arrow-left"></i> Back to home </p></a>
  <img src="imgs/magnifying.png" style="max-width: 15%; margin: auto; display: block;" >
 </div>
            <p class="display-5 text-light text-center"> ABOUT EARIST LOST AND FOUND</p>
            <p class="display-3 text-light p-4" style="text-align:justify; font-size: 30px;">EARIST Lost and Found application is a digital platform that helps people locate and recover
                 lost items in a specific area which the EARIST-Manila Campus. The application allows users to post a description of the lost item, 
                 its location, and a contact number. Other users can then search for the item and contact the person
                 who posted the listing if they have found it. The application can also send notifications to users
                 when a new listing is posted that matches the description of an item they have lost. This can help
                 increase the chances of recovering lost items and reuniting them with their rightful owners.</p>



            <p class="pt-2"><div class="arial text-center text-light">&copy;</span>
            <script type="text/javascript">
            document.write(new Date().getFullYear());
            </script> EARIST Lost & Found</p>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>