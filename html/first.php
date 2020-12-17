
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Signup or Login</title>
    <link rel="stylesheet" type="text/css" href="css\first.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<body>
    <div class="topnav" id="myTopnav">
  <a href="home.php">Home</a>
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
                      <form action="" name="signup"  method="post">
                           <div class="row">
                            <div class="col-md-6 mx-auto p-0">
                                <div class="card">
                                    <div class="login-box">
                                        <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                                            <div class="login-space">
                                                <div class="login">
                                                    <div class="group"> <label for="user" class="label">Username</label> <input id="user" type="text" name="user"class="input" placeholder="Enter your username"  > </div>
                                                    <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" name="password"class="input" data-type="password" placeholder="Enter your password" > </div>


                                                    <div class="group"> <input type="submit" class="button" value="login" action="" name="submit" > </div>
                                                    <div class="hr"></div>
                                                    <div class="foot"> <a href="reset.php">Forgot Password?</a> </div>
                                                </div>
                                              </form>
                                              <?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['password'])) {
    $user=$_POST['user'];
    $password=$_POST['password'];

    $con=mysqli_connect('localhost','root','') or die(mysqli_connect_error());
    mysqli_select_db($con,"hallowner_signup") or die("cannot select DB");

    $query=mysqli_query($con,"SELECT * FROM owner_signup WHERE user='".$user."' AND password='".$password."'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbusername=$row['user'];
    $dbpassword=$row['password'];
    }

    if($user == $dbusername && $password == $dbpassword)
    {
    session_start();
    $_SESSION['sess_user']=$user;

    /* Redirect browser */
    header("Location: hallownerprofile.php");
    }
    } else {
    echo "Invalid username or password!";
    }

} else {
    echo "All fields are required!";
}
}
?>
                                              <form action="register.php" name="signup"  method="post">
                                                <div class="sign-up-form">
                                                    <div class="group"> <label for="user" class="label">Username</label> <input id="user" type="text" name="username" class="input" placeholder="Create your Username"> </div>
                                                    <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" name="password" class="input" data-type="password" placeholder="Create your password"> </div>

                                                    <div class="group"> <label for="pass" class="label">Email Address</label> <input id="pass" type="text" name="email" class="input" placeholder="Enter your email address"> </div>
                                                    <div class="group"> <input  type="submit" class="button" name="save" value="submit" action ="register.php"></div>

                                                    <script>
                                                      document.getElementsByClassName("button").addEventListener("click", myFunction);

                                                       function myFunction() {
                                                         window.location.href = "https://forms.pabbly.com/form/share/GPKx-447376")
                                                       }
                                                     </script>



                                                    <div class="hr"></div>
                                                    <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                                                </div>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                       </div>
                    </form>
</body>
</html>
