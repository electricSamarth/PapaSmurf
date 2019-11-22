 <!DOCTYPE html>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "papasmurf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM messages";
$result = $conn->query($sql);

$var = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $var1 = $row["usr"]." says: " . $row["message"]."<br>";
        array_push($var,$var1);
     // echo "id: " . $row["id"]. " - Name: " . $row["usr"]. " says " . $row["message"]. "<br>";
      //  echo '<div name="container" style=""><div class="card area1"> </div></div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
<html>
    <head>
        <title>Forum Page</title>
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
            .area1
            {
                height: 70%;
                width: 70%;
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
            .post_block
            {
                background-color: rgb(0, 0, 0);
            }
            hr { display: block; height: 1px;
    border: 0; border-top: 1px solid #ccc;
    margin: 1em 0; padding: 0; border-color:white;}
        </style>
        <script>
            function f1()
            { window.location="Forum_subthread.php";}
        </script>
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
                    <a class="nav-link nav_link" id="home" href="#homepage">HOME</a>
                </li>
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="play" href="#playpage">PLAY</a>
                </li>
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link" id="community" href="#communitypage">COMMUNITY</a>
                </li>
                <li class="nav-item nav_op" >
                    <a class="nav-link nav_link active" id="forum" href="#forumpage">FORUM</a>
                </li>
                <li class="nav-item nav_op">
                    <a class="nav-link nav_link" id="upload" href="#uppage">UPLOAD</a>
                </li>
            </ul>
            </div>
        </nav>

        <div name="container" style="">
            <div class="card area1"> 
                <div class="card-block">
                    <h1 class="card-title glow" style="text-align: center; font-size: 50px;">POSTS</h1>
                    <center><button type="button" style="z-index: 100;" onclick="f1();">Add Post</button></center>
                    
                    <?php   
                    foreach($var as $c)
                    {
                        echo"$c";
                        echo'<hr>';
                    } ?> 

                </div>
                <div class="card-footer" style="align-self: center;">
                        
                </div>
            </div>
  
        </div>

    </body>

    <script src="Transition/transitions.js"></script> <!--script for page transitions-->
    <footer class="pg_footer fixed-bottom"> <!-- Page Footer-->
        <div class="text-center py-3" style="color: white;">&copy 2019 Copyright | Papa Smurf</div>
    </footer>
</html>