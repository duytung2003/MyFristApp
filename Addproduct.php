<!DOCTYPE html>
<html>
<head>
	<title>DT Add product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	<link rel="stylesheet" href="style.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php"><img src="img/biluxury.png" style="height: 40px; width: 150px; margin: 5px;"></a>
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
      			<div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Đồ chơi vận động</a></h4></div>
      				<div id="collapse1" class="panel-collapse collapse in">
        				<div class="panel-body"><a href="Shirt.php">Con quay</a></div>
        				<div class="panel-body"><a href="T-Shirt.php">Xe đạp</a></div>
        				<div class="panel-body"><a href="Vest.php">Đồ chơi dã ngoại</a></div>
        				<div class="panel-body"><a href="OverCoat.php">Đồ chơi dưới nước</a></div>
      				</div>
    			</div>
    		<div class="panel panel-default">
      			<div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Đồ chơi trí tuệ</a></h4></div>
      				<div id="collapse2" class="panel-collapse collapse in">
      					<div class="panel-body"><a href="Jeans.php">Đồ chơi nhập vai</a></div>
      					<div class="panel-body"><a href="Trouser.php">Đồ chơi xếp hình</a></div>
      					<div class="panel-body"><a href="Short.php">Đồ chơi lắp ráp</a></div>
      				</div>
    			</div> 
  			<div class="panel panel-default">
      			<div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Đồ chơi phương tiện</a></h4></div>
      				<div id="collapse3" class="panel-collapse collapse in">
      					<div class="panel-body"><a href="Tie.php">Máy bay, điều khiển</a></div>
      					<div class="panel-body"><a href="SunGlasses.php">Xe mô hình</a></div>
      					<div class="panel-body"><a href="Wallet.php">Đường đua</a></div>
      					<div class="panel-body"><a href="Belt.php">Xe điều khiển</a></div>
      				</div>
    			</div>
    		<div class="panel panel-default">
      			<div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Bộ sưu tập đồ chơi</a></h4></div>
      				<div id="collapse4" class="panel-collapse collapse in">
      					<div class="panel-body"><a href="Spring-Summer.php">Bộ sưu tập siêu anh hùng</a></div>
      					<div class="panel-body"><a href="Fall-Winter.php">Bộ sưu tập phim ảnh</a></div>
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
    		<h2><small>NEW PRODUCT</small></h2>
      		<hr>
			<div class="product">
				<form id="form1" action="Administrator.php" method="POST">
						  		<span id="confirmId" class="confirmId"></span>
						  		<label for="prname" style="font-size: 15px;">Product Name:</label>
						  		<input type="text" class="form-control" id="prname" name="proName"  pattern="^[A-Za-z -]+$" required>
						  		<label for="fileToUpload" style="font-size: 15px;">Product Image:</label>
						  		<input type="file" name="Image" id="fileToUpload" class="form-control" required>
						  		<label for="price" style="font-size: 15px;">Product Price:</label>
						  		<input type="text" class="form-control" id="prprice" name="price" required>
						  		<label for="descrip" style="font-size: 15px;">Product Description:</label>
						  		<textarea name="descrip" id="prdes" cols="30" rows="5" class="form-control" required></textarea>
						  		<label for="sel1" style="font-size: 15px;">Category:</label>
								  <select class="form-control" id="sel1" name="catId" style="color: black;">
								    <?php 
								    	require_once('./dbconnector.php');
								    	$conn = new DBConnect();
								    	$sql = "select * from subcat";
								    	$rows = $conn -> runQuery($sql);
								     ?>
								     <?php foreach ($rows as $key) { ?>
								     	<option value="<?php echo $key[0] ?>"><?php echo $key[1] ?></option>
								     <?php } ?>
								  </select>
								  <br>
						  		<button class="glyphicon glyphicon-ok" type="submit" id="submit"> OK</button>
				</form>
							<br>
							<button class="glyphicon glyphicon-triangle-left"><a href="Administrator.php" style="text-decoration: none;color: black"> Back</a></button>
			</div>
        </div>
      </div>
    </div>
</body>
</html>