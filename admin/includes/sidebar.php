<?php
session_start();
include('dbcon.php');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #0A2647;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <p class="sidebar-brand-text mt-3" style="font-size: 12px;"> <?= $_SESSION['auth_user']['user_name'];?></p>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="view-user.php">
                <i class="bi bi-people"></i>
                    <span>View Registered Users</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view-post.php">
                <i class="bi bi-view-list"></i>
                    <span>View Post(s)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view-link.php">
                <i class="bi bi-link-45deg"></i>
                    <span>View Link(s)</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->