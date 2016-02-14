<html>
<head>
	<title></title>
</head>
<body>
<?php 
	session_start();
				mysql_connect('localhost','root','');
				mysql_select_db('loginweather');

				session_destroy();

				header("Location:index.php");

?>
</body>
</html>