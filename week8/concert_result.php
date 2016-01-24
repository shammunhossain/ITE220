<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div><?php
//print_r($_POST["seats"]);
$selectedseats =$_POST["seats"];
echo "You have bought".count($selectedseats)."seat(s)<br>";
$totalPrice=0;


foreach ($selectedseats as $selectedseats) {
# code...
	echo $selectedseats;
  
	$displayMessage="";

	if ($selectedseats[0]=="A"){
		
		$price=3000;
		if ($selectedseats[2]=="4"){
			
			$price = 1500;
			$displayMessage = "Congratulations you picked the lucky ticket 50% off on this one........<br>";
			
			
		}

			

		 
	}
	else if ($selectedseats[0]=="B"){
		$price=2000;
	}
	else {
		$price=1000;
	}
	echo":" . $price . " THB<br>".$displayMessage;
	
	$totalPrice+=$price;
	
}
	
	
echo "total Price:" . $totalPrice."THB";

?></div>
</body>
</html>