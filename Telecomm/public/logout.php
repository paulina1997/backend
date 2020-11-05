<?php
  session_start();
  session_destroy();
  header('Location: http://telecomm.com:8082/login.php');
?>