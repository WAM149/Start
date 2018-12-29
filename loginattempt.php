<!doctype html>
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
<html>
<head>
	<meta charset="utf-8">
	<title>Title</title>
			 <link rel="stylesheet" href="main.css" type="text/css"/> 

</head>

<body>
			<header>

		<nav>
			
		<h1>Ravens Fan Page!</h1>

		<ul>
			<li><a href= "index.html">Home</a></li>
			<li><a href= "Stats.html">Ravens Player Stats</a></li>
			<li><a href= "Records.html">Ravens Records Per Year </a></li>
			<li><a href="Players.html">Favorite Ravens Players!</a></li>
			<li><a href= "Fun.html">Fun Page</a></li>
			<li><a>Sign in</a></li>
			
			</ul>
		</nav>
	</header>
	<form method= "post" actions="">
		<table id="t01" align= "center">
			<tr>
				<td>Username</td>
				<td><input type = "text" name="user" placeholder="enter username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="pass" placeholder="enter password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>

</body>
</html>
