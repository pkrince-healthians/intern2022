<?php 
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>HOME</title>
                <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <center><h1>hello! Welcome to the dashboard</h1>
        <center><a href="index.php"><h1>Click here!For Regestration of New Users</h1></a></center>
        <center><a href="view.php"><h2>Click here!For make changes in existing data of Users</h2></a></center>
        <button><a href="logout.php"><h2>Logout</h2></a></button></center>
        
    </body>
    </html>
    <?php
    }                           
     else{
         header("Location:index1.php");
         exit();
     }
     ?>