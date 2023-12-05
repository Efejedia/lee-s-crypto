
<header class="top-bar">
		<div class="topbar">
		  <div class="container">
			<div class="row justify-content-end">
			  <div class="col-lg-6 col-12 d-lg-block d-none">
				<div class="topbar-social text-center text-md-start topbar-left">
				  <ul class="list-inline d-md-flex d-inline-block">
			<li class="ms-10 pe-10"><a href="#"><i class="text-white fa fa-question-circle"></i> Ask a Question</a></li>
					<li class="ms-10 pe-10"><a href="#"><i class="text-white fa fa-envelope"></i> hello@multipurposethemes.com</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="col-lg-6 col-12 xs-mb-10">
				<div class="topbar-call text-center text-lg-end topbar-right">
				  <ul class="list-inline d-lg-flex justify-content-end">				  
					 <li class="me-10 ps-10 lng-drop">
					  	<select class="header-lang-bx selectpicker">
							<option>USD</option>
							<option>EUR</option>
							<option>GBP</option>
							<option>INR</option>
						</select>
					 </li>
					 <li class="me-10 ps-10 lng-drop">
					  	<select class="header-lang-bx selectpicker">
							<option data-icon="flag-icon flag-icon-us">Eng USA</option>
							<option data-icon="flag-icon flag-icon-gb">Eng UK</option>
						</select>
					 </li>
					 <li class="me-10 ps-10"><a href="#"><i class="text-white fa fa-sign-in d-md-inline-block d-none"></i> Login</a></li>
					 <li class="me-10 ps-10"><a href="#"><i class="text-white fa fa-dashboard d-md-inline-block d-none"></i> My Account</a></li>
				  </ul>
				</div>
			  </div>
			 </div>
		  </div>
		</div>

		<nav hidden class="nav-white nav-transparent">
			<div class="nav-header">
				<a href="index" class="brand">
					<span style="font-size: 25px;font-weight:900"><i class="fa-brands fa-bitcoin" style="color: #ad9a25;"></i> Crypto</span>
				</a>
				<button class="toggle-bar">
					<span class="ti-menu"></span>
				</button>	
			</div>

			<ul class="menu">				
				<li class="dropdo">
					<a href="index">Home</a>
					
				</li>
				<?php  if (isset($_SESSION['unique_id'])) { ?>				
				<li>
					<a href="dashboard">Dashboard</a>
				</li>				
				<li>
					<a href="buy_sell">Instant Buy & Sell</a>
				</li>				
				<li class="dropdown">
					<a href="#">Trade</a>
					<ul class="dropdown-menu">
						<li><a href="currency_converter">Currency Converter</a></li>
						<li><a href="live_coin">Live Coin Chart</a></li>
					</ul>
				</li>
				<li class="megamenu">
					<a href="#">Pages</a>
					
				</li>	
				<?php  } ?>			
				<li class="dropdow">
					<a href="./blog_grid_right_sidebar.php">Blog</a>
					
				</li>	
				<li>
					<a href="contact_us">Contact</a>
				</li>
				<?php  if (!isset($_SESSION['unique_id'])) { ?>
				<li>
				<a href="login" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Sigin</div></a>
				</li>
			</ul>
			<ul class="attributes">
				<li class="d-md-block d-none"><a href="register" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Register Now</div></a></li>
				<li><a href="#" class="toggle-search-fullscreen"><span class="ti-search"></span></a></li>				
			</ul>
			<?php } ?>

			<?php  if (isset($_SESSION['unique_id'])) { ?>	
			<li>
				<a href="logout" class="px-10 pt-15 pb-10"><div class="btn btn-primary py-5">Logout</div></a>
				</li>

				<?php  } ?>
			<div class="wrap-search-fullscreen">
				<div class="container">
					<button class="close-search"><span class="ti-close"></span></button>
					<input type="text" placeholder="Search..." />
				</div>
			</div>
		</nav>
	</header>