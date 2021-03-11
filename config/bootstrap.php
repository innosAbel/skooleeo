<?php 
  if(!isset($_SESSION)) session_start();
  
?>
<?php
    ob_start();
    //Bootstrap the application
    include 'config/config.php';
    include 'libraries/Database.php';
    include 'helpers/format_helper.php'; 
?>