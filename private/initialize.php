<?php 
  
    ob_start();
    
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH."/public");
    define("SHARED_PATH", PRIVATE_PATH."/shared");
    
    $posOfPublic = strpos($_SERVER["SCRIPT_NAME"], "/public") + 7; 
    $documentRoot = substr($_SERVER["SCRIPT_NAME"],0, $posOfPublic); 
    define("WROOT",$documentRoot );
   
   // require_once("database_functions.php");


?>