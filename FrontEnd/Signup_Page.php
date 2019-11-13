<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Page</title>
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
            .signup_area
            {
                height: 80%;
                width: 60%;
                background-color: rgba(0, 0, 0, 0.815);
                opacity:1;
                position: absolute;
                top:0;
                bottom: 0;
                left: 0;
                right: 0;
                
                margin: auto
            }
            .signup_area1
            {
                height: 55%;
                width: 30%;
                background-color: black;
                opacity:1;
                position: absolute;
                top:0;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 50;
                margin: auto
            }
        </style>
    </head>
    
    <body>
       <div>
    <?php
    if (isset($_POST['create'])){
        $mail =$_POST['mail'];
        $usr   =$_POST['usr'];
        $pswd      =$_POST['pswd'];

        

        $sql="INSERT INTO users (mail,usr,pswd) VALUES (?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result=$stmtinsert->execute([$mail,$usr,$pswd]);
        if($result){
            echo "Successfully saved.";
        }else{
            echo "There was error while saving the data";
        }
                
    }
    ?>
    </div>


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
                    <a class="nav-link nav_link" id="login" href="#loginpage">LOGIN</a>
                </li>
                <li class="nav-item nav_op">
                    <a class="nav-link nav_link active" id="signup" href="#signuppage">SIGN UP</a>
                </li>
                <li class="nav-item nav_op">
                    <a class="nav-link nav_link" id="contact" href="#contactpage">CONTACT</a>
                </li>
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="about" href="#aboutpage">ABOUT US</a>
                </li>
            </ul>
            </div>
        </nav>
        
        <div class="container">
                <div class="card signup_area1 d-flex"> <!--contains the form [inner black card]-->
                    <div class="card-body align-items-center d-flex justify-content-center" style="text-align: center;">
                        <form action="Signup_Page.php" method="post"><!--link backend-->
                            <div class="form-group">
                                <label for="user" style="align-content: center;">EMAIL ADDRESS</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" style="font-family:Arial, Helvetica, sans-serif;" name="mail">
                            </div>
                            <div class="form-group">
                              <label for="user" style="align-content: center;">USERNAME</label>
                              <input type="text" class="form-control" id="user" placeholder="Username" style="font-family:Arial, Helvetica, sans-serif;" name="usr">
                            </div>
                            <div class="form-group">
                              <label for="pwd">PASSWORD</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Password" style="font-family:Arial, Helvetica, sans-serif;" name="pswd">
                            </div>
                            <div class="form-group">
                                <label for="cpwd">CONFIRM PASSWORD</label>
                                <input type="password" class="form-control" id="cpwd" placeholder="Confirm" style="font-family:Arial, Helvetica, sans-serif;" name="cpswd">
                            </div>
                            <input type="submit" class="btn btn-primary" name="create" value="Sign-Up" id="Sign-Up" ></button>

                        </form>
                    </div>
                </div>
                
                <div class="card signup_area"><!--outter translucent card contains header-->
                    
                    <div class="card-body ">        
                        <h1 class="card-title glow" style="text-align: center; font-size: 50px;">JOIN THE PARTY!</h1>     
                    </div>
                   
                </div>
            
            </div>


        <script src="Transition/transitions.js"></script> <!--script for page transitions-->
    </body>
    <footer class="pg_footer fixed-bottom"> <!-- Page Footer-->
        <div class="text-center py-3" style="color: white;">&copy 2019 Copyright | Papa Smurf</div>
    </footer>
</html>
