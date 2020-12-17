<?php

$hallname = $_POST['hallname'];
$hallAddress = $_POST['hallAddress'];
$city = $_POST['city'];
$state = $_POST['state'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$pin = $_POST['pin'];
$hallcapacity = $_POST['hallcapacity'];
$features = $_POST['features'];
$diningcapacity = $_POST['diningcapacity'];
$parkinglot = $_POST['parkinglot'];
$ac = $_POST['ac'];
$rooms = $_POST['rooms'];
$rent = $_POST['rent'];





if (!empty($hallname) || !empty($hallAddress) ||  !empty($city) || !empty($state) || !empty($firstname) || !empty($lastname)|| !empty($pin) || !empty($hallcapacity) || !empty($features) || !empty($diningcapacity) || !empty($parkinglot) || !empty($ac) || !empty($rooms) || !empty($rent))
{
  $host = 'localhost';
  $username = 'root';
  $pass = '';
  $db = 'hallowner_signup';

  $conn = mysqli_connect($host, $username, $pass, $db);
  if(mysqli_connect_error())
  {
    die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
  }
  else
  {
    $INSERT = "INSERT INTO `hall1`(`hallname`, `hallAddress`, `city`, `state`, `firstname`, `lastname`, `pin`,  `hallcapacity`, `features`,`diningcapacity`, `parkinglot`, `ac`, `rooms`, `rent`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $chk="";
    foreach($features as $chk1)
   {
      $chk .= $chk1.",";
   }
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssssssiisiisii",$hallname, $hallAddress, $city, $state, $firstname, $lastname, $pin,  $hallcapacity, $chk, $diningcapacity, $parkinglot, $ac, $rooms, $rent);
    $stmt->execute();
    $stmt->bind_result($hallname, $hallAddress, $city, $state, $firstname, $lastname, $pin, $hallcapacity, $chk,  $diningcapacity, $parkinglot, $ac, $rooms, $rent);
    $stmt->store_result();

    $rnum = $stmt->num_rows;

    if($rnum == 0)
    {
      $stmt->close();
      header("location: home.php");
    }
    else {
      alert("All fields are required");
    }
    $stmt->close();
    $stmt1->close();
    $conn->close();
  }
}
else {
  echo "All fields are required..";
  die();
}
?>
