<?php
session_start();

function getPortalLink($sessionKey, $loggedInPage, $loginPage)
{
  return isset($_SESSION[$sessionKey]) && $_SESSION[$sessionKey] === true ? $loggedInPage : "$loginPage?destination=$loggedInPage";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'head.php'; ?>
  <title>School Management System: CyberAfridi</title>
</head>

  <header id="header">
  <nav class="navbar navbar-expand-lg py-0 mt-0">
  <div class="container-fluid">
    <div class="row w-100 d-flex align-items-center">
      <!-- Left Navigation Links -->
      <div class="col-3 d-flex justify-content-start">
        <ul class="navbar-nav flex-row gap-3">
          <li class="nav-item"><a class="nav-link btn active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link btn ms-2" href="about.php">About</a></li>
        </ul>
      </div>

      <!-- Logo -->
      <div class="col-4 d-flex justify-content-start">
        <div class="header-logo py-0">
          <div>
          <a class="nav-brand" href="index.php">
            <img class="border-0 mh-50 mw-50 co-header-transp-logo" src="public/images/e-logo.png" alt="CyberAfridi Logo">
          </a>
        </div>
        </div>
      </div>

      <!-- Right User Portals Links -->
      <div class="col-5 d-flex justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="btn-primary btn me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo getPortalLink('parent_logged_in', 'parent/dashboard.php', 'views/auth/login.php?role=parent'); ?>">Login as Parent</a></li>
              <li><a class="dropdown-item" href="<?php echo getPortalLink('staff_logged_in', 'staff/dashboard.php', 'views/auth/login.php?role=staff'); ?>">Login as Staff</a></li>
              <li><a class="dropdown-item" href="<?php echo getPortalLink('teacher_logged_in', 'teacher/dashboard.php', 'views/auth/login.php?role=teacher'); ?>">Login as Teacher</a></li>
              <li><a class="dropdown-item" href="<?php echo getPortalLink('student_logged_in', 'student/dashboard.php', 'views/auth/login.php?role=student'); ?>">Login as Student</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="btn-primary btn me-2" href="views/auth/register.php">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
  </header>