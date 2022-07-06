<?php

require_once '../../model/PaymentData/PaymentPageInfo.php';
 
class PaymentPageController {

	public function paymentpage_view($bookid)
	{
		$PaymentPage = new PaymentPage();
	
		$viewPaymentPage = $PaymentPage->paymentpage_model($bookid);

	
		return $viewPaymentPage;
	} 
}
?>