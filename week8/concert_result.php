<?php
//print_r($_POST["seats"]);
$selectedseats =$_POST["seats"];
echo "You have bought".count($selectedseats)."seat(s)<br>";
$totalPrice=0;

foreach ($selectedseats as $selectedseats) {
# code...
	echo $selectedseats;
	
	if ($selectedseats[0]=="A"){
		$price=3000;
	}
	else if ($selectedseats[0]=="B"){
		$price=2000;
	}
	else {
		$price=1000;
	}
	echo":" . $price . " THB<br>";
	$totalPrice+=$price;
}
echo "total Price:" . $totalPrice."THB";
?>