<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'hallowner_signup';

// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM hall1 ORDER BY ID DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View halls</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>

    body
    {
      background-image: linear-gradient(to right,#2193b0,#6dd5ed);
    }

        table {
            margin: 0 auto;
            margin-top: 10px;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }

        .topnav {
          background-color: #333;
          overflow: hidden;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
          float: left;
          display: block;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }

        /* Hide the link that should open and close the topnav on small screens */
        .topnav .icon {
          display: none;
        }
        @media screen and (max-width: 600px) {
          .topnav a:not(:first-child) {display: none;}
          .topnav a.icon {
            float: right;
            display: block;
          }
        }


    </style>
</head>

<body>
    <section>

        <div class="topnav" id="myTopnav">
      <a href="home.php">Home</a>
      <a href="Book_Halls.php">Book my hall</a>
      <a href="feedback.php">Feedback</a>

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        <script type="text/javascript">
            function myFunction() {
            var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                }
                else {
                    x.className = "topnav";
                }
            }

        </script>
      </a>
      </div>





        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th> HALL NAME</th>
                <th>HALL ADDRESS</th>
                <th>CITY</th>
                <th>STATE</th>
                <th>FEATURES</th>
                <th>AC FACILITY</th>
                <th>ROOMS</th>
                <th>RENT PER DAY</th>
              </tr>

            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->

                <td><?php echo $rows['hallname']; ?></td>
                <td><?php echo $rows['hallAddress'];?></td>
                <td><?php echo $rows['city'];?></td>
                <td><?php echo $rows['state'];?></td>
                <td><?php echo $rows['features'];?></td>
                <td><?php echo $rows['ac'];?></td>
                <td><?php echo $rows['rooms'];?></td>
                <td><?php echo $rows['rent'];?></td>
                
                      </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>

</html>
