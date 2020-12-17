<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$ratings = $_POST['ratings'];
$favorite = $_POST['favorite'];

if (!empty($firstname) || !empty($lastname) || !empty($ratings) || !empty($favorite))
{
  $host = 'localhost';
  $username = 'root';
  $pass = '';
  $db = 'customer';

  $conn = mysqli_connect($host, $username, $pass, $db);
  if(mysqli_connect_error())
  {
    die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
  }
  else
  {
    $INSERT = "INSERT INTO `rate`( `firstname`, `lastname`, `ratings`, `favorite`) VALUES (?,?,?,?)";

    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssis", $firstname, $lastname, $ratings, $favorite);
    $stmt->execute();
    $stmt->bind_result($firstname, $lastname, $ratings, $favorite);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum == 0)
    {
      $stmt->close();
      header("location: home.php");
    }
    else {
      alert("Already registered with this email or username");
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
