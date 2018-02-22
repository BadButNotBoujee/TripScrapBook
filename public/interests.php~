
<div class="card" style="margin: 1em 1em 1em 1em;">
            <div class="card-header" style="color: black; background-color: #ffb3b3">Interests <button class="btn btn-success float-right" data-toggle="collapse" data-target="#interests-form">Add Interest</button></div>
          
            <div class="card-body">
                
                <div id="interests-form" class="collapse">
                    <form action="process_interests.php" method="POST">
                     <input class="form-control" type="text" placeholder="Title" name="interest-title"><br>
                    <textarea class="form-control" name="interest-body" placeholder="Details" rows="3"></textarea><br>
                    <button class="btn btn-success float-right">Submit</button><br><br>
                    <hr>
                     </form>
                          
                </div>
                
                  <?php    
                        
                        $connection = makeConnection();
                        $stat = pg_connection_status($connection);
                       echo $stat;
                       $sqlquery = "SHOW TABLES";
                       $result = pg_query($connection, $sqlquery);
                       
                        echo $result;
                       
                      
                     pg_close($connection);  
                    
                    ?>
                    
            </div>
</div>