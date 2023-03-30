<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../imgs/magnifying.png" alt="logo" class="px-3  "style="max-height: 50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 1000px;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="../home.php">Home</a>
        </li>
        <?php if(isset($_SESSION['auth_user'])) :?>
        <li class="nav-item dropdown">
          <a class="nav-link text-light" href="#" role="button" aria-expanded="false">
            <?= $_SESSION['auth_user']['user_name'];?>
          </a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>