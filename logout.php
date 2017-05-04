<?php
   session_start();
   
   if(session_destroy()) {
   	  setcookie('user',"",time()-60);
      header("Location: login.php");
   }
?>