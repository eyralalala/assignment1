<?php

require_once '../../controller/PaymentController/PaymentSuccessController.php';
$bookid = $_GET['id'];
	$PaymentSuccess = new PaymentSuccessController();
	$PaymentSuccess->paymentsuccess_view($bookid);
    $move=$PaymentSuccess->paymentsuccess_view($bookid);

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
    <title>Landing Page</title>

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
		
		
     
	
	<!-- Landing Page Start -->
    <section id="landing-success-css">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/100.png);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">

                            <!-- Welcome Text -->
							<h3><b><a class="header-text">Thanks for your payment.</a></b></h3>
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text">
									<center>
										<br><br>
										<h4><img src="../../libs/img/payment/tick.png" size="120">Congratulations, payment successful!</h4><br><br>
										<p>We are delighted to inform you that we have received your payments.</p><br><br><br>
										<button onclick="location.href='Receipt.php?id=<?php echo $row['bookingid']; ?>'" class="okBTN">OK</button>
									</center>
                                </div>
							</div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Landing Area End -->
		
	<!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="../../libs/img/core-img/logo12.png" alt=""></a>

                        <p class="mb-30">We would love to serve you and let you enjoy your culinary experience. Excepteur sint occaecat cupidatat non proident.</p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

                

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