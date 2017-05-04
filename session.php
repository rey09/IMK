<?php
	include('Config.php');
   session_start();
   
   if(isset($_COOKIE['user'])) {$login_session = $_COOKIE['user'];}
   else {$login_session=$_SESSION['login_user'];}
   
   if(!isset($_SESSION['login_user']) && !isset($_COOKIE['user'])) {
      header("location:login.php");
   }
?>