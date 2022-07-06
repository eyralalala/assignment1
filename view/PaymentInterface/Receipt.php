<?php

require_once '../../controller/PaymentController/ReceiptController.php';
$bookid = $_GET['id'];
	$Receipt = new ReceiptController();
	$Receipt->receipt_view($bookid);
    $move=$Receipt->receipt_view($bookid);

    foreach ($move as $row) {

    $cust_id =$row['cust_id'];
    $repairtype=$row['repairtype'];
    $name=$row['custname'];  
    $date=$row['date'];
    $Payment_Amount=$row['price'];

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
    <title>Payment Successful</title>

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

    
		
		
        
	
	<!-- Bill Area Start -->
    <section id="receipt-css">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/100.png);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">

                            <!-- Welcome Text -->
							<h3><b><a class="header-text">Thanks for order with us.</a></b></h3>
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text">
									<center>
									<hr><h4>Online Payment Receipt</h4><br>
									</center>
                                    <form method="POST" action="PaymentPage.php">
										<table border=0>
										<tr>
										<td>Order ID</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $orderID; ?></td>
										</tr>
										<tr>
										<td>Cust Name</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cust_id; ?></td>
										</tr>
										<tr>
										<td>Order Detail</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $orderdetail; ?></td>
										</tr>
						
										<tr>
										<td>Payment Time</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $Created_Time; ?></td>
										</tr>
										<tr>
										<td>Payment Type</td><td>&nbsp;&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $Payment_Method; ?></td>
										</tr>
										<tr>
										<td>Total Price</td><td>&nbsp;&nbsp;&nbsp;: </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM&nbsp;<?php echo $Payment_Amount; ?></td>
										</tr>
										</table>	
										<br><br><br>										
									</form>
									<center>
									<a class="okBTN"><button onclick="location.href='../home.html'" class="okBTN">OK</button></a>
									</center>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </section>

	   
                

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