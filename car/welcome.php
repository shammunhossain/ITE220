<DOCTYPE html>
	<html lang="en">
	<head>
<meta charset="utf-8"/>
<title>Car</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"  href="blueberry.css">
<style type="text/css">
*{
	margin: 0;
	border: 0;
	padding: 0;
}
body{
	background: #f0f0f0;
	font: 14px/20px Arial, san-serif;
	color: #555;
	margin: 0;
}
h1{
	text-align: center;
	font-size: 180%;
	line-height: 120%;
	padding: 5% 0;
}
h2{
	text-decoration: underline;
	line-height: 280%;
	padding-left: 2%;
}
h3{
	line-height: 110%;
	padding: 5% 0;
}
p{
	padding: 1%;
}
img{
	text-align: center;
	max-width: 100%;
	height: auto;
	width: auto;
}
a{
	color: #FFF;
	text-decoration: none;
	font-weight: bold;
}
a:hover{
	color: #FFF;
	text-decoration: underline;
}
header{
	background: #FF0000; 
	width: 100%;
	height: 86px;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 100;
	opacity: 0.90;
}
#logo{
	margin: 20px;
	float: left;
	width: 200px;
	height: 60;
	background: url(http://www.svphorgen.ch/wordpress/wp-content/uploads/2014/01/schweizerkreuz.gif)no-repeat center;
}
nav{
	float: right;
	padding: 35px 20px 20px 0;
}
#menu-icon{
	display: hidden;
	width: 40px;
	height: 40px;
	background: url(http://www.w3newbie.com/wp-content/uploads/icon.png)center;
}
a:hover#menu-icon{
	border-radius: 4px 4px 0 0;
}
ul{
	list-style: none;
}
nav ul li {
	display: inline-block;
	float: left;
	padding: 10px;
}
.current{
	color: #FFF;
	text-decoration: underline;
}
#doc{
	margin: 40px 0;
}
#content{
	margin: 0 auto;
	max-width: 1140px;
	margin-top: 110px;
}
.blueberry{
	max-width: 960px;
	margin-top: 110px;
}
section{
	width: 29%;
	float: left;
	margin:2% 2%;
	text-align: center;
}
.clear{
	clear: both;
}
article{
	float: left;
	margin: 0 auto;
	width: 50%;
	height: auto;
	padding: 4%;
}
aside{
	float: right;
	margin: 0 auto;
	width: 35%;
	height: auto;
	padding: 3%;
}
ul.car li{
	padding-left: 3%;
}
footer{
	background: #FF0000;
	width: 100%;
	overflow: hidden;
	opacity: o.90;
}
footer p,footer h3{
	color: #FFF;
}
footer p a{
	color: #FFF;
	text-decoration: none;
}
ul.social li {
	display: inline;
}
ul.social li img{
	height: 50px;
}
footer.second{
	border-top: 1px solid #4D4E50;
	background-color: #333333;
	max-height: 50px;
	text-align: center;
	opacity: 0.95;
}
/**-----------endcss**/
/**media!!*/
@media screen and (max-width: 478px){
	body{
		position: absolute;
	}
}
@media screen and (max-width: 740px){
	header{
		position: absolute;
	}
	#menu-icon{
		display: inline-block;
	}
	nav ul,nav:active ul{
		display: none;
		position: absolute;
		padding: 20px;
		background: #405580;
		border: 1px solid #FFF;
		right: 20px;
		top: 60px;
		width: 50%;
		border-radius: 2px 0 2px 2px;
	}
	nav li{
		text-align: center;
		width: 100%;
		padding: 10px 0;
		margin: 0;
	}
	nav:hover ul{
		display: block;
	}
	section {
		float: left;
		width: 100%;
		margin: 0;
		padding: 0;
	}
	article {
		float: left;
		width: 100%;
		margin: 0;
		padding: 0;
	}

	aside {
		float: left;
		width: 100%;
		margin: 0;
		padding: 0;
	}
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="jquery.blueberry.js"></script>
<script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
</script>
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
<header>
   <a href="#" id="logo"></a>
   <nav>
	  <a href="#" id="menu-icon"></a>
	<ul>
      <li><a href="#" class="current">Home</a></li>
      <li><a href="#">Product</a></li>
      <li><a href="#">Plans</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Plans</a></li>
      <li><a href="#">About Us</a></li>
      
	</ul>
</nav>
		</header>
		<divid="doc">
		<div id="content">
			<div class="blueberry">
				<ul class="slides">
				 <li><img src="http://www.mazda.co.uk/Canvas/showroom_2015/l10n/master/Features/images/RHD/desktop/960x470_features_panel_kodo.jpg"></li>
				 <li><img src="https://www.hmfusa.com/Data/TeamSite/HCA/HMF/img/homepage/2016-HMF-HOMEPAGE-NA-TOPSAFETY-D-CAROUSEL-960X470.jpg"></li>
				 <li><img src="http://95octane.com/wp-content/uploads/2014/07/2005_holden_efijy_l.jpg"></li>
				 <li><img src="http://indianautosblog.com/wp-content/uploads/2015/02/Hyundai-i20-South-Africa-radio-console.jpg"></li>
				</ul>
			</div>
		</div>
	</div>
	<section>
<img src="http://www.w3newbie.com/wp-content/uploads/trainers.png"/>
<h1>Best Dellars Around!</h1>
<p>We Sell caars only</p>
	</section>
	<section>
<img src="http://www.w3newbie.com/wp-content/uploads/location.png"/>
<h1>Location!</h1>
<p>Bankok</p>
	</section>
	<section>
<img src="http://www.w3newbie.com/wp-content/uploads/check.png"/>
<h1>cheack us out</h1>
<p>Free ofers around</p>
	</section>
	<div class="clear"></div>
	<article>
<img src="http://flasheffect.com/wp-content/uploads/BMW-Unveils-Self-Driving-Car-at-CES-800x532.jpg"/>
	</article>
	<aside>
		<h2>Oure product list</h2>
		<ul class"Car"></ul>
		<li><h3>BMW</h3></li>
		<li><h3>Ford</h3></li>
		<li><h3>HUNDAI</h3></li>
	</aside>
	<div class="clear"></div>
	<section>
<h1>Servise</h1>
<img src="http://www.autoguide.com/auto-news/wp-content/uploads/2011/12/lexus_service_department.jpg"/>
<p>Oure servise center is all around the country.</p>
	</section>
	<section>
<h1>Upgrades</h1>
<img src="http://www.bodymotion.com/uploads/DSC03117.JPG"/>
<p>Upgrade is the next thing for yout style.</p>
	</section>
	<section>
<h1>Show room</h1>
<img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/85/Car_showroom.jpg/640px-Car_showroom.jpg"/>
<p>See for yourself to understand the lgic we make.</p>
	</section>
	<footer>
<section>
<h3><b>Car</b></h3>
<p><b>548-321-55</b><br><br>
	52/3 Ramkhamheng<br>
	Bankok,pa1254<br>
	car@thecar.com</p>
</section>
<section>
<h3>Connect With Us!</h3>
<ul class="social">
	<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/facebook1.png"/></a></li>
	<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/googleplus.png"/></a></li>
	<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/twitter1.png"/></a></li>
	<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/youtube1.png"/></a></li>
</ul>

</section>
<section>
	<img src="http://www.gamescity.nl/files/2012/03/637094-turn_10_large.jpg"/>
</section>
	</footer>
	<footer class="second"><p>@Copyright-Car,2016.</p>
	</footer>
	
	</body>
</html>