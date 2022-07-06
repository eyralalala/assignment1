<?php
require_once '../../model/PaymentData/PaymentSuccessInfo.php';

class PaymentSuccessController{

	public function paymentsuccess_view($bookid)
	{
		$PaymentSuccess = new PaymentSuccess();
	
		$viewPaymentSuccess = $PaymentSuccess->paymentsuccess_model($bookid);

	
		return $viewPaymentSuccess;
	} 
}

?>