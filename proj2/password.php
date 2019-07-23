<?php
session_start();
$Con=mysqli_connect("localhost","root","","login");
if(isset($_SESSION['user']))
{
$user = $_SESSION['user'];
$npass= $_POST['newpassword'];

if (count($_POST) > 0) 
{
    $result = mysqli_query($Con, "SELECT * from `users` WHERE `sno`='$user'");
    $row = mysqli_fetch_array($result);
    if ($_POST["oldpassword"] == $row["password"])
     {
      mysqli_query($Con, "UPDATE `users` SET `password`='$npass' WHERE `sno`='$user'");
      header("location:changepassword.html");
     }
      else
      {
        echo "<script>alert('oldpassword is not macth')</script>";
        header("location:changepassword.html");
      }
    } 

}
?>