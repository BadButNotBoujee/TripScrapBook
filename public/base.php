<?php require_once("../private/initialize.php"); ?>

<!DOCTYPE html>
<html>
    
    <head>
       <title>Nice Trip Beta</title>
       <style type="text/css">
           .card-header, .btn {
               font-family: 'Oswald', sans-serif;
              }
            header {
                
             font-family: 'Lobster', cursive;
            
            }
            
            body, html {
  			  height: 100%;
				}

			.bg {
  				  /* The image used */
  				  background-image: url("back.jpg");

  				  /* Full height */
  				  height: 100%;

  				  /* Center and scale the image nicely */
  				  background-position: center;
  				  background-repeat: no-repeat;
  				  background-size: cover;
				}
       </style>
       
	<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <header>
        <?php require_once(SHARED_PATH."/header.php")?>
    </header>
    
    <body class="container-fluid bg-light bg" >
          <?php require_once(PUBLIC_PATH."/login.php") ?>
    </body>
    
    <footer>
        <?php require_once(SHARED_PATH."/footer.php")?>
    </footer>
    
    <?php require_once(SHARED_PATH."/dependencies.php")?>
      
</html>