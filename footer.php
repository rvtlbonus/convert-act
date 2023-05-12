			<?php if (!is_home() && !is_page_template('template-fullwidth.php') && !is_page_template('template-homepage.php')) : ?>
				<div class="clearfix"></div>
				</div><!-- end of #inner-page-wrapper .inner -->
				</div><!-- end of #inner-page-wrapper -->
			<?php endif ?>
			</main>

			<footer class="footer bg-white" style="height:420px;">
				<div class=" container-fluid d-flex align-items-center justify-content-center" style="height:50px;">
				</div>
				<div>
					<nav class="navbar navbar-expand" style="height:100px;">
						<div class=" container-fluid d-flex align-items-center justify-content-center" style="height:100px; text-align:center;">
							<ul class=" nav navbar-nav">
								<li class="nav-item" style="font-size: 20px; width:100px;">
									<a class="nav-link text-dark" href="#">Home</a>
								</li>
								<li class="nav-item" style="font-size: 20px; width:100px;">
									<a class="nav-link text-dark" href="#">About</a>
								</li>
								<li class="nav-item" style="font-size: 20px; width:120px;">
									<a class="nav-link text-dark" href="#">Contact Us</a>
								</li>
							</ul>
						</div>
					</nav>
					<nav class="navbar navbar-expand">
						<div class="container-fluid d-flex align-items-center justify-content-center" style="height:40px; text-align:center;">
							<ul class=" nav navbar-nav">
								<li class="nav-item" style="width:80px;">
									<button class="btn btn-light align-items-center" style=" height: 40px; width: 40px; border-radius: 50%!important; background:#F0F0F0">
										<img src=" wp-includes/images/image.png" class="img-fluid">
									</button>
								</li>
								<li class="nav-item" style="width:80px;">
									<button class="btn btn-light align-items-center" style=" height: 40px; width: 40px; border-radius: 50%!important; background:#F0F0F0">
										<img src=" wp-includes/images/image_2.png" class="img-fluid">
									</button>
								</li>
								<li class="nav-item" style="width:80px;">
									<button class="btn btn-light align-items-center" style=" height: 40px; width: 40px; border-radius: 50%!important; background:#F0F0F0">
										<img src=" wp-includes/images/image_3.png" class="img-fluid">
									</button>
								</li>
								<li class="nav-item" style="width:80px;">
									<button class="btn btn-light align-items-center" style=" height: 40px; width: 40px; border-radius: 50%!important; background:#F0F0F0">
										<img src=" wp-includes/images/image_4.png" class="img-fluid">
									</button>
								</li>
							</ul>
					</nav>
					<div class=" container-fluid d-flex align-items-center justify-content-center" style="height:60px;">
						<hr class="solid" style="width:100%; height: 2px;  background-color:gray;">
					</div>
					<div class="container-fluid d-flex align-items-center justify-content-center" style="height:100px;">

						<h2 class=" display-6" style=" font-size: 12px;"> Wordpress Custom Theme </h2>
					</div>
			</footer>

			<?php do_action('aios_neighborhoods_footer') ?>
			<?php do_action('aios_landing_page_footer') ?>

			</div><!-- end of #main-wrapper -->


			<?php wp_footer(); ?>
			</body>

			</html>