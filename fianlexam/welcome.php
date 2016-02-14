<html>
<head>
	<title></title>
	<script src="./js/jquery.min.js"></script>
	<script src="./js/app.js"></script>
</head>
<body>
	<form method='post' action='logout.php'>
		<input type='submit' value='logout'>
	</form>

<?php 
	session_start();
				mysql_connect('localhost','root','');
				mysql_select_db('loginweather');

				echo "Welcome ".$_SESSION['username']."<br>";



?>
<a id='city'href="#"  >bangladesh</a>
<a id='city'href="#"  >spain</a>

	<a id='city'href="#">bankok</a>
	<div id="container"></div>
	<button onclick=show('cel')>Celcius</button>
	<button onclick=show('far')>Farenhite</button>
	<br><p id='cel' style='visibility:hidden;'>Show Result in Celcius</p>
		<p id='far' style='visibility:hidden;'>Show Result in Farenhite</p>

	<script type="text/javascript">
	function show(id){
		document.getElementById(id).style.color='red';
		document.getElementById(id).style.visibility='visible';
	}
	</script>
	
	<script type="text/javascript">
	$(document).ready(function(){

    $("a").click(function(e){
    	e.preventDefault();
		var city=this.text.toLowerCase();
		$.ajax({
	type:'Get',
	url:'http://api.openweathermap.org/data/2.5/weather?q='+city+'&appid=890f0bdf35c07714453855521c81f763',
	success: function(data){
		//console.log(data.name);
		var temp = data.main.temp;
		var c = temp - 273;
		var far = c *9/5 + 32;
		$("#container").html(data.name+" "+temp+" Kelvin   <br>");
		$("#cel").html(data.name+" "+c.toFixed(2)+" degree celcius   <br>");
		$("#far").html(data.name+" "+far.toFixed(2)+" degree Farenhite   <br>");

		
	}

	


});
       
    });
});</script>

</body>
</html>