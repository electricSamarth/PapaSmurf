<!DOCTYPE html>
<?php
require_once('config.php');
?>
 <?php
    if (isset($_POST['create'])){
        $message=$_POST['message'];
        $name=$_POST['name'];
        $email=$_POST['email'];
       

        

        $sql="INSERT INTO contact (name,email,message) VALUES (?,?,?)";
        $stmtinsert = $db->prepare($sql);
        
        $result=$stmtinsert->execute([$name,$email,$message]);
        if($result){
            echo "<script>alert('Successfully saved.')</script>";
        }else{
            echo "There was error while saving the data";
        }
                
    }
    ?>
<html>
    <head>
        <title>Contact Page</title>
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
            .outercard
            {
                height: 80%;
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
        </style>
    </head>

    <body>
        
        <div class="bg_gradient"></div><!--background gradient.-->
        <div id="out_square"><div id="out_text"><h1 class="arcadia">ARCADIA</h1></div></div><!--Elements for transition-->
        
        <nav class="navbar navbar-expand-sm justify-content-center nav_bar"> <!--navigation bar-->
        <a class="navbar-brand" href="welcome.php">
                    <img src="CSS/logo.png" alt="logo" style="width:40px;">
                </a>
            <div id="nvg">
            <ul class="navbar-nav" >
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="home" href="#homepage" >HOME</a>
                </li>
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="login" href="#Login_Page">LOGIN</a>
                </li>
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="signup" href="#Signup_Page.html">SIGN UP</a>
                </li>
                <li class="nav-item nav_op">
                    <a class="nav-link nav_link active" id="contact" href="#contactpage">CONTACT</a>
                </li>
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="about" href="#about">ABOUT US</a>
                </li>
            </ul>
            </div>
        </nav>
            
        <div class="container">
            <div class="card outercard"><!--outter translucent card contains header and footer-->
                <div class="card-body d-flex justify-content-center">

                    <div class="form d-flex">

                        <form action="Contact_Page.php" method="post" onsubmit="return checkform(this);">
                            <div class="form-group">
                                    NAME <input type="text" class="form-control" id="nm"name="name"style="font-family:Arial, Helvetica, sans-serif;"placeholder="Name" >
                            </div>
                            <div class="form-group">
                                    EMAIL ADDRESS <input type="text" class="form-control" id="nm"name="email"style="font-family:Arial, Helvetica, sans-serif;" placeholder="Email" >
                            </div>
                            <div class="form-group">
                                    Message <br> <textarea class="form-control"style="font-family:Arial, Helvetica, sans-serif; background-color:rgba(12, 11, 11, 0.616) ; border:rgba(0, 0, 0, 0.644);border-bottom: 1px solid rgb(139, 5, 5);" 
                                    name="message" rows="5" cols="40"></textarea>
                            </div>
                                <div class="capbox">
                                    <p style="color:white; font-family:Arial, Helvetica, sans-serif;">*Prove you're not a bot. Type the number below:*</p>
                                    <div id="CaptchaDiv"></div>
                                    <div class="capbox-inner">
                                        <input type="hidden" id="txtCaptcha">
                                        <input type="text" class="form-control" name="CaptchaInput" style="font-family:Arial, Helvetica, sans-serif;"id="CaptchaInput" size="15"><br>
                                    </div>
                                </div>
                
                                <div style="text-align:center">  
                                    <input type="submit" class="btn btn-primary" name="create">  
                                </div>  
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </body>

    <footer class="pg_footer fixed-bottom"> <!-- Page Footer-->
        <div class="text-center py-3" style="color: white;">&copy 2019 Copyright | Papa Smurf</div>
    </footer>
    
 <script src="Captcha/captcha_script.js"></script>
 <script src="Transition/transitions.js"></script> <!--script for page transitions-->
</html>