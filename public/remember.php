
<div class="card" style="margin: 1em 1em 1em 1em;">
            <div class="card-header" style="color: black; background-color: #ffb3b3">Remember List <button class="btn btn-success float-right" data-toggle="collapse" data-target="#reminder-form">Add Reminder</button></div>
          
            <div class="card-body">
                
                <div id="reminder-form" class="collapse">
                    <form>
                     <input class="form-control" type="text" placeholder="Title" name="reminder-title"><br>
                    <textarea class="form-control" name="reminder-body" placeholder="Details" rows="3"></textarea><br>
                    <button class="btn btn-success float-right">Submit</button><br><br>
                    <hr>
                     </form>
                 <?php   /** 
                        
                        $connection = makeConnection();
                        $stat = pg_connection_status($connection);
                        echo $stat;
                       $sqlquery = "SELECT * FROM REMINDER";
                       $result = pg_query($connection, $sqlquery);
                        while($row = pg_fetch_row($result)) {
                          echo $row[0];
                        }
                       
                    pg_close($connection);  **/
                    ?>
                  
                    
                    
                </div>
            </div>
</div>