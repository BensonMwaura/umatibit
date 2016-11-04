<?php
  include("connU.php");
  //test form
  if($link){
    if($_POST){
        //registration variables
        $fname = stripslashes($_POST['fname']);
        $lname = stripslashes($_POST['lname']);
        $email = stripslashes($_POST['email']);
        $passwd = sha1(stripslashes($_POST['password']));
        $localbtc = stripslashes($_POST['localbtc']);
        $access_key = uniqid($fname."_".$lname);
        $q = "INSERT INTO umatibit.users (fname, lname, email, passwd, created, last_visited, localbtc)
            VALUES ('$fname', '$lname', '$email', '$passwd', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '$localbtc')";
        $reg = mysqli_query($link, $q);
        if($reg){
          header("Location: signupConfirm.html");
        }else{
          header("Location: signup.html");
        }
    } else {
      header("Location: signup.html");
    }
  }else{
    echo "Service connection not available.";
  }
?>
