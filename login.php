<?php
session_start();
    include "db_con.php";
    
    function validate($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
  }
  // echo "<p>CP1</p>";

  // echo "<pre>_POST = ";print_r($_POST);echo "</pre>";
    // session_start();
    $uname="";
    $pass="";
    if(isset($_POST['username']) && isset($_POST['password'])){
      $uname=validate($_POST['username']);
      $pass=validate($_POST['password']);   
    }

    // echo "<p>Pass = ".$pass."<br/>user = ".$uname."</p>";
    // exit;

    if(empty($uname))
    {
        header("Location: index.php?error=user Name is required");
        // exit();
    }
    elseif(empty($pass)){
        header("Location: index.php?error=password is required");
        // exit();
    }



    $sql = "SELECT * FROM user_pass WHERE username='".$uname."' and password='".$pass."'";
    //echo $sql;
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $row=mysqli_fetch_assoc($result);
        print_r($row);
        if($row['username']==$uname && $row['password']==$pass){
            echo "Logged In!";
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['password'];
           
            header("Location:home.php");
            //exit();
        }
        else
        {
            header("Location:index.php?error=Incorrect password or user name");
            exit();
        }
    }
    else
    {
        header("Location:index.php");
        exit();
    }