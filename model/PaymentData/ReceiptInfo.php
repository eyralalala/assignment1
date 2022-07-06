<?php
require_once "../../libs/database.php";

class Receipt{

	public function receipt_model($bookid)
	{

		$query = "SELECT * FROM eventbook WHERE bookingid = '$bookid'";
			
		$di = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
		
		return $di;
	}

}
?>