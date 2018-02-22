<?php require_once("../private/initialize.php"); ?>

<?php

    $title = str_replace("\"","&quot", $_POST["interest-title"]);
    $title = str_replace("'","&#39", $title);
   
    $question  = str_replace("\"","&quot", $_POST["interest-body"]);
    $question  = str_replace("'","&#39", $question);
   
   
    $connection = makeConnection();
    $sqlCommand = "INSERT INTO INTERESTS(TITLE, DETAILS) VALUES(";
    $sqlCommand .= "'" .$title ."','" .$question ."');";

    $result = pg_query($connection, $sqlCommand);
    
    if($result){
        //  header('Location:'.WROOT.'/user/questions/all_questions.php?uname='.$username);
        echo $result[0].$result[1].$result[2];
    }else{
        echo "ERROR MAKING SUBMISSION";
    }
    
        
    pg_close($connection);
    
?>