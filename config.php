<?php
    $servername="astdb001.healthians.co.in";
    $username="prince_pandey";
    $password="T8cih4Ue5AJx6D8YIdlVED4r";
    $dbname="int004";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        die("connection failed".$conn->connect_error);
    }
    ?>