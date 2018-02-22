  <div class="card" style="margin: 1em 1em 1em 1em;">
            <div class="card-header ">Areas of interest <button class="btn btn-success float-right">Add Interest</button></div>
          
            <div class="card-body">
					  <?php    
                        
                        $connection = makeConnection();
                        $stat = pg_connection_status($connection);
                       
                       $sqlquery = "SELECT * FROM INTERESTS";
                       $result = pg_query($connection, $sqlquery);
                       
                        while($row = pg_fetch_row($result)) {
                          echo "<hr>";
                          echo "<u>#".$row[0]." : ".$row[1]."</u><br>".$row[2];
                          echo "<hr>";
                        }
                       
                     pg_close($connection);  
                    
                    ?>            
            
            </div>
                
          </div>
          