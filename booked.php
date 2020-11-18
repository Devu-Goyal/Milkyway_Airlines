<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Milky_way Airline</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><?php session_start(); echo "Welcome ". $_SESSION['username']."!"?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo  $_SESSION['username']?></a>
      </li>
  </ul>
  </div>
  </div>
</nav>
<div class="container mt-10">
<hr>
<h3>Boarding-Pass</h3>
<hr>
</div>
  <?php
  #session_start();
  require_once "config.php";
  $fid=$_GET['fid'];
  $uid=$_SESSION["id"];
  $sql = "SELECT * FROM fights where fid='$fid'";
  $sqlquery="INSERT INTO booking (fid,id) VALUES ($fid,$uid)";
  $query = mysqli_query($conn, $sql);
  $qury=mysqli_query($conn, $sqlquery);
  echo "<table class='table table-bordered table-striped table-hover'>
  <thead>
  </thead>";
  while($resu=mysqli_fetch_array($query))
 {
  echo '<div class="container mt-2">
  <table class="table">
  <thead>
  <tr>
      <th>USERNAME</th>
      <td>';echo strtoupper($_SESSION['username']);echo'</td>
    </tr>
    <tr>
      <th>SOURCE</th>
      <td>';echo strtoupper($_SESSION['airport_source']);echo'</td>
    </tr>
  </thead>
  <tbody>
  <tr>
  <th>DESTINATION</th>
  <td>';echo strtoupper($_SESSION['airport_destination']);echo'</td>
</tr>
<tr>
<th>FIGHT NO.</th>
<td>';echo $resu['sno'];echo'</td>
</tr>
<tr>
  <th>Duration</th>
  <td>';echo $resu['duration']." Hours";echo'</td>
</tr>
<tr>
  <th>CLASS</th>
  <td>';echo ucfirst($resu['class']);echo'</td>
</tr>
<tr>
  <th>NAME</th>
  <td>';echo ucfirst($resu['name']);echo'</td>
</tr>
<tr>
  <th>PRICE</th>
  <td>';echo $resu['price'];echo'</td>
</tr>
  </tbody>
</table>
</div>';
  }

mysqli_close($conn);

?>
<div class="container mt-10">
<hr>
<h3>Thanks for chossing Us</h3>
<hr>
<div class="main-button">
<button class="ticket-print" onclick="window.print();">PRINT</button>
                    <a href="welcome.php">Main Menu</a>
                    <a href="logout.php">LOGOUT</a>
  </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>