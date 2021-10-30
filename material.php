<?php include('header.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
						<div class="col-lg-12 mb-3">
							<section class="card">
								<div class="card-body">
									<div class="row">
										<div class="col">
											<div class="tabs tabs-dark">
												<ul class="nav nav-tabs">
													<li class="nav-item active">
														<a class="nav-link" href="#material" data-toggle="tab"><i class="fas fa-star"></i> Material</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#subcat" data-toggle="tab">Sub Category</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#cat" data-toggle="tab">Category</a>
													</li>
												</ul>
												<div class="tab-content">
													<div id="material" class="tab-pane active">
														<div class="row">
															<div class="col-sm-4">
																Add New Material
															</div>
															<div class="col-sm-8">
																<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
																	<thead>
																		<tr>
																			<th>Rendering engine</th>
																			<th>Browser</th>
																			<th>Platform(s)</th>
																			<th class="d-lg-none">Engine version</th>
																			<th class="d-lg-none">CSS grade</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>Trident</td>
																			<td>Internet
																				Explorer 4.0
																			</td>
																			<td>Win 95+</td>
																			<td class="center d-lg-none">4</td>
																			<td class="center d-lg-none">X</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													<div id="subcat" class="tab-pane">
														<div class="row">
															<div class="col-sm-4">
																Add New Sub Category
															</div>
															<div class="col-sm-8">
																<table class="table table-bordered table-striped mb-0" id="datatable-default2">
																	<thead>
																		<tr>
																			<th>Rendering engine</th>
																			<th>Browser</th>
																			<th>Platform(s)</th>
																			<th class="d-lg-none">Engine version</th>
																			<th class="d-lg-none">CSS grade</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>Trident</td>
																			<td>Internet
																				Explorer 4.0
																			</td>
																			<td>Win 95+</td>
																			<td class="center d-lg-none">4</td>
																			<td class="center d-lg-none">X</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													<div id="cat" class="tab-pane">
														<div class="row">
															<div class="col-sm-12">
																	<span style="font-size:18px; color:blue"><strong>Category</strong></span>	
																	<span class="pull-right"><a id="add" style="cursor:pointer;" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
																	<div style="height:15px;"></div>
																	<div id="table"></div>
																	<div id="alert" class="alert alert-success" style="display:none;">
																		<center><span id="alerttext"></span></center>
																	</div>
																<?php include('modal.php'); ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

			<?php include('partial/sidebar_right.php'); ?>

		</section>

		<!-- Vendor -->
		<?php include('footer.php'); ?>
<script src="custom.js"></script>