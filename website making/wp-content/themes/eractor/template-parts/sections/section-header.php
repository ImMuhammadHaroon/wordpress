	<?php  	
		$hide_show_social_icon 		= get_theme_mod( 'hide_show_social_icon','1'); 
		$hide_show_mbl_details 		= get_theme_mod( 'hide_show_mbl_details','1');
	?>
		<header id="header-section" class="header header-3 transparent">
		<!--===// Start: Mobile Toggle
	        =================================-->
		<div class="main-mobile-menu d-lg-none <?php echo esc_attr(renoval_sticky_menu()); ?>">
		        	<div class="container">
			        	<!-- Mobile Menu -->
						<div class="mobile-menu-container">
						  	<button class="mobile-menu-close"></button>
						  	<div id="mobile-menu-wrap"></div>
						</div>
						<div class="header">
							<!--// Main header -->
							<div class="main-header">
								<nav class="navbar navbar-expand-lg p-0 main-navigation">
									<div class="mobile-logo">
		                               <?php do_action('renoval_logo_content'); ?>
		                            </div>
									<button class="mobile-menu-trigger">
									  <span></span>
									  <span></span>
									  <span></span>
									</button>
									<div class="header-navigation-area justify-content-between">
										<?php do_action('renoval_primary_navigation');	?>
									</div>
								</nav>	
							</div>
					  	<!--// Main End -->
						</div>
					</div>
				</div>
		<!-- Mobile Menu End -->
		
		<!--===// Start: Header Above
            =========================-->		
			<?php  do_action('renoval_above_header'); ?>
		<!--===// End: Header Above
			=========================-->
				
		<!--===// Start: Middle Header
			=========================-->
		<div id="middle-header" class="middle-header-3">
			<div class="container">
				<div class="row align-items-center">
					<?php 
						
						if($hide_show_social_icon =='1'):
					?>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<?php do_action('renoval_abv_hdr_social'); ?>
						</div>
					<?php endif; ?>
					
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="middle-header-widget">
							<div class="logo">
								<?php do_action('renoval_logo_content'); ?>
							</div>
						</div>
					</div>
					
					<?php 
						$hide_show_mbl_details 		= get_theme_mod( 'hide_show_mbl_details','1'); 
						$tlh_mobile_icon 			= get_theme_mod( 'tlh_mobile_icon','fa-phone');
						$tlh_mobile_title 			= get_theme_mod( 'tlh_mobile_title','24x7 Call Supports');
						$tlh_mobile_number 			= get_theme_mod( 'tlh_mobile_number','+70 975 975 70'); 
						if($hide_show_mbl_details =='1' && !empty($tlh_mobile_title) && !empty($tlh_mobile_number)):
					?>					
						<div class="col-lg-4 col-md-6 col-sm-12">							
							<aside class="widget widget-contact">
								<div class="content-area">
									<?php if(!empty($tlh_mobile_icon)): ?>
										<div class="contact-icon">
											<i class="fa <?php echo esc_attr($tlh_mobile_icon); ?>"></i>
										</div>
									<?php endif; ?>
									<div class="contact-info">
										<p class="widget-title">
											<?php echo esc_attr($tlh_mobile_title); ?>
										</p>
										<a href="tel:<?php echo esc_attr(str_replace(' ','',$tlh_mobile_number)); ?>">
											<h5>
												<?php echo wp_kses_post($tlh_mobile_number); ?>
											</h5>
										</a>
									</div>
								</div>
							</aside>
							</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!--===// End: Middle Header
			=========================-->
		<!--===// Start: Navigation
			=========================-->
		<div class="nav-area d-none d-lg-block <?php echo esc_attr(renoval_sticky_menu()); ?>">
			<div class="container">
				<div class="row navigation-area nav-style-3">
					<div class="col-lg-8 col-md-8">
						<!--// Main header -->
						<div class="main-header">
							<nav class="navbar navbar-expand-lg p-0 main-navigation">
								<button class="mobile-menu-trigger">
								  <span></span>
								  <span></span>
								  <span></span>
								</button>
								<div class="header-navigation-area justify-content-between">
									<?php do_action('renoval_primary_navigation');	?>
								</div>
							</nav>	
						</div>
						<!--// Main End -->						
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="menu-right menu-right-3">
							<ul>
								<?php do_action('renoval_navigation_cart'); ?>
								
								<?php 
									$hide_show_search 	= get_theme_mod( 'hide_show_search','1'); 
									$hide_show_nav_btn 			= get_theme_mod( 'hide_show_nav_btn','1');
									$nav_btn_lbl 				= get_theme_mod( 'nav_btn_lbl','Get A Quote');
									$nav_btn_icon 				= get_theme_mod( 'nav_btn_icon','fa-User');
									$nav_btn_link 				= get_theme_mod( 'nav_btn_link','#');
									if($hide_show_search=='1'):	
								?>
									<li class="search-button">
										<div class="header-search-normal">
											<a href="javascript:void(0)" id="view-search-btn" class="header-search-toggle"><i class="fa fa-search "></i></a>
											<div class="view-search-btn header-search-popup">
												<form method="get" class="av-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( 'Site Search', 'eractor' ); ?>">
													<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'eractor' ); ?></span>
													<input type="search" class="av-form-control header-search-field" placeholder="<?php echo esc_attr__( 'Type To Search', 'eractor' ); ?>" name="s" id="popfocus" value="">
													<i class="fa fa-search"></i>
													<a href="javascript:void(0)" class="close-style header-search-close"></a>
												</form>
											</div>
										</div>
									</li>
								<?php endif; ?>
								
								<?php if($hide_show_nav_btn == '1' && !empty($nav_btn_lbl) && !empty($nav_btn_link)){ ?>
									<li>
										<div class="header-button-2">
											<a href="<?php echo esc_url($nav_btn_link); ?>" class="main-button-3">
												<p>	
													<?php if(!empty($nav_btn_icon)){ ?>
														<i class="fa <?php echo esc_attr($nav_btn_icon); ?>"></i> 
													<?php } ?>
													<?php echo esc_html($nav_btn_lbl); ?>
												</p>
											</a>
										</div>
									</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--===// End: Navigation
			=========================-->
	</header>
	<!-- End: Header
		========================-->

<?php
	if ( !is_page_template( 'templates/template-homepage.php' ) ) {
		renoval_breadcrumbs_style();  
	}	
?>