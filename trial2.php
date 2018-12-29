
<?php

if(isset($_POST['submitted'])){

	include_once'try.php';
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$sqlinsert="INSERT INTO loginattempt(username,password) VALUES('$username','$password')";

if(!mysqli_query($conn,$sqlinsert)){
 echo "error"
}else{
$newuser = " Welcome to the ravens!";
}	




?>