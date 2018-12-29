<?php

if(isset($_POST['submitted'])){

	include('try.php');
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$sqlinsert="INSERT INTO loginattempt(username,password) VALUES('$username','$password')";

if(!mysqli_query($conn,$sqlinsert)){
 echo "error"
}
$newuser = " Welcome to the ravens!";
}




?>
<html>


<head>
	<title>Enter Info</title>
</head>
<body>
	<h1>Insert Info	</h1>

	<form method = "post" action="insert-data.php">
		<input type="hidden" name="submitted" value="true"/>
	<fieldset>
		<legend>New User</legend>
			<label>Username<input type="text"name="user"/></label>
			<label>Password<input type="text"name="pass"/></label>

</fieldset>
<br/>
<input type="submit" value="add new user"/> 

</form>
<?php

echo $newuser
?>
</body>
</html>

