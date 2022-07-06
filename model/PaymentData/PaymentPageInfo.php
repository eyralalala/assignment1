<?php
require_once "../../libs/database.php";

class PaymentPage{

	public function paymentpage_model($bookid)
	{

		$query = "SELECT * FROM eventbook WHERE bookingid = '$bookid'";
			
		$di = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
		
		return $di;
	}

}
?>