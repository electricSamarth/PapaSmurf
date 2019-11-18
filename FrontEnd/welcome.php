<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
      <h2><a href = "Forum_Page.php">Forum</a></h2>
      <h2><a href = "Upload_Page.php">upload here</a></h2>
      

   </body>
   
</html>