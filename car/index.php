<html>
<head>
<title>week7|wather</title>
<link rel="stylesheet" type="text/css" href="">
</head>
<body>

	

	<?php echo "Hello"?>
	<form method='post'>
	UserName:<input name='username'><br>
	Password<input type='password'name='password' ><br>	
	<input type='submit' name='submit'>
	</form>

		<?php

			if(isset($_POST['submit'])){
				session_start();
				mysql_connect('localhost','root','');
				mysql_select_db('loginweather');

				$username=$_POST['username'];
				$password=$_POST['password'];

				$query = mysql_query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'");

				if(mysql_num_rows($query)==1){
					echo "Success";
					$run = mysql_fetch_array($query);
					$_SESSION['username'] = $run['username'];
					header("Location:welcome.php");
				}	else{
					echo "Sorry! wrong username or password";
				}
						}

		?>

	
	<div id ="container"></div>
	<script type="js/jquery.min.js"></script>
	<script type="js/app.js"></script>
</body>
</html>