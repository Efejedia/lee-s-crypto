
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';  ?>
<body class="theme-warning bg-dark-body">
    
<?php include 'header.php'; ?>

<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Deposite Into wallet</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item text-white active" aria-current="page">Deposite Into wallet</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>


<section class="py-50" style="margin-top: 100px;">
		<div class="container">
			
				<div class="col-lg-12 col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Payment Method</h4>
						</div>
						<div class="box-body">
							<ul class="nav nav-tabs" role="tablist"> <?php 
                                                $sql = mysqli_query($conn, "SELECT * FROM wallet");
                                                if (mysqli_num_rows($sql) > 0) {
                                                    while ($fetch_plan = mysqli_fetch_assoc($sql)) {
                                                      $plan = $fetch_plan['crypto_name']
                                                 
                                            ?>
								<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab<?php echo $fetch_plan['crypto_name'] ?>" href="deposite?state=button&plan=<?php echo $plan; ?>" role="tab"><?php echo $fetch_plan['crypto_name'] ?></a> </li>
								
                                
                               <?php  }} ?>
								
							</ul>
							<div class="tab-content p-10 tabcontent-border">
								<div class="tab-pane active" id="market" role="tabpanel">
									<form class="dash-form" action="deposite_logic" method="post">
										<div class="form-group">
										  <select class="form-select" name="crypto_name">
                                           
                                            <?php 
                                        	 $state = $_GET['state'];
                                           $plan = $_GET['plan'];

                                           if (!empty($state == 'button' )) {
                                            $sqli = mysqli_query($conn, "SELECT * FROM wallet where crypto_name = '$plan'");
                                            if (mysqli_num_rows($sql) > 0) {
                                                while ($plan = mysqli_fetch_assoc($sqli)) {
                                                   
                                             
                                        ?>
                                          
                                           
                                             
                                          <option value="<?php echo $plan['crypto_name']; ?>" ><?php echo $plan['crypto_name'] ?></option>
                                        
										  </select>
										</div>
										
										<div class="input-group mb-10">
											<span class="input-group-addon">Wallet Address</span>
											<input type="text" class="form-control" placeholder="Bitcoin per 1" value="<?php echo $plan['wallet_address'];  ?>" name="wallet_address">
										</div>
										<div class="input-group mb-10">
											<span class="input-group-addon" >Amount</span>
											<input type="text" class="form-control" placeholder="Amount" name="amount" required>
										</div>

										<!-- <div class="input-group mb-50">
											<span class="input-group-addon">Total</span>
											<input type="text" class="form-control" placeholder="Bitcoin">
										</div> -->


										<!-- <div class="d-flex justify-content-between">
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
										</div> -->

										<?php     }
                                                } } ?>
												<?php 
												
												$user = mysqli_query($conn, "SELECT * FROM duser where unique_id = '$id' ");
												if (mysqli_num_rows($user) > 0) {
													while ($duser = mysqli_fetch_assoc($user)) {
														
														
												
												  ?>
												<div class="form-group">
													<input type="hidden" name="full_name" value="<?php echo $duser['full_name']; ?>">
													<input type="hidden" value="<?php echo $duser['unique_id']; ?>" name="unique_id"> 
												</div>
												<?php 	}
												} ?>
										<button type="submit" class="btn btn-block btn-success mt-20" name="submit">Deposite</button>
									</form>
								</div>
								
								
							</div>
						</div>
					  </div>
				</div>
            </div>
        
</section>
            



<?php  include './js.php' ?>
<?php  include './footer.php' ?>
</body>
</html>