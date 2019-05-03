<!DOCTYPE html>
<html>
<head>
  <title>DT Trouser</title>
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
        <img src="img/biluxury.png" style="height: 40px; width: 150px; margin: 5px;">
            </div>
              <ul class="nav navbar-nav">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li class="nav navbar-nav"><a href="product.php">All Product</a></li>
                    <?php
                      require_once('./dbconnector.php');
                      $conn  = new DBConnect();
                      $sql = "Select * from category";
                      $row = $conn->runQuery($sql);
                      for ($i=0; $i < count($row) ; $i++) { ?>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $row[$i][1] ?><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <?php 
                            require_once('./dbconnector.php');
                            $conn  = new DBConnect();
                            $sql = "Select * from subcat where CatID=" .  $row[$i][0];
                            $rows = $conn->runQuery($sql);
                            for ($j=0; $j < count($rows) ; $j++) { ?>
                              <li><a href="<?php echo $rows[$j][3] ?>" style="font-style: italic;"><?php echo $rows[$j][1] ?></a></li>
                            <?php } ?>
                          </ul>
                        </li>
                    <?php } ?>
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
      <h2><small>TROUSER</small></h2>
        <hr>
        <div class="product">
      <?php
      require_once('./dbconnector.php');
      $conn = new DBConnect();
      $sql = "select * from product where subcatID=6";
      $row = $conn->runQuery($sql);
      for ($i=0; $i < count($row) ; $i++) { ?>
        <div class="ads1">
            <div class="title">
              <b><?php echo $row[$i][1] ?></b>
            </div>
            <br>
            <div>
              <a href="information.php?proId=<?php echo $row[$i][0] ?>"><img src="<?php echo $row[$i][2] ?>"></a>
            </div>
            <br>
            <div class="descrip">
              <?php echo $row[$i][3] ?>
            </div>
            <div class="price">
              <?php echo $row[$i][4] ?>
            </div>
            <hr>
          </div>
        <?php } ?>

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