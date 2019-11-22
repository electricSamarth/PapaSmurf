<!DOCTYPE html>
<?PHP
require_once("checker.php");
if(checkSession())
{
    header("Location: Login_Page.php");
    exit;
}
?>
<html>
    <head>
        <title>Upload</title>
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
            hr { display: block; height: 1px;
    border: 0; border-top: 1px solid #ccc;
    margin: 1em 0; padding: 0; border-color:white;}
        </style>
    </head>
    <body>

    </form>
        
        <div class="bg_gradient"></div><!--background gradient.-->
        <div id="out_square"><div id="out_text"><h1 class="arcadia">ARCADIA</h1></div></div><!--Elements for transition-->
        
        <nav class="navbar navbar-expand-sm justify-content-center nav_bar"> <!--navigation bar-->
            <a class="navbar-brand" href="welcome.php">
                <img src="CSS/logo.png" alt="logo" style="width:40px;">
            </a>
            <div id="nvg">
            <ul class="navbar-nav" >
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="home" href="#homepage">HOME</a>
                </li>
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="play" href="#playpage">PLAY</a>
                </li>
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="community" href="#communitypage">COMMUNITY</a>
                </li>
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="forum" href="#forumpage">FORUM</a>
                </li>
                <li class="nav-item nav_op">
                    <a class="nav-link nav_link active" id="upload" href="#uppage">UPLOAD</a>
                </li>
            </ul>
            </div>
        </nav>
            
    <div class="outercard "><!--outer translucent card contains header and footer-->
     <script src="Transition/transitions.js"></script> <!--script for page transitions-->
     <h1 class="card-title glow" style="text-align: center; font-size: 50px;">UPLOAD YOUR GAMES!</h1>
     <hr>
     <center>
            Guidelines for Uploading your game:<br></center>
            <br>
            <Center>
            1.Game build must be webgl. <br>
            2.Use of any game engine is allowed.<br>
            3.Games must follow an ESRB rating of E <br>
            4.Racist content is not acceptable.<br></center>
            <br>
            Note: The games you upload will be thoroughly evaluated and will only be put up once they meet all the guidelines.<br>
            <hr>
            <form action="fileUploadScript.php" method="post" enctype="multipart/form-data">
        <center>
            
        <input type="file" name="the_file" id="fileToUpload">
        <input type="submit" name="submit" value="Start Upload" style="display:-block"></center>
        </div>
    </body>        
        


    <footer class="pg_footer fixed-bottom"> <!-- Page Footer-->
        <div class="text-center py-3" style="color: white;">&copy 2019 Copyright | Papa Smurf</div>
    </footer>
</html>