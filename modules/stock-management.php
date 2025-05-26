<?php include 'includes_2/header.php'; ?>

<?php include 'includes_2/sidebar.php'; ?>

<?php include 'modal.php' ?>


<!-- Module Header -->

<div style="margin-top: 2.5em;" class="page-wrapper">
	<div class="content">
		<?php include 'includes_2/nav_menu.php'; ?>

		<!-- Chat Content-->
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Stock Management</h4>
									</div>
									<div class="card-body">
										<div id="chart_pie"></div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Maintenance</h4>
									</div>
									<div class="card-body">
										<div id="chart_line"></div>
									</div>
								</div>
							</div>
							
							
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">List of Music Instruments in Stock</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table stock-list">
												<thead>
													<tr>
														<th scope="col">Name</th>
														<th scope="col">Type</th>
														<th scope="col">Quantity</th>
														<th scope="col">Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Piano</td>
														<td>Piano</td>
														<td>10</td>
														<td>1000</td>
													</tr>
													<tr>
														<td>Guitar</td>
														<td>Guitar</td>
														<td>20</td>
														<td>500</td>
													</tr>
													<tr>
														<td>Drums</td>
														<td>Drums</td>
														<td>30</td>
														<td>1500</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Chat Content-->
		
	</div>
</div>

<?php include 'includes_2/footer.php'; ?>
