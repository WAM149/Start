<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Walter's Yeet</title>
		<link rel="stylesheet" type="text/css" href="alan.css">
	</head>
	<body>
		<div class="box">
			<h2>Login</h2>
			<form method="post" action="loginattempt2.php">
				<div class="inputBox">
					<input type="hidden" name="submitted" value="true"/>
					<input type="text" name="user" required=""/>
					<label>Username</label>
				</div>
				<div class="inputBox">
					<input type="password" name="pass" required=""/>
					<label>Password</label>
				</div>
				<input type="submit" name="" value="Submit">
			</form>
		</div>
	</body>

</html>
<?php
$servername="localhost";
$username="id8312326_admin";
$password="admin";
$dbname="id8312326_firstdb";
$atmp=0;
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['login'])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	if($atmp<4){
	$query = "select * from loginattempt where username='".$user."' and password ='".$pass."'";
	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result)){
		while(mysqli_fetch_array($result)){
			echo'<script type="text/javascript">alert("success")</script>';

		}
	}
	
	else{
		$atmp++;
		echo'<script type="text/javascript">alert("fail...")</script>';
	}
}
}
?>