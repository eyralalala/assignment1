<?php

require_once '../../model/PaymentData/ReceiptInfo.php';

class ReceiptController {

	public function receipt_view($bookid)
	{
		$Receipt = new Receipt();
		
		$viewReceipt = $Receipt->receipt_model($bookid);

	
		return $viewReceipt;
	} 
}

?>