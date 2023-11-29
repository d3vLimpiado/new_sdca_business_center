<?php 
  $url = "/sdca_business_center/";
  $pageTitle = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo $url ?>styles/style.css" />
  <title>SDCA Business Center<?php  
  if (strlen($pageTitle)) {
    echo " | " . $pageTitle;
  }
  ?></title>
</head>
<body>
  <header class="headerPrimary">
    <div class="topnav">
      <div class="logo">
        <div class="logoContainer">
          <img src="<?php echo $url ?>assets/images/business_center_logo.png" alt="SDCA Business Center Logo" />
        </div>
        <span class="logoTitle">SDCA Business Center</span>
      </div>
      <div class="searchBar">
        <input class="searchBarInput" />
        <i class="searchBarIcon"></i>
      </div>
      <div class="user">
        <div class="userCart">
          <i class="userCartIcon"></i>
          <span class="userCartText">Cart</span>
        </div>
        <div class="userSec">
          <i class="userSecIcon"></i>
          <span class="userSecText">Login</span>
        </div>
      </div>
    </div>
    <nav class="nav">
      <a href="<?php echo $url ?>" class="nav-link">Home</a>
      <a href="<?php echo $url ?>pages/feature.php" class="nav-link">Books</a>
      <a href="<?php echo $url ?>pages/uniforms.php" class="nav-link">School Uniforms</a>
      <a href="<?php echo $url ?>pages/supplies.php" class="nav-link">School Supplies</a>
      <a href="<?php echo $url ?>pages/support.php" class="nav-link">Customer Support</a>
    </nav>
  </header>