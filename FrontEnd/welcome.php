
<?php
require_once("checker.php");
if(checkSession())
{
    header("Location: Login_Page.php");
    exit;
}
?>
<?php
   include('session2.php');
?>
<html>
   
   <head>
      <title>Dashboard </title>
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
            a{
               color:white;
               
            }
        </style>
   </head>
   
   <body>
   <div class="bg_gradient"></div><!--background gradient.-->
   <div class="container">
            <div class="card login_area1 d-flex"> <!--contains the form [inner black card]-->
                <div class="card-body align-items-center  justify-content-center" style="text-align: center;">
                <br>
                <button type="button" style="z-index: 100;" onclick="location.href='Play_Page.html'">PLAY</button>
                  <br>
                  <br>
                  <button type="button" style="z-index: 100;" onclick="location.href='Community_Page.html'">COMMUNITY</button>
                  <br>
                  <br>
                  <button type="button" style="z-index: 100;" onclick="location.href='Forum_Page.php'">FORUM</button>
                  <br>
                  <br>
                  <button type="button" style="z-index: 100;" onclick="location.href='Upload_Page.php'">UPLOAD</button>
                </div>
            </div>
            
            <div class="card login_area"><!--outter translucent card contains header and footer-->
                
                <div class="card-body ">        
                    <h1 class="card-title glow" style="text-align: center; font-size: 50px;">Welcome <?php echo $login_session; ?></h1>     
                </div>

                <div class="card-footer" style=" text-align: center; bottom: 0;">
                  <a href = "logout.php">Sign Out</a>
                </div>    
            
            </div>
        
        </div>


      

   </body>
</html>