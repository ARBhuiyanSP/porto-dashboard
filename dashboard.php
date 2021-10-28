<?php include('header.php'); ?>
		<section class="body">

			<!-- start: header -->
			<?php include('header_content.php'); ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include('sidebar.php'); ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<?php include('partial/title_header.php'); ?>

					<!-- start: page -->
					<div class="row">
						<div class="col-lg-6 mb-3">
							<?php include('partial/sales_graph.php'); ?>
						</div>
						<div class="col-lg-6">
							<?php include('partial/home_stats.php'); ?>
						</div>
					</div>
					
					<div class="row pt-4">
						<div class="col-lg-12 mb-4 mb-lg-0">
							<?php include('partial/bestseller_graph.php'); ?>
						</div>
					</div>
					
					<div class="row pt-4 mt-1">
						<div class="col-xl-12">
							<?php include('partial/project_stats.php'); ?>
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

			<?php include('partial/sidebar_right.php'); ?>

		</section>

		<!-- Vendor -->
		<?php include('footer.php'); ?>