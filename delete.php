<?php

     $mysqli = new
     mysqli("astdb001.healthians.co.in","prince_pandey","T8cih4Ue5AJx6D8YIdlVED4r","int004");
   
     $id = ''; 
    if(isset( $_GET['Id'])) {
         $id = $_GET['Id'];
         //print_r($id); 
     } 
        $sql = "DELETE FROM UserCrm WHERE Id=$id";

     $result = mysqli_query($mysqli,$sql);

     header("location:view.php");
?>
        
        