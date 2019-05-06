<!DOCTYPE html>
<html>
<head>
	<title>DT Search</title>
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
				<a href="index.php"><img src="img/ATN.png" style="height: 40px; width: 150px; margin: 5px;"></a>
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
    		<h2><small>SEARCH</small></h2>
      		<hr>
			<div class="product">
			<?php
			include 'dbconnector.php';
    		$proname = $_GET['proname'];
       		$queryproduct = "SELECT * FROM products WHERE proname LIKE '%{$word}%' ORDER BY id DESC LIMIT 5";
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
             <div class="col s12 m4">
                  <div class="card hoverable animated slideInUp wow">
                  	<div class="title">
						<span class="card-title grey-text"><?= $name_product; ?></span><br>
					</div>
                    <div class="card-image">
                        <a href="product.php?id=<?= $id_product; ?>">
                          <img src="<?= $image_product; ?>"></a>
                          <br>
                      </div>
                      <div class="descrip">
						<i class="material-icons"><?= $descrip_product;?></i></a><br>
					</div>
                      <div class="card-action">
                      	<div class="price">
						<h5 class="white-text"><?= $price_product; ?> $</h5>
					</div>
                      </div>
                  </div>
                </div>
                <?php }} else {
             	echo "<div class='container center-align'>
                   <h4 class='black-text'>Item not found</h4>
                   </div>";
           		}?>
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