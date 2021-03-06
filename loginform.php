<!DOCTYPE html>
<html>
	<head>
		<title>Glominnie Sophia Malanay Login Form</title>
	</head>

	<body background="pastel.jpg">
		<style>
			#form{
				background-color:lightpink;
				border:2px;
				padding: 1%;
				height: 70%;
				width:30%;
				opacity: 75%;
				border-radius:15px;
			}
			#log{
				text-align: center;
				font-family: arial;
				color:white;
			}
			#user{
				text-align:left;
			}
			#forget{
				font-color:blue;
			}
			.login{
				background-color:lightblue;
				font-family:arial;
				padding:1px;
			}
			a{
				text-decoration:none;
				font-size:12px;
			}
			.user{
				font-family:arial;
				font-size:18px;
			}
			#txtbox{
				height: 15px;
				width: 200px;
				font-size:15px;
			}
			.login
		{
		    border: none;
			height:25px;
			width: 80px;
			background-color:violet;
			font-color:white;
			font-size:18px;
			border-radius: 25px;
		}
		</style>
		<br><br><br><br><br><br><br><br><br>
		<center>
			
		<form method="post" action="loginform.php" id="form">
			<h1 id="log"><b>LOG IN</b></h1>
			<b><label class="user">Username:</label></br>
			<input type="text" name="username" id="txtbox" placeholder="Enter ADMIN" required/><br></br></b>

			<b><label class="user">Password: </label></br>
				<input type="password" name="password" id="txtbox" placeholder="Enter ADMIN123" required/><br><br></b>

			<input type="submit" name="login" value="login" class="login"></br>
			<a href="#"> Forgot your password? </a><br>  
 			<a href="#"> Don't have an account? </a>
		</form>
	</center>
	</body>
</html>

<?php
	session_start();

	if (isset($_POST['login']) && $_POST['login'] == true) {
				$username = $_POST['username'];
				$password = $_POST['password'];

				if ($username == "ADMIN" && $password == "ADMIN123"){
				header("Location: welcome.php");
			}
			else{
			echo ("INVALID!");
			}
		}
?>