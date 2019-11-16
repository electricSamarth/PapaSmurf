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
        </style>
    </head>
    <body>
        <form action="fileUploadScript.php" method="post" enctype="multipart/form-data">
        Upload a File:
        <input type="file" name="the_file" id="fileToUpload">
        <input type="submit" name="submit" value="Start Upload">
    </form>
        
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
            
    <div class="outercard"><!--outer translucent card contains header and footer-->
     <script src="Transition/transitions.js"></script> <!--script for page transitions-->
     Guidelines for Uploading your game:
     1.
     2.
     3.
     4.
     5.
     <br>
     <br>
     <br>
     (this page will achieve full functionality once the backend is complete)
    </div>
    </body>

    <footer class="pg_footer fixed-bottom"> <!-- Page Footer-->
        <div class="text-center py-3" style="color: white;">&copy 2019 Copyright | Papa Smurf</div>
    </footer>
</html>