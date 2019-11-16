<!DOCTYPE html>
<?php
require_once('config.php');
?>

<?php

include("conf_log.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $usr = mysqli_real_escape_string($db,$_POST['usr']);
      $pswd = mysqli_real_escape_string($db,$_POST['pswd']); 
      
      $sql = "SELECT id FROM users WHERE usr = '$usr' and pswd = '$pswd'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         
         $_SESSION['login_user'] = $usr;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "retry";
      }
   }

// Always start this first


/*if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['usr'] ) && isset( $_POST['pswd'] ) ) {
        echo "data entered";
        // Getting submitted user data from database
        
        $stmt = $db->prepare("SELECT * FROM users WHERE usr = ?");
        $result =$stmt->execute([$usr]);
        $row=fetch_assco();
        echo "mail : $row['mail'] " 


        // Verify user password and set $_SESSION
        if ( password_verify( $_POST['pswd'], $user->pswd ) ) {
            $_SESSION['user_id'] = $user->usr;
            echo "login ok";
        }
    }
}*/


?>
<html>
    <head>
        <title>Login Page</title>
        <!--# CDN #-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--####-->

        <link rel="stylesheet" href="CSS/Site_Style.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Luckiest Guy' rel='stylesheet'>
        <link rel="stylesheet" href="Transition/transit.css">

        <style>
            .login_area
            {
                height: 70%;
                width: 50%;
                background-color: rgba(0, 0, 0, 0.815);
                opacity:1;
                position: absolute;
	            top:0;
	            bottom: 0;
	            left: 0;
	            right: 0;
                margin: auto;
                
            }
            .login_area1
            {
                height: 45%;
                width: 20%;
                background-color: black;
                opacity:1;
                position: absolute;
	            top:0;
	            bottom: 0;
	            left: 0;
	            right: 0;
                margin: auto;
                z-index: 50;
            }
        </style>
    </head>

    <body>
        
        <div class="bg_gradient"></div><!--background gradient.-->
        <div id="out_square"><div id="out_text"><h1 class="arcadia">ARCADIA</h1></div></div><!--Elements for transition-->
        
        <nav class="navbar navbar-expand-sm justify-content-center nav_bar"> <!--navigation bar-->
            <!--
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="logo" style="width:40px;">
            </a>
            -->
            <div id="nvg">
            <ul class="navbar-nav" >
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="home" href="#homepage">HOME</a>
                </li>
                <li class="nav-item nav_op">
                    <a class="nav-link nav_link active" id="login" href="#loginpage">LOGIN</a>
                </li>
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="signup" href="#Signup_Page.html">SIGN UP</a>
                </li>
                <li class="nav-item nav_op">
                    <a class="nav-link nav_link" id="contact" href="#contactpage">CONTACT</a>
                </li>
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="about" href="#About_Page.html">ABOUT US</a>
                </li>
            </ul>
            </div>
        </nav>
        
        <div class="container">
            <div class="card login_area1 d-flex"> <!--contains the form [inner black card]-->
                <div class="card-body align-items-center d-flex justify-content-center" style="text-align: center;">
                    <form action="" method="post"><!--link backend-->
                        <div class="form-group">
                          <label for="user" style="align-content: center;">USERNAME</label>
                          <input type="text" class="form-control" id="user" placeholder="Username" style="font-family:Arial, Helvetica, sans-serif;" name="usr">
                        </div>
                        <div class="form-group">
                          <label for="pwd">PASSWORD</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Password" style="font-family:Arial, Helvetica, sans-serif;" name="pswd">
                        </div>
                        <input type="submit" class="btn btn-primary" name="create" value="hello">
                    </form>
                </div>
            </div>
            
            <div class="card login_area"><!--outter translucent card contains header and footer-->
                
                <div class="card-body ">        
                    <h1 class="card-title glow" style="text-align: center; font-size: 50px;">LOGIN</h1>     
                </div>

                <div class="card-footer" style=" text-align: center; bottom: 0;">
                    <p style="font-size: 16px;font-family:Arial, Helvetica, sans-serif">Don't have an account? <a href="Signup_Page.php" style="color: red;">Sign up</a> here to join the party!</p>
                </div>    
            
            </div>
        
        </div>
        <script src="Transition/transitions.js"></script> <!--script for page transitions-->
    </body>

    <footer class="pg_footer fixed-bottom"> <!-- Page Footer-->
        <div class="text-center py-3" style="color: white;">&copy 2019 Copyright | Papa Smurf</div>
    </footer>

</html>