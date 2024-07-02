<?php
session_start();
function adminauth(){
  if(!isset($_SESSION['aemail']) && !isset($_SESSION['adminloged'])){
    header('Location: ../index.php');
    exit();
  }
}
adminauth();
function debug($variable){
  echo "<pre>";
  print_r($variable);
  echo "</pre>";
}
$AdminID=$_SESSION['adminloged'];

include "conn.php";

$qry="SELECT * FROM admin where id='$AdminID'";
$data=mysqli_query($conn,$qry);
$arr=mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

  <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
  <!-- header and sidebar start -->
  <div class="container-fluid">
    <div class="row">
      <nav class="bg-warning mb-2 col-md-12 py-2">
        <a class="navbar-brand fw-bold text-white" href="#"><h2 class="">EasyTableService</h2></a>
      </nav>
    </div>
    <div class="row">
      <div class="sidebar col-md-2">
        <div class="user-details">
          <img src="../img/team-1.jpg" class="profile-pic mb-1" alt="Profile Picture">
          <h6><?php echo $arr['email'];?></h6>
          <p><b>Role: </b>Admin</p>
        </div>
        <ul class="nav flex-column">
          <!-- <li class="nav-item ">
            <a class="nav-link active animsition-link" href="aDashboard.php">Dashboard</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  animsition-link" href="aWriteBlog.php">New Post</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link animsition-link" href="aAllOrders.php">All Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link animsition-link" href="aMenu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link animsition-link" href="../index.php">Logout</a>
          </li>
        </ul>
      </div>



