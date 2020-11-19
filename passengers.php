<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div class="container container-fluid">
            <div class="justify-content-center text-align-center">
                <?php

                if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
                {
                    header("location: passengers.php");
                }

                require_once "config.php";
                $source = $destination=$sno=$time=$name=$class=$id=$raj="";
                $s=$d=$sn=$na=$cl=$ti="";
                $err = "";

                $sql="SELECT * FROM passengers";
                $search = mysqli_query($conn, $sql);
                $flag=0;

                $i=0;
                echo "<br>";
                echo "<h3>Passengers</h3>";
                echo "<hr>";
                echo "<table class='table table-bordered table-striped table-hover'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>DESTINATION</th>
                        <th>SNO</th>
                        <th>DURATION</th>
                        <th>CLASS</th>
                        <th>NAME</th>
                        <th>PRICE(in Rs)</th>
                        <th></th>
                    </tr>
                </thead>";

                while($row=mysqli_fetch_array($search))
                {
                    echo "<tbody><tr>";
                    $flag=1;
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['username']."</td>";
                    echo "</tr>";
                }

                if($flag==0)
                {
                    echo "NO result";
                }

                mysqli_close($conn);
                ?>
            </div>
        </div>
    </body>
</html>
