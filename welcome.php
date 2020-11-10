<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Milky Way</title>
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
<div class="container mt-4">
<hr>
<h2>Hey!!</h2> 
<h3>Milky Way Airline welcomes you On-Broad</h3>
<hr>
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Source</label>
    <input type="text" name="source" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Source">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Destination</label>
    <input type="text" name="destination" class="form-control" id="exampleInputPassword1" placeholder="Enter Destination">
  </div>
  <button type="submit" class="button">Search</button>
</form>
<?php
#session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
  { header("location: welcome.php");
}
require_once "config.php";
$source = $destination=$sno=$time=$name=$class=$id=$raj="";
$s=$d=$sn=$na=$cl=$ti="";
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
  if(empty(trim($_POST['source'])) || empty(trim($_POST['destination'])))
  {
      $err = "Please enter source + destination";
  }
  else{
      $source = trim($_POST['source']);
      $destination = trim($_POST['destination']);
  }

if(empty($err))
{
  $sql = "SELECT * FROM search WHERE source = '$source' and destination='$destination'";
  $search = mysqli_query($conn, $sql);
  $flag=0;

  $i=0;
  echo "<br>";
  echo "<hr>";
  echo "<h3>Connecting Flights</h3>";
  echo "<hr>";
  echo "<table class='table table-bordered table-striped table-hover'>
      <thead>
      <tr>
        <th>SOURCE</th>
        <th>DESTINATION</th>
        <th>SNO</th>
        <th>TIME</th>
        <th>CLASS</th>
        <th>NAME</th>
        <th></th>
      </thead>";
  while($row=mysqli_fetch_array($search))
  {
    echo "<tbody><tr>";
    $flag=1;
    echo "<td>".$row['source']."</td>";
    echo "<td>".$row['destination']."</td>";
    echo "<td>".$row['sno']."</td>";
    echo "<td>".$row['time']."</td>";
    echo "<td>".$row['class']."</td>";
    echo "<td>".$row['name']."</td>";  
    echo "<td><a href='booked.php?id=".$row['id']."'>Check-In</a></td>"; 
    echo "</tr>";
  }
  if($flag==0)
  {
    echo "NO result";
  }
}
}
mysqli_close($conn);

?>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
