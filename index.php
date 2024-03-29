<!DOCTYPE html>
<html>
<head>
	<title>DTLuxury</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		.container1 {
			width: 100%;
			margin: 0 auto;
		}
		.header {
			width: 100%;
			position: relative;
			background-color: black;
		}
		.header img {
			margin-top: 10px;
			width: 150px;
			height: 40px;
		}
		.header p {
			position: absolute;
			left: 10px;
			top: 10px;
		}
		.bar {
			width: 100%;
			background-color: #B2B1B1;
			padding: 15px;
			overflow: hidden;
			margin: 0 auto;
		}
		.bar button {
			padding: 0 auto;
			float: left;
		}
		.bar a {
			text-decoration: none;
			color: green;
			text-align: center;
			padding: 10px 10px;
		}
		.main {
			width: 100%;
			box-sizing: border-box;
			margin-top: 50px;
		}
		.carousel-inner > .item > img,
  		.carousel-inner > .item > a > img {
      		width: 80%;
      		margin: auto;
  		}
  		hr {
  			height: 3px; 
  			background-color: black; 
  			width: 90%;
  		}
  		.ads1 {
			width: 23%;
			background-color: #EDEDED;
			float: left;
			position: relative;
			margin: 0px 10px;
		}
  		.link {
			position: absolute;
			right: 20px;
			bottom: 10px;
			padding: 2px 2px;
		}
		.link a:hover {
			background-color: #9D9999;
			color: blue;
		}
		.descrip {
			margin: 5px;
			padding: 5px;
		}
		.ads1 img {
			width: 100%;
			height: 250px;
		}
		.footer1 {
			width: 100%;
			margin: 20px;
			background-color: black;
			height: 300px;
		}
		.footer1 p {
			color: white;
			position: absolute;
			right: 200px;
			margin: auto 0;
		}
		.footer1 hr {
			background-color: white;
		}
	</style>
</head>
<body>
	<div class="container1">
		<div class="header">
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
				    <div class="navbar-header">
				      	<a href="index.php"><img src="img/ATN.png" style="height: 40px; width: 150px; margin: 5px;"></a>
				    		</div>
				    			<ul class="nav navbar-nav">
				      				<li class="active"><a href="index.php">Home</a></li>
				      				<li class="nav navbar-nav"><a href="product.php">All Product</a></li>
				    			</ul>
				    			<ul class="nav navbar-nav navbar-right">
				    				<li><a href="Administrator.php"><span class="glyphicon glyphicon-cog"></span> Manage</a></li>
        							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Duy Tung</a></li>
        							<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
     							</ul>
				  			</div>
				</nav>
		</div>
		<div class="main">
			<br>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  			<ol class="carousel-indicators">
    			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    			<li data-target="#myCarousel" data-slide-to="1"></li>
    			<li data-target="#myCarousel" data-slide-to="2"></li>
  			</ol>
  <!-- Wrapper for slides -->
  			<div class="carousel-inner" role="listbox">
    			<div class="item active">
    				<a href="product.php"><img src="img/Toy1.png" alt="New Toys"></a>
      					<div class="carousel-caption">
        					<h3>New Toys</h3>
        					<p>New arival</p>
      					</div>
    			</div>
    			<div class="item">
      				<a href="product.php"><img src="img/Toy2.jpg" alt="Toys of the day"></a>
      					<div class="carousel-caption">
        					<h3>Toy of the day</h3>
        					<p>Fast and Furious</p>
      					</div>
    			</div>
    			<div class="item">
      				<a href="product.php"><img src="img/Toy3.png" alt="Action"></a>
      					<div class="carousel-caption">
        					<h3>Action</h3>
        					<p>Feel good with ours</p>
      					</div>
    			</div>
  			</div>
  				<!-- Left and right controls -->
  				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  				</a>
  				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  				</a>
			</div>
			<br>
			<hr>
			<div align="center">
				<p style="font-size: 30px;">New Arrival for today</p>
			</div>
			<br>
			<table align="center" cellspacing="5px;">
				<tr>
					<td style="padding: 15px;"><a href="T-Shirt.php"><img src="img/Nos1.jpg" width="600px" height="600px;" alt=""></a></td>
					<td style="padding: 15px;"><a href="T-Shirt.php"><img src="img/Nos2.jpg" width="600px" height="600px;" alt=""></a></td>
				</tr>
				<tr>
					<td style="padding: 15px;"><a href="Shirt.php"><img src="img/Nos3.jpg" width="600px" height="600px;" alt=""></a></td>
					<td style="padding: 15px;"><a href="Trouser.php"><img src="img/Nos4.jpg" width="600px" height="600px;" alt=""></a></td>
				</tr>
			</table>
			<hr>
			<div align="center">
				<p style="font-size: 30px;">Hot News</p>
			</div>
			<br>
			<?php
			$NoiBat = array(array("images" =>"img/NB1.jpg","descrip" =>"Cách chọn áo Vest đẹp cho một quý ông"),
							array("images" =>"img/NB2.png","descrip" =>"Bí kíp phối suit cùng cavat"),
							array("images" =>"img/NB3.jpg","descrip" =>"8 quy tắc cài áo vest cho quý ông"),
							array("images" =>"img/NB4.jpg","descrip" =>"4 phụ kiện cho những bộ vest chỉn chu"));
			 ?>
			 <?php for ($i=0; $i < count($NoiBat) ; $i++) { ?>
					<div class="ads1">
						<div>
							<img src="<?php echo $NoiBat[$i]['images'] ?>">
						</div>
						<br>
						<div class="descrip">
							<?php echo $NoiBat[$i]['descrip'] ?>
						</div>
						<br>
						<br>
						<div class="link">
							<button type="button" class="btn btn-primary btn-sm">Xem thêm</button>
						</div>
					</div>
			<?php } ?>
			<hr>
		</div>
		<div class="footer1">
			<nav class="navbar navbar-inverse" style="background-color: #6E6C6C" >
  				<div class="container-fluid">
    				<ul class="nav navbar-nav">
      					<li><a href="#">UNIFORM</a></li>
      					<li><a href="#">GUIDE</a></li>
      					<li><a href="#">VIP MEMBER</a></li>
      					<li><a href="#">RECRUITMENT</a></li>
    				</ul>
  				</div>
			</nav>
			<div>
				<p>Follow us: 
				<a href=""><img src="img/FBIC.png" width="15px;" height="15px;"></a>
				<a href=""><img src="img/YTIC.png" width="15px;" height="15px;"></a>
				<a href=""><img src="img/GGIC.png" width="15px;" height="15px;"></a>
				<a href=""><img src="img/TWIC.png" width="15px;" height="15px;"></a>
				</p>
			</div>
			<br>
			<hr>
			<br>
			<div style="margin-left: 200px; color: white">HOTLINE: 0166-88-212-02</div>
			<br>
			<div style="margin-left: 200px; color: white">ADDRESS: TP. HANOI, TP. HO CHI MINH, TP.HALONG</div>
			<br>
			<br>
			<div style="color: white;" align="center">
				© Copyright 2016 Biluxury.vn. All rights Reserved
			</div>
		</div>
	</div>
</body>
</html>