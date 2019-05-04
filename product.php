<!DOCTYPE html>
<html>
<head>
	<title>DT Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	<style>
  		.product {
			width: 80%
			margin: 20px;
			margin-top: 60px;
  		}
  		.panel-body a {
  			text-decoration: none;
  			color: black;
  		}
  		.panel-body a:hover {
			color: #D0C9C9;
			text-decoration: none;
  		}
  		.item {
  			width: 20%;
  			float: left;
  			margin-left: 20px;
  			background-color: gray;
  		}
  		.title {
			background-color: #5F5F5F;
			color: white;
			padding: 10px 10px;
			line-height: 20px;
			padding-left: 5px;
		}
  		.descrip {
			margin: 5px;
			padding: 5px;
		}
		.Price {
			margin: 5px;
			padding: 5px;
		}
		.ads1 {
			width: 23%;
			background-color: white;
			float: left;
			position: relative;
			margin: 0px 10px;
		}
		.ads1 img {
			width: 100%;
		}
		.price {
			padding: 20px;
			color: #75C15B;
		}
		/* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    	.row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    	.sidenav {
    		margin-top: 60px;
      		background-color: #f1f1f1;
      		height: 100%;
    	}
    
    /* Set black background color, white text and some padding */
    	footer {
      		background-color: #555;
      		color: white;
      		padding: 15px;
    	}
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    	@media screen and (max-width: 767px) {
      	.sidenav {
        	height: auto;
        	padding: 15px;
      	}
      	.row.content {height: auto;} 
    	}
    	.col-sm-9 {
    		margin-top: 60px;
    	}
    	hr {
    		height: 5px;
    		background-color: #f1f1f1;
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
			width: 90%;
		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<img src="img/biluxury.png" style="height: 40px; width: 150px; margin: 5px;">
				    </div>
				    	<ul class="nav navbar-nav">
				      		<li class="active"><a href="index.php">Home</a></li>
				      		<li class="nav navbar-nav"><a href="product.php">All Product</a></li>
				    	</ul>
		<ul class="nav navbar-nav navbar-right">
        	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Duy Tung</a></li>
        	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
     	</ul>
     	</div>
	</nav>
	<div class="container-fluid">
  	<div class="row content">
    <div class="col-sm-3 sidenav">
      <h4 align="center">BI Luxury Categories</h4>
			<div class="panel-group" id="accordion">
    		<div class="panel panel-default">
      			<div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Clothes</a></h4></div>
      				<div id="collapse1" class="panel-collapse collapse in">
        				<div class="panel-body"><a href="Shirt.php">Shirts</a></div>
        				<div class="panel-body"><a href="T-Shirt.php">T-Shirt</a></div>
        				<div class="panel-body"><a href="Vest.php">Vest</a></div>
        				<div class="panel-body"><a href="OverCoat.php">OverCoat</a></div>
      				</div>
    			</div>
    		<div class="panel panel-default">
      			<div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Pants</a></h4></div>
      				<div id="collapse2" class="panel-collapse collapse in">
      					<div class="panel-body"><a href="Jeans.php">Jeans</a></div>
      					<div class="panel-body"><a href="Trouser.php">Trouser</a></div>
      					<div class="panel-body"><a href="Short.php">Short</a></div>
      				</div>
    			</div> 
  			<div class="panel panel-default">
      			<div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Accessories</a></h4></div>
      				<div id="collapse3" class="panel-collapse collapse in">
      					<div class="panel-body"><a href="Tie.php">Tie</a></div>
      					<div class="panel-body"><a href="SunGlasses.php">SunGlasses</a></div>
      					<div class="panel-body"><a href="Wallet.php">Wallet</a></div>
      					<div class="panel-body"><a href="Belt.php">Belt</a></div>
      				</div>
    			</div>
    		<div class="panel panel-default">
      			<div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Favorite</a></h4></div>
      				<div id="collapse4" class="panel-collapse collapse in">
      					<div class="panel-body"><a href="Spring-Summer.php">Spring-Summer</a></div>
      					<div class="panel-body"><a href="Fall-Winter.php">Fall-Winter</a></div>
      				</div>
    			</div>	
    		</div>
    		<br>
    		<br>
    		<form action="searched.php">
    		<div class="input-group">
    			<input type="text" class="form-control" name="keyword" placeholder="Search Product..">
				<span class="input-group-btn">
          			<button class="btn btn-default" type="submit">
            			<span class="glyphicon glyphicon-search"></span>
          			</button>
        		</span>
      		</div>
      		</form>
    </div>
    <div class="col-sm-9">
    	<h2><small>ALL PRODUCT</small></h2>
      	<hr>
      	<div class="product">
			 <?php
          	include 'dbconnector.php';
          //get categories
            $querycategory = "SELECT * FROM product";
            $total = pg_query($connection,$querycategory);
            if (pg_num_rows($total) > 0) { 
            // output data of each row
            while($rowcategory = pg_fetch_assoc($total)) { 
              $id_categorydb = $rowcategory['proid'];
              $name_category = $rowcategory['proname'];
              $descrip_category = $rowcategory['descrip'];
              $price_category = $rowcategory['price'];
              $image_category = $rowcategory['image'];
              ?>
            <a href="information.php?proId=<?= $id_categorydb; ?>" ><?= $name_category; ?></a>
            <?php 
            $queryproduct = "SELECT proid, proname, image, descrip, price FROM product WHERE id_categorydb = '{$id_categorydb}' ORDER BY proid;";
            $result = pg_query($connection,$queryproduct);
            if (pg_num_rows($result) > 0) {
            // output data of each row
            while($rowproduct = pg_fetch_assoc($result)) {
              $id_product = $rowproduct['proid'];
              $name_product = $rowproduct['proname'];
              $descrip_product = $rowproduct['descrip'];
              $price_product = $rowproduct['price'];
              $image_product = $rowproduct['image'];
             ?>
            <div class="ads1">
					<div class="title">
						<b><?= $name_product; ?></b>
					</div>
					<br>
					<div>
						<a href="information.php?proId=<?= $id_categorydb; ?>"><img src="<?php echo $image_product ?>"></a>
					</div>
					<br>
					<div class="descrip">
						<?= $descrip_product; ?>
					</div>
					<div class="price">
						<?= $price_product; ?>
					</div>
					<hr>
				</div>
       		<?php }} ?>
		</div>
        </div>
      </div>
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
</body>
</html>