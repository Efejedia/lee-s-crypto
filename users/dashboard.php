<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>

<body class="theme-warning bg-dark-body">

	<?php include 'header.php' ?>

	<section class="pt-130 pb-50 bg-dark-body">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel owl-theme owl-btn-1 banner-slide" data-nav-arrow="false" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
						<div class="item">
							<div class="row align-items-center">
								<div class="col-lg-6 col-12">
									<div class="mt-80">
										<h1 class="box-title text-white mb-20">250+ of the world’s most popular cryptocurrency markets</h1>
										<h4 class="text-white-80 fw-300 mb-30">Your access to the top coin markets. Capitalize on trends and trade with confidence through our expansive marketplace listings.</h4>
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="text-center">
										<img src="../images/front-end-img/banners/graphic_carousel_generic.png" class="img-fluid" alt="" />
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row align-items-center">
								<div class="col-lg-6 col-12">
									<div class="mt-80">
										<h1 class="box-title text-white mb-20">The more the merrier. Invite your friends and earn crypto.</h1>
									</div>
									<div>
										<a href="#" class="btn btn-primary">Get started</a>
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="text-center">
										<img src="../images/front-end-img/banners/graphic_carousel_referrals.png" class="img-fluid" alt="" />
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row align-items-center">
								<div class="col-lg-6 col-12">
									<div class="mt-80">
										<h1 class="box-title text-white mb-20">Want Bitcoin? You got it.</h1>
										<h4 class="text-white-80 fw-300 mb-30">Instantly buy or sell Bitcoin with the click of a button.</h4>
									</div>
									<div>
										<a href="#" class="btn btn-primary">Buy Now</a>
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="text-center">
										<img src="../images/front-end-img/banners/graphic_carousel_instant.png" class="img-fluid" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container m-auto">
			<div class="row">
				<div class="col-12 col-md-6 col-xl-3 col-lg-4">
					<div class="box bg-dark box-body pull-up text-center" style="height: 10rem;">
						<!-- TradingView Widget BEGIN -->
						<div class="tradingview-widget-container">
							<div class="tradingview-widget-container__widget"></div>
							<?php
							$total_amount = 0 . '.' . 0 . '' . 0;
							$sql = mysqli_query($conn, "SELECT * FROM duser WHERE unique_id = '$id'");
							if (mysqli_num_rows($sql) > 0) {
								$row = mysqli_fetch_assoc($sql);
								// $total =	$total_amount += $row['amount'];


							?>

								<div class="tradingview-widget-copyright py-5 px-5" style="margin-top: 2.5rem; "> <i class="fa-solid fa-wallet"></i> Balance Inquiring: <span class="pl-4"><?php
																																															if (!empty($row['wallet_bln'])) { ?>
											<?php echo formatNaira($row['wallet_bln']); ?>

										<?php } ?>
									</span>

								<?php 	} else { ?>
									Balance Inquiring: <?php echo clean(formatNaira($row['wallet_bln'])); ?>
								<?php  } ?>
								</div>
								<!-- TradingView Widget END -->
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-xl-3 col-lg-4">
					<a href="withdrawn">
					<div class="box bg-dark box-body pull-up text-center" style="height: 10rem;">
						<!-- TradingView Widget BEGIN -->
						<div class="tradingview-widget-container py-5 px-5" style="margin-top: 2.5rem;">
							<div class="tradingview-widget-container__widget"></div>
							<div class="tradingview-widget-copyright">

								<i class="fa-solid fa-money-bill-transfer"></i>

								<span> Withdrawn</span>

							</div>
							<!-- TradingView Widget END -->
						</div>
					</div>
					</a>
				</div>

				<div class="col-12 col-md-6 col-xl-3 col-lg-4 px-5 py-5">
					<a href="deposite">
						<div class="box bg-dark box-body pull-up text-center" style="height: 10rem;">
							<!-- TradingView Widget BEGIN -->
							<div class="tradingview-widget-container py-5 px-5" style="margin-top: 2.5rem;">
								<div class="tradingview-widget-container__widget"></div>
								<div class="tradingview-widget-copyright">
									<i class="fa-solid fa-plus"></i> <span>Deposit</span>
								</div>
								<!-- TradingView Widget END -->
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="py-50 bg-dark-body m-auto" data-aos="fade-up">

		<div class="box bg-transparent no-shadow">
			<div class="box-body">
				<div style="height:560px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;">
					<div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&amp;theme=light&amp;coin_id=859&amp;pref_coin_id=1505" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
					<div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io/" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px"></div>
				</div>
			</div>
		</div>

	</section>

	<div></div>
	<div></div>
	<div></div>

	<section class="py-50 bg-dark3" data-aos="fade-up" style="margin: auto; text-align:center;">
		<div class="container">

			<div class="row justify-content-center ">
				<div class="col-lg-5 col-12">
					<h1 class="mb-15 text-white text-center">Our mission is new technology <span class="text-success">trading with Crypto</span></h1>
					<h1 class="mb-15 text-white text-center">Our Plans </h1>
				</div>
			</div>
			<div class="row mb-15 text-white text-center">
				<?php
				$get_plan = mysqli_query($conn, "SELECT * FROM dplans");
				if (mysqli_num_rows($get_plan) > 0) {
					while ($fetch = mysqli_fetch_assoc($get_plan)) {
						$plans_id = $fetch['unique_id'];

				?>
						<?php
						$plans = mysqli_query($conn, "SELECT * FROM dplans WHERE unique_id = '$plans_id'");
						if (mysqli_num_rows($plans) > 0) {
							while ($fetchs = mysqli_fetch_assoc($plans)) {


						?>
								<div class="col-xl-3 col-md-6 col-12 ">
									<a href="invest?plan_id=<?php echo $plans_id; ?>" class="box bg-transparent">
										<div class="box-body px-0">
											<span class="text-primary fs-24"><i class="fa fa-money"></i></span>
											<div class="fw-600 fs-18 mb-2 mt-5 text-white"><?php echo $fetchs['title']; ?></div>
											<div class="text-white-50 fs-16">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
										</div>
									</a>
								</div>

				<?php
							}
						}
					}
				}

				?>


			</div>
		</div>
	</section>



	<?php include 'js.php' ?>

</body>

</html>