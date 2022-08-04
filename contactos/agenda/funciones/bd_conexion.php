<?php 
    $conn = new mysqli('localhost', 'root','root','agenda', 3306);
    
    if($conn->connect_error) {
      echo $error = $conn->connect_error;
    }
    

?>