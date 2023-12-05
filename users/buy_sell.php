<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/front-end/buy_sell.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 11:21:28 GMT -->
<?php include 'head.php'; ?>

<body class="theme-warning">
	
	<?php include 'header.php' ?>
	
	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Buy And Sell</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Buy and Sell</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="py-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Buy BCN</h4>
						</div>
						<div class="box-body">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#market" role="tab">Market</a> </li>
								<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#limit" role="tab">Limit</a> </li>
								<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#stop" role="tab">Stop</a> </li>
							</ul>
							<div class="tab-content p-10 tabcontent-border">
								<div class="tab-pane active" id="market" role="tabpanel">
									<form class="dash-form">
										<div class="form-group">
										  <select class="form-select">
											<option>Good-Til-Canceled</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										  </select>
										</div>
										<p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										<p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" placeholder="0">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon">Price</span>
											<input type="number" class="form-control" placeholder="Bitcoin per 1">
										</div>
										<div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Fee: 0.1% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Rebate: 0.01% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Reserved </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<button type="submit" class="btn btn-block btn-success mt-20">Buy Limit</button>
									</form>
								</div>
								<div class="tab-pane" id="limit" role="tabpanel">
									<form class="dash-form">
										<div class="form-group">
										  <select class="form-select">
											<option>Good-Til-Canceled</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										  </select>
										</div>
										<p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										<p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" placeholder="0">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon">Price</span>
											<input type="number" class="form-control" placeholder="Bitcoin per 1">
										</div>
										<div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Fee: 0.1% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Rebate: 0.01% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Reserved </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<button type="submit" class="btn btn-block btn-success mt-20">Buy Limit</button>
									</form>
								</div>
								<div class="tab-pane" id="stop" role="tabpanel">
									<form class="dash-form">
										<div class="form-group">
										  <select class="form-select">
											<option>Good-Til-Canceled</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										  </select>
										</div>
										<p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										<p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" placeholder="0">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon">Price</span>
											<input type="number" class="form-control" placeholder="Bitcoin per 1">
										</div>
										<div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Fee: 0.1% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Rebate: 0.01% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Reserved </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<button type="submit" class="btn btn-block btn-success mt-20">Buy Limit</button>
									</form>
								</div>
							</div>
						</div>
					  </div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Sell BCN</h4>
						</div>
						<div class="box-body">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#market-sell" role="tab">Market</a> </li>
								<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#limit-sell" role="tab">Limit</a> </li>
								<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#stop-sell" role="tab">Stop</a> </li>
							</ul>
							<div class="tab-content p-10 tabcontent-border">
								<div class="tab-pane active" id="market-sell" role="tabpanel">
									<form class="dash-form">
										<div class="form-group">
										  <select class="form-select">
											<option>Good-Til-Canceled</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										  </select>
										</div>
										<p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										<p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" placeholder="0">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon">Price</span>
											<input type="number" class="form-control" placeholder="Bitcoin per 1">
										</div>
										<div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Fee: 0.1% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Rebate: 0.01% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Reserved </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<button type="submit" class="btn btn-block btn-danger mt-20">Sell Limit</button>
									</form>
								</div>
								<div class="tab-pane" id="limit-sell" role="tabpanel">
									<form class="dash-form">
										<div class="form-group">
										  <select class="form-select">
											<option>Good-Til-Canceled</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										  </select>
										</div>
										<p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										<p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" placeholder="0">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon">Price</span>
											<input type="number" class="form-control" placeholder="Bitcoin per 1">
										</div>
										<div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Fee: 0.1% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Rebate: 0.01% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Reserved </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<button type="submit" class="btn btn-block btn-danger mt-20">Sell Limit</button>
									</form>
								</div>
								<div class="tab-pane" id="stop-sell" role="tabpanel">
									<form class="dash-form">
										<div class="form-group">
										  <select class="form-select">
											<option>Good-Til-Canceled</option>
											<option>option 2</option>
											<option>option 3</option>
											<option>option 4</option>
											<option>option 5</option>
										  </select>
										</div>
										<p>Balance: <span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										<p>Best ask: <span class="fw-600">0.000001234 <i class="fa fa-bitcoin"></i></span></p>
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" placeholder="0">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon">Price</span>
											<input type="number" class="form-control" placeholder="Bitcoin per 1">
										</div>
										<div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Fee: 0.1% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Rebate: 0.01% </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<div class="d-flex justify-content-between">
											<p class="mb-5">Reserved </p>
											<p class="mb-5"><span class="fw-600">0 <i class="fa fa-bitcoin"></i></span></p>
										</div>
										<button type="submit" class="btn btn-block btn-danger mt-20">Sell Limit</button>
									</form>
								</div>
							</div>
						</div>
					  </div>
				</div>
		</div>
	</section>
	
	<footer class="footer_three">
		<div class="footer-top bg-dark3 pt-50">
            <div class="container">
                <div class="row">
					<div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">About</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<p class="text-capitalize mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis exercitation ullamco laboris<br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                        </div>
                    </div>											
					<div class="col-lg-3 col-12">
						<div class="widget">
							<h4 class="footer-title">Contact Info</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<ul class="list list-unstyled mb-30">
								<li> <i class="fa fa-map-marker"></i> 123, Lorem Ipsum, Dummy City,<br>FL-12345 USA</li>
								<li> <i class="fa fa-phone"></i> <span>+(1) 123-878-1649 </span><br><span>+(1) 123-878-1649 </span></li>
								<li> <i class="fa fa-envelope"></i> <span>hello@multipurposethemes.com </span><br><span>support@multipurposethemes.com </span></li>
							</ul>
						</div>
					</div>					
					<div class="col-12 col-lg-3">
                        <div class="widget footer_widget clearfix">
                            <h4 class="footer-title">Our Gallery</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
                            <ul class="list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">Instant Buy & Sell</a></li>
								<li><a href="#">Trade</a></li>
								<li><a href="#">Pages</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">Accept Card Payments</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<ul class="payment-icon list-unstyled d-flex gap-items-1">
								<li class="ps-0">
									<a href="javascript:;"><i class="fa fa-cc-amex" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
								</li>
							</ul>
                            <h4 class="footer-title mt-20">Newsletter</h4>
							<hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto w-60">
                            <div class="mb-20">
								<form class="" action="#" method="post">
									<div class="input-group">
										<input name="email" required="required" class="form-control" placeholder="Your Email Address" type="email">
										<button name="submit" value="Submit" type="submit" class="btn btn-primary"> <i class="fa fa-envelope"></i> </button>
									</div>
								</form>
							</div>
                        </div>
                    </div>
                </div>				
            </div>
        </div>		
		<div class="footer-bottom bg-dark3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12 text-md-start text-center"> © 2021 <span class="text-white"> Multipurpose Themes</span>  All Rights Reserved.</div>
					<div class="col-md-6 mt-md-0 mt-20">
						<div class="social-icons">
							<ul class="list-unstyled d-flex gap-items-1 justify-content-md-end justify-content-center">
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-youtube"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
	</footer>
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="js/nav.js"></script>
	<script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	<script src="../assets/vendor_components/select2/dist/js/select2.full.js"></script>
	<script>
		if ($('.coins-exchange').length) {
		   $('.coins-exchange').select2();
		}
		if ($('.money-exchange').length) {
		   $('.money-exchange').select2();
		}
	</script>
	
	
	<!-- CryptoCurrency front end -->
	<script src="js/template.js"></script>
	
</body>

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/front-end/buy_sell.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 11:21:54 GMT -->
</html>
