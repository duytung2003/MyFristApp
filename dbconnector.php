<?php 
class DBConnect {
	public $host = 'localhost';
	public $dbname ='productdb';
	public $un = 'root';
	public $pw = '';
	public function runQuery($sql)
	{
		$conn = new mysqli($this->host,$this->un,$this->pw,$this->dbname);
		//chay cau truy van
		$result = $conn->query($sql);
		//doc ket qua chay cau truy van, tra ve 1 mang?
		$row = mysqli_fetch_all($result);
		//dong ket noi
		$conn->close();
		return $row;
	}
	public function execStatement($sql)
	{
		$conn = new mysqli($this->host,$this->un,$this->pw,$this->dbname);
		//chay cau truy van
		$result = $conn->query($sql);
		//doc ket qua chay cau truy van, tra ve 1 mang?
		//dong ket noi
		$conn->close();
	}
}
?>
