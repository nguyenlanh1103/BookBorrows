<?php 
    class user{
		public $id;
        public $username;
        public $email;
        public $password;
		public $role;
        public $phone;
		function __construct($id, $role){
			$this->id = $id; $this->role=$role;
		}
	}
	function getArr(){
		// require "connect.php";
		$conn = new mysqli("localhost","root","","qlythuviensach");
		$cr = $conn->query("select * from users"); 
		while($r=$cr->fetch_array()){
			$arr[]=new user($r["id"],$r["role"]);
		}
		mysqli_close($conn);
		return $arr;
	}

	class category{
		public $id;
		public $booktitle;
		function __construct($id, $booktitle){
			$this->id = $id; $this->booktitle=$booktitle;
		}
	}
	function getArr1(){
		// require "connect.php";
		$conn = new mysqli("localhost","root","","qlythuviensach");
		$cr = $conn->query("select * from categorys"); 
		while($r=$cr->fetch_array()){
			$arr[]=new category($r["id"],$r["booktitle"]);
		}
		mysqli_close($conn);
		return $arr;
	}
?>