<?php

require_once '../../controller/PaymentController/BillController.php';
$bookid = $_GET['id'];
	$Bill = new BillController();
	$Bill->bill_view($orderid);
    $move=$Bill->bill_view($orderid);

    foreach ($move as $row) {

    $orderid =$row['orderid'];
    $custname=$row['custname'];
    $repairdetail=$row['repairdetail'];
    $price=$row['totalprice'];  
    $Payment_Amount=$row['price'];
    $paymentid=$row['paymentid'];

	}

?>
					
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Payment Details</title>

    <!-- Favicon -->
    <link rel="icon" href="../../libs/img/core-img/favicon1.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../libs/css/style0.css">
	<link type="text/css" href="../../libs/css/payment.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p>DCRSMS</p>
                        </div>
                    </div>
                
            </div>
        </div>
        <!-- Top Header Area End -->
		

    <!-- Bill Area Start -->
    <section id="bill-css">
            <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/100.png);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">

                            <!-- Welcome Text -->
							<h3><b><a class="header-text">Payment Details</a></b></h3><br>
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text">
									<p class="paymentDetailsHeader"> PaymentDetails</p><hr class="line">
                                    <table align="center">
                                    <tr>
										<td>Order ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                    <div class="div2"><?php echo $orderid; ?></div><br><br>
                    Repair details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                    <div class="div2"><?php echo $repairtype; ?></div><br><br>
                    Name&nbsp;&nbsp;&nbsp;&nbsp;: 
                    <div class="div2"><?php echo $custname; ?></div><br><br>
                    Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                    <div class="div2"><?php echo $date; ?></div><br><br>
                    Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                    <div class="div2"><?php echo $totalprice; ?></div><br><br>
                    <hr color="black">
                    Total Amount <div class="div2">RM <?php echo $Payment_Amount; ?></div><br>
										</tr>
									
									</table>

									<img src="../../libs/img/payment/secure_payment.png" class="secure_payment_png">
								
									<div class="form-group">
										<a href="../Indexhome.php" class="btn btn-danger" name="cancelBTN" role="button">Cancel</a>
						               	<input class="btn btn-primary" name="proceedBTN" type="submit" value="Proceed" style="margin-left:315px;" onclick="location.href='PaymentPage.php?id=<?php echo $row['bookingid']; ?>'">
										
						            </div>
                                </div>
							</div>
                    </div>
                </div>
		</div>
    </section>
    <!-- Bill Area End -->
	
    

    <!-- All JS Files -->
    <!-- jQuery -->
    <script src="../../libs/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../../libs/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../libs/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../../libs/js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="../../libs/js/default-assets/active.js"></script>
	<script type="text/javascript" src="../../libs/js/payment.js"></script>
	
	</body>

</html>