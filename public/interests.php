
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