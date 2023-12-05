





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
						<h2 class="page-title text-white">Withdrawn</h2>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="py-50">
		<div class="container">
			<div class="row">
			<?php echo isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ?>
				<div class="col-lg-12 col-12">
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title  text-center">Withdrawn</h4>
						</div>
						<div class="box-body">
							
							<div class="tab-content p-10 tabcontent-border">
                                <?php
                                $user = mysqli_query($conn, "SELECT * FROM duser WHERE unique_id = '$id'");
                                if (mysqli_num_rows($user) > 0) {
                                    $fetch = mysqli_fetch_assoc($user);
                               
                                ?>
								<div class="tab-pane active" id="market" role="tabpanel">
                                    
									<form class="dash-form" action="withdrawn_logic" method="post" enctype="multipart/form-data"> 
										
										<p>Balance: <span class="fw-600"> <?php echo clean(formatNaira($fetch['wallet_bln'] ))?> <i class="fa fa-bitcoin"></i></span></p>
										
										<div class="input-group mb-10">
											<span class="input-group-addon">Amount</span>
											<input type="number" class="form-control" name="amount" placeholder="0">
                                            <input type="hidden" name="wallet_bln" value="<?php echo $fetch['wallet_bln'];  ?>">
                                            <input type="hidden" name="email" value="<?php echo $fetch['email'];  ?>">
                                            <input type="hidden" name="full_name" value="<?php echo $fetch['full_name'];  ?>">
                                            <input type="hidden" name="id" value="<?php echo $id;  ?>">
                                            <input type="hidden" name="percent" value="<?php echo $fetch['percent'];  ?>">
										</div>
										</div>
										
										<button type="submit" class="btn btn-block btn-success mt-20" name="submit"> Withdrawn</button>
									</form>
								</div>
                                <?php
                                }
                                ?>
								
							</div>
						</div>
					  </div>
				</div>
			
		</div>
	</section>
	
	<?php include './footer.php'  ?>
	
	
	<!-- Vendor JS -->
<?php include 'js.php'  ?>	
</body>

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/front-end/buy_sell.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 11:21:54 GMT -->
</html>






