<?php
  session_start();
  include("connU.php");
  if($_POST){
    $email = stripslashes($_POST["u_email"]);
    $pass = sha1(stripslashes($_POST["u_pass"]));
    if(isset($pass) && isset($email)){
      $logq = "SELECT u_id, email, fname FROM umatibit.users
	               WHERE (email = '$email' AND passwd = '$pass')";
      $user = mysqli_query($link, $logq);
      if($user){
        $acc_fn = (string) $user["fname"];
	$acc_id = (int) $user["u_id"]; //cast string to int value
	$acc_email = (string) $data["email"];
        $_SESSION["acc_user"] = $acc_id;
        header("Location: profile.php");
      }else{
        echo "User could not login:";
      }
    }else{
      echo "You are not authorized:";
    }
  }else{
    header("Location: signin.html");
  }
  session_commit();
?>
