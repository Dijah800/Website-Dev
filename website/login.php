<?php
session_start();
if(isset($_SESSION['loggedin'])) header("Location: record.php");
/* process login data */
 if(!isset($_POST['username']) || !isset($_POST['password'])) {
  header("Location: session.php");
 }
 $u = $_POST['username']; 
 $p = $_POST['password'];
 if($u=="dijah" && $p=="secret1") {
  $_SESSION['loggedin']=TRUE; $_SESSION['username']="dijah";
  header("Location: record.php");
 }
 elseif($u=="james" && $p=="secret2") {
  $_SESSION['loggedin']=TRUE; $_SESSION['username']="james";
  header("Location: record.php");
 }
 else{
    header("Location: session.php");
 }
 ?>
