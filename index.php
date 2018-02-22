<?php require_once("./private/initialize.php"); ?>



<!DOCTYPE html>
<html>
    
    <head>
      <?php require_once(SHARED_PATH."/dependencies.php")?>
       <title>Nice Trip Beta</title>
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
     <h2 style="text-align: center"><u> Trip Scrap Book </u></h2> 
    </header>
    
    <body class="bg-light">
         <div class="row">
				<div class="col-sm-3"></div>         
         	<div class="col-sm-6">
					<div class="card" style="margin: 1em 1em 1em 1em;">
          			  <div class="card-header " style="text-align: center">Login</div>
          					
          			  <div class="card-body"  style=" text-align: center;">
          			  <form class="form-inline" action="./public/loggedin.php" style=" text-align: center;" method="POST" >
          			         			  
          			        <div class="form-group " >
									<label for="pass">Password: </label>
									<input type="password" class="form-control" id="pass" name="pass" />  					
          					  </div>
          					  
          					<button class="btn btn-default" type="submit" >ENTER</button>   
          				 	
          				</form>	
          				
          				<hr>
          				<u>CONNECTION CONSOLE</u>
          				   <?php $connection = makeConnection();
                        $stat = pg_connection_status($connection); 
                        
                       	if($connection){
                       		echo "<br> Connected";
                       	}else {
                       	  echo "<br> Disconnected";
                       	}
                       	
                       	echo "<br> connection status: " .  $stat ; 
                       	pg_close($connection);
                        ?>
                    
          				<hr>
          				<p style="font-size:small">
                      &copy ShayneOS</p>
          			  </div>
         	   </div>
         	</div>
         	<div class="col-sm-3"></div>         
         
         </div>
     	 
    </body>
    
    <footer>
   
    </footer>
    
  
      
</html>

