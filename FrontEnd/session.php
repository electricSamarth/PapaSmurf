<?php
   include('conf_log.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select usr from users where usr = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['usr'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>