<?php
require_once '../../model/PaymentData/BillInfo.php';

class BillController{

	public function bill_view($bookid)
	{
		$Bill = new Bill();
	
		$viewBill = $Bill->bill_model($bookid);

	
		return $viewBill;
	} 
}

?>