<?php
session_start();
include('../admin/dbcon.php');
?>
<!doctype html>
<html lang="en">

<head>
  <title>Profile</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2GWZcOS-F-wRt6zE7arBYWY1vSkrCMpgY&libraries=places"></script>

</head>

<body>
  <header>
  <?php include('../assets/profile-navbar.php'); ?>
  </header>
  <main>
  <br>
  <div class="row m-3 mx-auto" style="width: 55%;">
  <div class="col-sm-6 mx-auto d-block">
    <div class="card p-5">
      <div class="card-body">
        <h5 class="card-title">Report Lost or Found item</h5>
        <p class="card-text"> Such as:</p>
        <p class="card-text"> • Personal items:</p>
        <p class="card-text"> • Clothing Accessories:</p>
        <p class="card-text"> • Electronic or Gadgets:</p>
        <p class="card-text"> • Sporting Equipment:</p>
        <p class="card-text"> • Documents:</p>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Click Here</button>
      </div>
    </div>
  </div>
         
        <form action="../post.php" method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
      <div class="modal-header">

           <h1 class="modal-title fs-5" id="exampleModalLabel">Hi, <?= $_SESSION['auth_user']['user_name'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <br>
      <p style="margin-left: 60px;">Description:</p>
           <textarea class="w-75 mx-auto d-block mb-3" name="post" required></textarea>
      <div class="mb-4 mx-auto d-block w-75">
          <input type="file" class="form-control p-3" name="image" placeholder="Item(s)"required>
		  </div>
      <div class="mb-4 mx-auto d-block w-75">
          <input type="text" class="form-control p-3" name="location" placeholder="Location"required>
		  </div>
      <div class="mb-4 mx-auto d-block w-75">
          <input type="url" class="form-control p-3" name="link" placeholder="Please provide a messenger link"required>
		  </div>
      
      <div class=" w-75">
        <label>
          <input type="hidden" name="post_username" value="<?= $_SESSION['auth_user']['user_name'];?>" required>
        </label>
        </div>
      

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary mx-auto d-block w-100" name="post-btn" value="Upload">Post</button>
      </div>
      </form>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
  </main>

  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
