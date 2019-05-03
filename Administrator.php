<!DOCTYPE html>
<html>
<head>
	<title>DT Management</title>
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
			color: black;
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
			width: 80%;
			background-color: white;
			float: left;
			position: relative;
			margin: 0px 10px;
		}
		.ads1 img {
			width: 38px;
			height: 54px;
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
  	</style>
  	<script>
  		function deleteid(id)
  	{
  		if (confirm("Do you want to delete?")==true) {
  			window.location="Administrator.php?del="+id;
  			return false;
  		}
  	}
  	</script>
</head>
<body>
	<?php
	if (isset($_POST['newproName'])) {
		require_once('./dbconnector.php');
		$proImage = "img/" . $_POST['newImage'] ;
		$proName = $_POST['newproName'];
		$proId = $_POST['oldproId'];
		$proDes = $_POST['newDescrip'];
		$prPrice = $_POST['newPrice'];
		$catId = $_POST['newsubcatId'];
		$conn = new DBConnect();
		$sql = "update product SET proId='". (int)$proId ."',ProName='". $proName ."',image='". $proImage ."',descrip='". $proDes ."',Price='".$prPrice ."',subcatID ='".(int)$catId ."' WHERE ProID =".$proId;
		$conn -> execStatement($sql);
		$message = "Product has been updated";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
 	?>
	<?php
	if (isset($_POST['proName'])) {
			require_once('./dbconnector.php');
			$proImage = "img/" . $_POST['Image'] ;
			$proName = $_POST['proName'];
			$proDes = $_POST['descrip'];
			$prPrice = $_POST['price'];
			$catId = $_POST['catId'];
			$conn = new DBConnect();
			$sql = "insert into product(ProName, image, descrip, Price, subcatID) VALUES ('". $proName ."','". $proImage ."','". $proDes ."','".$prPrice ."','". (int)$catId ."')";
			$conn -> execStatement($sql);
			$message = "Product Added successfully";
			echo "<script type='text/javascript'>alert('$message');</script>";
	}
 	?>
	<?php 
		require_once('./dbconnector.php');
		if(isset($_GET['del']))
	   {
	   	$conn = new DBConnect();
	   	$id = $_GET['del'];
	    $sql ="delete from product WHERE proId ='". (int)$id ."'";
	    $conn->execStatement($sql);
	    $message = "Product Deleted!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	   }
	 ?>
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
    		<h2><small>MANAGEMENT PRODUCT</small></h2>
      		<hr>
      		<button><a href="Addproduct.php"><span class="glyphicon glyphicon-plus"></span> Add Product</a></button>
			<div class="product">
			<?php
			require_once('./dbconnector.php');
			$conn = new DBConnect();
			$sql = "select * from product";
			$row = $conn->runQuery($sql);
			for ($i=0; $i < count($row) ; $i++) { ?>
				<div class="ads1">
					<div class="title">
						<b><?php echo $row[$i][1] ?></b>
					</div>
					<div>
						<a href="information.php?proId=<?php echo $row[$i][0] ?>"><img src="<?php echo $row[$i][2] ?>"></a>
					</div>
					<div class="descrip">
						<?php echo $row[$i][3] ?>
					</div>
					<div class="price">
						<?php echo $row[$i][4] ?>
					</div>
					<ul class="nav navbar-nav navbar-right">
        				<li><a href="editproduct.php?proId=<?php echo $row[$i][0] ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></li>
        				<li><a href="" onclick="return deleteid(<?php echo $row[$i][0] ?>) "><span class="glyphicon glyphicon-trash"></span> Delete</a></li>
     				</ul>
     				<hr>
				</div>
			<?php } ?>
		</div>
        </div>
      </div>
    </div>
</body>
</html>