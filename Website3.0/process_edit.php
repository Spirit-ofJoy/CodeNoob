<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html> 
 <head>
   <meta charset="utf-8"> 
   <title>Login Form For Authorities</title>     <!--Head-->
   <link rel="stylesheet" type="text/css"  href="process_style.css" />
 </head>
 
 <body>
  <div id="lgnbox">                                  <!--Main div-->
    <br>
	 <h1 style="color: blue";>Status</h1>   <!--Header-->
 
   
   <div id="textbox">
    <?php                                            
      $edit = $_POST["edit"];                        //Storing the point of grid to be marked
	  
	  if( $edit>=1 && $edit<=100) 
		  
		  { 
		  $connection = new mysqli("localhost", "admin", "1234", "grid");     //Connecting mysql databases to php
          if ($connection->connect_error) die($connection->connect_error); 

          $result = $connection->query("SELECT * FROM first");                // holding the table first in $result
 
          if (!$result) die($connection->error);
		
          $change= "UPDATE first SET status=0 WHERE id=$edit";
          
		  if(mysqli_query($connection, $change))
			  echo 'Update Successful.<p><a href="map.php"> Redirect to the Map </a></p>';
		  else
			  echo "Update Unsuccessful";
		  }
		  else
		  echo "Incorrect Value Inputs" ;
    ?> 
	 <br><br>
   </div> 
  
  </div>         <!--eof main div-->

  </body>
</html>
