<?php

require_once "../../libs/database.php";

class PaymentSuccess{

	public function paymentsuccess_model($bookid)
	{

		$query = "SELECT * FROM eventbook WHERE bookingid = '$bookid'";
			
		$di = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);
		
		return $di;
	}

}

?>