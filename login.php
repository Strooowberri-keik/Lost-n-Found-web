<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Login | EARIST Lost and Found</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include('emc-icon.php');?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('imgs/lostnfound.jpg'); background-size: cover; height: 100vh; background-position: center; background-repeat: no-repeat;">
  <main>
  <?php include('message.php'); ?>
  <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh; font-weight: bold;">
      	<form action="pre-login.php" method="POST"
      	      style="width: 400px; background-color: white; border-radius: 18px; height: 70vh;">
      	      <img src="imgs/black.png" alt="logo" class="mx-auto my-auto d-block mt-3  " style="max-width: 35%;">
		<div class="mb-3 text-center">
			<br>
		  <div class="mb-4 mx-auto d-block w-75">
          <input type="text" class="form-control p-2 fa-solid fa-user" name="email" placeholder="Email"required>
		  </div>
		  <div class="mb-2 mx-auto d-block w-75"> 
      <input type="password" class="form-control mb-4 p-2" name="password" placeholder="Password" required>
      <button type="submit" name="login-btn" class="btn btn-primary mt-1 mb-3 w-50">Login</button>
				  <p style="color: black; font-weight: lighter"> Don't have an account? <a href="./register.php">Register</a></p>
		  </div>
		</form>
      </div>
  </main>
    <script src="scripts/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>