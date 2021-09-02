		<!-- Start Navbar Area -->
		

		<!-- End Navbar Area -->
<!-- Start Navbar Area -->
		<header id="header">
			<div class="crake-mobile-nav">
				<div class="logo">

					<a href="http://localhost/ca/">
					<img src="<?=base_url();?>assets/front-end/img/logo-ca.png" alt="">
					</a>
				</div>
				<nav class="navbar navbar-expand-md navbar-brand1">
						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav nav ml-auto">
								<li class="nav-item"><a href="<?=base_url();?>" class="nav-link active">Home</a>
								</li>
								<li class="nav-item"><a href="#" class="nav-link">Our Exams</a>
                                    <ul class="dropdown_menu">
										<li><a href="<?=base_url('CPT');?>">CPT</a></li>
										<li><a href="<?=base_url('IPCC');?>">IPCC(old)</a></li>
										<li><a href="<?=base_url('Final');?>">Final(old)</a></li>
										<li><a href="<?=base_url('CPT-NEW');?>">CPT New</a></li>
										<li><a href="<?=base_url('IPCC-NEW');?>">IPCC(old) New</a></li>
										<li><a href="<?=base_url('Final-NEW');?>">Final(old) New</a></li>
									</ul>
                                </li>
								<li class="nav-item"><a href="#" class="nav-link">MCQ's</a>
                                    <ul class="dropdown_menu">
                                    	<li><a href="<?=base_url('mcq-cpt');?>">CPT</a></li>
										<li><a href="<?=base_url('mcq-ipcc');?>">IPCC</a></li>
										<li><a href="<?=base_url('mcq-final');?>">Final</a></li>
									</ul>
                                </li>
								<li class="nav-item"><a href="#" class="nav-link">More</a>
                                    <ul class="dropdown_menu">
                                    	<li><a href="<?=base_url('home-blog');?>">Blog</a></li>
										<li><a href="<?=base_url('E-Brochures');?>">E-Brochures</a></li>
										<li><a href="<?=base_url('home-schedules');?>">Schedules</a></li>
										<li><a href="<?=base_url('home-shop');?>">Shop</a>
										</li>
									</ul>
                                </li>
                                <li class="nav-item"><a href="<?=base_url('contact-us');?>" class="nav-link">Contact Us</a>
                                </li>

                                <li class="nav-item"><a href="<?=base_url('login');?>" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item"><a href="<?=base_url('login');?>" class="nav-link">Register</a>
                                </li>
                                <div class="mr-auto others-option">
							<ul class="navbar-nav top-nav" style="display:inline!important;" >
								 <li class="nav-item cart-wrapper" style="width:69px">
									<a href="<?=base_url('cart');?>" class="nav-link">
										<i class="icofont-shopping-cart cart-icon"></i>
										<span class="cart_count_update">0</span>
									</a>
								</li> 
							</ul>
						</div>
							</ul>
						</div>
					</nav>
			</div>

			<div class="crake-nav">
				<div class="row-fluid">
				<div class="container-fluid">
					<!-- Top Navbar Start -->
				    <nav class="navbar navbar-expand-md navbar-light"  style="background: #fff">
						<a class="navbar-brand" href="<?=base_url();?>"><img src="<?=base_url();?>assets/front-end/img/logo-ca.png" alt="logo"></a>
						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav nav ml-auto  top-nav">
								 <li class="nav-item"><a href="#" class="nav-link">Contact us: +91 <?=$system_mobile;?></a></li>
                                <?php
                                if($login_user_details!=''){
                                ?>
                                <li class="nav-item"><a href="#" class="nav-link"><?=$login_user_details['first_name'];?></a>
                                    <ul class="dropdown_menu">
										<li><a href="<?=base_url('auth');?>" target="_blank">My Dashboard</a></li>
										<li><a href="<?=base_url('logout');?>">Logout</a></li>
									</ul>
                                </li>
                                <?php }else{?>
                                <li class="nav-item"><a href="<?=base_url('login');?>" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item"><a href="<?=base_url('register');?>" class="nav-link">Register</a>
                                </li>
                                <?php }?>
							</ul>
						</div>
						<div class="mr-auto others-option">
							<ul class="navbar-nav top-nav">
								 <li class="nav-item cart-wrapper">
									<a href="<?=base_url('cart');?>" class="nav-link">
										<i class="icofont-shopping-cart cart-icon"></i>
										<span class="cart_count_update">0</span>
									</a>
								</li> 
							</ul>
						</div>
					</nav> 
					<!-- Top Navbar End -->

					<!-- Bottom Navbar Start -->
					<nav class="navbar navbar-expand-md  mt-1 mb-1">
						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav nav ml-auto">
								<li class="nav-item"><a href="<?=base_url();?>" class="nav-link active">Home</a>
								</li>
								<li class="nav-item"><a href="#" class="nav-link">Our Exams</a>
                                    <ul class="dropdown_menu">
										<li><a href="<?=base_url('CPT');?>">CPT</a></li>
										<li><a href="<?=base_url('IPCC');?>">IPCC</a></li>
										<li><a href="<?=base_url('Final');?>">Final</a></li>
										<li><a href="<?=base_url('CPT-NEW');?>">CPT (New)</a></li>
										<li><a href="<?=base_url('IPCC-NEW');?>">IPCC (New)</a></li>
										<li><a href="<?=base_url('Final-NEW');?>">Final (New)</a></li>
									</ul>
                                </li>
								
			
                                <li><a href="<?=base_url('Pass-Guarantee');?>">Pass Guarantee</a></li>
                                <li><a href="<?=base_url('trail_exams');?>">Trail Exams</a></li>
								<li><a href="<?=base_url('E-Brochures');?>">E-Brochures</a>
									<ul class="dropdown_menu">
										     <?php
                    $e_brochers=$this->crud_model->select_results_info('e_brochers',array('row_status'=>1))->result_array();
                    foreach ($e_brochers as $eb) {
                    ?>
                    <li><a href="<?=base_url('E-Brochures?brochures=').$eb['course'];?>"><?=$eb['course'];?></a></li>
                <?php }?>
										<!-- <li><a href="<?=base_url('E-Brochures?brochures=CPT');?>">CPT</a></li>
										<li><a href="<?=base_url('E-Brochures?brochures=IPCC');?>">IPCC</a></li>
										<li><a href="<?=base_url('E-Brochures?brochures=Final');?>">Final</a></li>
										<li><a href="<?=base_url('E-Brochures?brochures=CPT(NEW)');?>">CPT (New)</a></li>
										<li><a href="<?=base_url('E-Brochures?brochures=IPCC(NEW)');?>">IPCC (New)</a></li>
										<li><a href="<?=base_url('E-Brochures?brochures=Final(NEW)');?>">Final (New)</a></li>
										<li><a href="<?=base_url('E-Brochures?brochures=Pass Guarantee Inter');?>">Pass Guarantee Inter</a></li>
										<li><a href="<?=base_url('E-Brochures?brochures=Pass Guarantee IPCC');?>">Pass Guarantee IPCC</a></li> -->
									</ul>
								</li>

								<li><a href="<?=base_url('home-schedules');?>">Schedule</a>
									<ul class="dropdown_menu">
										<li><a href="#">IPCC</a>
												<ul class="dropdown_menu">
												<li><a href="#">Superior</a></li>
												<li><a href="#">Premier</a></li>
												<li><a href="#">Diamond</a></li>
												<li><a href="#">Platinum</a></li>
												<li><a href="#">Gold</a></li>
												<li><a href="#">Silver</a></li>
												<li><a href="#">Rapid Revision</a></li>
												<li><a href="#">Mock Exams</a></li>
												</ul>
										</li>
										<li><a href="#">Final</a></li>
										<li><a href="#">IPCC(New)</a></li>
										<li><a href="#">Final(New)</a></li>

										<li><a href="#">Pass Guarantee Inter</a></li>
										<li><a href="#">Pass Guarantee IPCC</a></li>
									</ul>
								</li>
								<li><a href="<?=base_url('home-shop');?>">Shop</a></li>
								<li><a href="<?=base_url('home-blog');?>">Blog</a></li>



								<li class="nav-item"><a href="#" class="nav-link">Free MCQ's</a>
                                    <ul class="dropdown_menu">
                                    	<li><a href="<?=base_url('mcq-cpt');?>">CPT</a></li>
										<li><a href="<?=base_url('mcq-ipcc');?>">IPCC</a></li>
										<li><a href="<?=base_url('mcq-final');?>">Final</a></li>
									</ul>
                                </li>
								<!-- <li class="nav-item"><a href="#" class="nav-link">More</a>
                                    <ul class="dropdown_menu">
                                    	<li><a href="<?=base_url('home-blog');?>">Blog</a></li>
										<li><a href="<?=base_url('E-Brochures');?>">E-Brochures</a></li>
										<li><a href="<?=base_url('home-schedules');?>">Schedules</a></li>
										<li><a href="<?=base_url('home-shop');?>">Shop</a>
										</li>
									</ul>
                                </li> -->
                                <li class="nav-item"><a href="<?=base_url('contact-us');?>" class="nav-link">Contact Us</a>
                                </li>
                                <!-- <?php
                                if($login_user_details!=''){
                                ?>
                                <li class="nav-item"><a href="#" class="nav-link"><?=$login_user_details['first_name'];?></a>
                                    <ul class="dropdown_menu">
										<li><a href="<?=base_url('auth');?>" target="_blank">My Dashboard</a></li>
										<li><a href="<?=base_url('logout');?>">Logout</a></li>
									</ul>
                                </li> -->
                               <!--  <?php }else{?>
                                
                                <li class="nav-item"><a href="<?=base_url('login');?>" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item"><a href="<?=base_url('login');?>" class="nav-link">Register</a>
                                </li>
                                <?php }?> -->
							</ul>
						</div>
						<!-- <div class="mr-auto others-option">
							<ul class="navbar-nav">
								<li class="nav-item cart-wrapper">
									<a href="<?=base_url('cart');?>">
										<i class="icofont-shopping-cart cart-icon"></i>
										<span id="cart_count_update">0</span>
									</a>
								</li>
							</ul>
						</div> -->
					</nav>
					<!-- Bottom Navbar End -->
				</div> 
				</div>
			</div>
		</header>
		<!-- End Navbar Area -->
