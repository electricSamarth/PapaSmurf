<?php
// This is a Generic Session Function to check Session username or Email or variable
function checkSession()
{
if(!isset($_SESSION)){ session_start(); }

         $usr=$_SESSION['login_user'];
         
         if(empty($usr))
         {
            return true;
         }
         return false;
}
?>