<?php  
require_once("../private/initialize.php"); 

$input = $_POST["pass"];

if($input == 'nice'){
  header('Location:'. WROOT .'/base.php');
}else{
  header('Location:'. WROOT .'/../index.php');
}


?>
