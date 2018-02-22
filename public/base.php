<?php require_once("../private/initialize.php"); ?>

<!DOCTYPE html>
<html>
    
    <head>
       <title>Nice Trip Beta</title>
        
      <?php require_once(SHARED_PATH."/dependencies.php")?>
       <style type="text/css">
           .card-header, .btn {
               font-family: 'Oswald', sans-serif;
              }
            header {
                
             font-family: 'Lobster', cursive;
            
            }
       </style>
    </head>
    
    <header>
        <?php require_once(SHARED_PATH."/header.php")?>
    </header>
     
    <body class="bg-light container-fluid">
          <?php require_once(PUBLIC_PATH."/login.php") ?>
    </body>
    
    <footer>
        <?php require_once(SHARED_PATH."/footer.php")?>
    </footer>
   
      
</html>