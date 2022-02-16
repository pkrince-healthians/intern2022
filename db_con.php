<?php
$sname="astdb001.healthians.co.in";
$uname="prince_pandey";
$password="T8cih4Ue5AJx6D8YIdlVED4r";

$db_name="int004";
$conn= mysqli_connect($sname, $uname, $password, $db_name);
if(!$conn)
{
    #mysqli_connect_error();
    die('error connecting to database.');
} 
else
{
    echo "success!";
}
?>