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

<h1>My first PHP page</h1>

<?php 
$sql = "SELECT id, name FROM label";
$db = parse_url(getenv("DATABASE_URL"));
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));
$stmt = $pdo->prepare($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$resultSet = $stmt->fetchAll();
foreach ($resultSet as $row) {
	echo $row['name'] . '\n';
}
?>
</body>
</html>