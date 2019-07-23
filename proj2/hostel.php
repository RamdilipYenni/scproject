<?php
$user='root';
$pass='';
$dbb='hostel';
$db= mysqli_connect('localhost','root','','hostel');
session_start();
if($db != true ){
	echo "connected";
}

if(isset($_POST['studentname']) && isset($_POST['branch']) && isset($_POST['roll']) && isset($_POST['yr']) &&isset($_POST['dt']) && isset($_POST['d']) && isset($_POST['place']) && isset($_POST['phonenumber']) && isset($_POST['reason']) )
{
	$var1=$_POST['studentname'];
	$var2=$_POST['branch'];
	$var3=$_POST['roll'];
	$var4=$_POST['yr'];
	$var5=$_POST['dt'];
	$var6=$_POST['d'];
	$var7=$_POST['place'];
	$var8=$_POST['phonenumber'];
	$var9=$_POST['reason'];
    $sqlcommand="INSERT INTO `outing`(`studentname`,`branch`,`rollnumber`,`year`,`date/time`,`res`,`place`,`phonenumber`,`reason`) VALUES ('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9')";
	$result=mysqli_query($db,$sqlcommand) or die("error");

	echo "<script>window.location.assign('home.html')</script>";
}

else
{

	echo "query not sent ";
}

$db->close();

?>