<?php include 'includes/header.php'; ?>

<?php include 'includes/sidebar.php'; ?>



<!-- Module Header -->

<div style="margin-top: 2.5em;" class="page-wrapper">
	<div class="content">
		<div class="row">
			<!-- Operations Dropdown -->
			<div class="col-xl-3 col-sm-6 col-12 d-flex mb-3">
				<div class="dropdown w-100">
					<button class="btn btn-secondary w-100 dropdown-toggle" type="button" id="dashboardDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-tachometer-alt mr-2"></i> My Workspace
					</button>
					<div class="dropdown-menu w-100" aria-labelledby="dashboardDropdown">
						<a class="dropdown-item" href="dashboard-main.php">
							<i class="fas fa-home mr-2"></i> Energy Radio
						</a>
						<a class="dropdown-item" href="operations-music.php">
							<i class="fas fa-music me-2"></i> Top 5 Music
						</a>
						<a class="dropdown-item" href="operations-images.php">
							<i class="fas fa-image me-2"></i> Top 5 Images
						</a>
						<a class="dropdown-item" href="operations-events.php">
							<i class="fas fa-star me-2"></i> 5-Star Events
						</a>
						<a class="dropdown-item" href="operations-tech.php">
							<i class="fas fa-microchip me-2"></i> Top 5 Tech
						</a>
					</div>
				</div>
			</div>

			<!-- Stock Management Dropdown -->
			<div class="col-xl-3 col-sm-6 col-12 d-flex mb-3">
				<div class="dropdown w-100">
					<button class="btn btn-success w-100 dropdown-toggle" type="button" id="stockDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-boxes mr-2"></i> Stock Management
					</button>
					<div class="dropdown-menu w-100" aria-labelledby="stockDropdown">
						<a class="dropdown-item" href="stock-inventory.php">
							<i class="fas fa-clipboard-list mr-2"></i> Inventory
						</a>
						<a class="dropdown-item" href="stock-orders.php">
							<i class="fas fa-truck mr-2"></i> Orders
						</a>
						<a class="dropdown-item" href="stock-suppliers.php">
							<i class="fas fa-address-book mr-2"></i> Suppliers
						</a>
					</div>
				</div>
			</div>

			<!-- Business Development Dropdown -->
			<div class="col-xl-3 col-sm-6 col-12 d-flex mb-3">
				<div class="dropdown w-100">
					<button class="btn btn-info w-100 dropdown-toggle" type="button" id="businessDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-chart-line mr-2"></i> Business Development
					</button>
					<div class="dropdown-menu w-100" aria-labelledby="businessDropdown">
						<a class="dropdown-item" href="business-sales.php">
							<i class="fas fa-handshake mr-2"></i> Sales
						</a>
						<a class="dropdown-item" href="business-marketing.php">
							<i class="fas fa-bullhorn mr-2"></i> Marketing
						</a>
						<a class="dropdown-item" href="business-clients.php">
							<i class="fas fa-users mr-2"></i> Clients
						</a>
					</div>
				</div>
			</div>

			<!-- Dashboard Dropdown -->
			<div class="col-xl-3 col-sm-6 col-12 d-flex mb-3">
				<div class="dropdown w-100">
					<button class="btn btn-secondary w-100 dropdown-toggle" type="button" id="dashboardDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-tachometer-alt mr-2"></i> My Dashboard
					</button>
					<div class="dropdown-menu w-100" aria-labelledby="dashboardDropdown">
						<a class="dropdown-item" href="dashboard-main.php">
							<i class="fas fa-home mr-2"></i> Overview
						</a>
						<a class="dropdown-item" href="dashboard-reports.php">
							<i class="fas fa-file-alt mr-2"></i> Reports
						</a>
						<a class="dropdown-item" href="dashboard-settings.php">
							<i class="fas fa-cog mr-2"></i> Settings
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Module button popup -->
		<div class="container mt-5">
			<div class="modal-header">
				<h4 class="modal-title">Task Module</h4>
			</div>
			<div class="container mt-3 d-flex flex-wrap justify-content-center gap-3">
				<div class="task-module d-flex flex-wrap justify-content-center gap-3">
					<button type="button" class="btn btn-primary btn-sm" style="background-color: #5a5a5a; color: #fff;" data-bs-toggle="modal" data-bs-target="#eventModal">
						<i class="fas fa-calendar-alt me-1"></i> Event Order
					</button>
					<button type="button" class="btn btn-primary btn-sm" style="background-color: #5a5a5a; color: #fff;" data-bs-toggle="modal" data-bs-target="#quoteModal">
						<i class="fas fa-file-alt me-1"></i> Quote Generator
					</button>
					<button type="button" class="btn btn-primary btn-sm" style="background-color: #5a5a5a; color: #fff;" data-bs-toggle="modal" data-bs-target="#invoiceModal">
						<i class="fas fa-file-invoice me-1"></i> Invoice Generator
					</button>
					<button type="button" class="btn btn-primary btn-sm" style="background-color: #5a5a5a; color: #fff;" data-bs-toggle="modal" data-bs-target="#transportModal">
						<i class="fas fa-truck me-1"></i> Transport Fleet Record
					</button>
					<button type="button" class="btn btn-primary btn-sm" style="background-color: #5a5a5a; color: #fff;" data-bs-toggle="modal" data-bs-target="#equipmentModal">
						<i class="fas fa-microchip me-1"></i> Equipment Records
					</button>
					<button type="button" class="btn btn-primary btn-sm" style="background-color: #5a5a5a; color: #fff;" data-bs-toggle="modal" data-bs-target="#financeModal">
						<i class="fas fa-file-invoice me-1"></i> Finance Record Expence, Income
					</button>
					<button type="button" class="btn btn-primary btn-sm" style="background-color: #5a5a5a; color: #fff;" data-bs-toggle="modal" data-bs-target="#personalModal">
						<i class="fas fa-user me-1"></i> Personal Report
					</button>
					<button type="button" class="btn btn-primary btn-sm" style="background-color: #5a5a5a; color: #fff;" data-bs-toggle="modal" data-bs-target="#recruitmentModal">
						<i class="fas fa-people-carry me-1"></i> Recruitment
					</button>
					<button type="button" class="btn btn-primary btn-sm" style="background-color: #5a5a5a; color: #fff;" data-bs-toggle="modal" data-bs-target="#employeeModal">
						<i class="fas fa-user-tie me-1"></i> Employee Management
					</button>
					<button type="button" class="btn btn-primary btn-sm" style="background-color: #5a5a5a; color: #fff;" data-bs-toggle="modal" data-bs-target="#leaveModal">
						<i class="fas fa-hospital me-1"></i> Leave Management
					</button>
					<button type="button" class="btn btn-primary btn-sm" style="background-color: #5a5a5a; color: #fff;" data-bs-toggle="modal" data-bs-target="#marketModal">
						<i class="fas fa-chart-pie me-1"></i> Market Analysis
					</button>
				</div>
			</div>
			<!-- Event Order Modal -->
			<div class="container">
				<div class="modal" id="eventModal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Event Order</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
							</div>
							<div class="modal-body">
								<div class="form">
									<form action="modules/event-order.php" method="post">
										<div class="form-group">
											<label for="eventType">Event Type</label>
											<select class="form-control" id="eventType">
												<option value="Concert">Concert</option>
												<option value="Wedding">Wedding</option>
												<option value="Conference">Conference</option>
												<option value="Radio Program">Radio Program</option>
												<option value="Studio Program">Studio Program</option>
												<option value="Service Fourniture">Service Fourniture</option>
											</select>
										</div>
										<div class="form-group">
											<label for="eventName">Event Name</label>
											<input type="text" class="form-control" id="eventName" aria-describedby="eventNameHelp" placeholder="Enter Event Name">
										</div>
										<div class="form-group">
											<label for="date">Date</label>
											<input type="date" class="form-control" id="date" placeholder="Enter Date">
										</div>
										<div class="form-group">
											<label for="location">Location</label>
											<input type="text" class="form-control" id="location" placeholder="Enter Location">
										</div>
										<div class="form-group">
											<label for="duration">Duration</label>
											<input type="number" class="form-control" id="duration" placeholder="Enter Duration">
										</div>
									</form>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Quotation Modal -->
			<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header bg-primary text-white">
							<h3 class="modal-title mb-0" id="quoteModalLabel">
								<i class="fas fa-file-invoice-dollar me-2"></i> Quotation Generator
							</h3>
							<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form>
								<!-- Client Information -->
								<h5 class="mb-3 text-primary"><i class="fas fa-user-circle me-2"></i>Client Information</h5>
								<div class="row g-3 mb-4">
									<div class="col-md-6">
										<label class="form-label">Company Name</label>
										<input type="text" class="form-control" required>
									</div>
									<div class="col-md-6">
										<label class="form-label">Contact Person</label>
										<input type="text" class="form-control" required>
									</div>
									<div class="col-md-6">
										<label class="form-label">Email</label>
										<input type="email" class="form-control" required>
									</div>
									<div class="col-md-6">
										<label class="form-label">Phone</label>
										<input type="tel" class="form-control" required>
									</div>
									<div class="col-12">
										<label class="form-label">Address</label>
										<textarea class="form-control" rows="2"></textarea>
									</div>
								</div>

								<!-- Quotation Items -->
								<h5 class="mb-3 text-primary"><i class="fas fa-list-alt me-2"></i>Items</h5>
								<div class="table-responsive mb-4">
									<table class="table table-bordered" id="itemsTable">
										<thead class="table-light">
											<tr>
												<th>Description</th>
												<th width="100">Quantity</th>
												<th width="150">Unit Price</th>
												<th width="150">Total</th>
												<th width="50"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="text" class="form-control" placeholder="Item description"></td>
												<td><input type="number" class="form-control qty" min="1" value="1"></td>
												<td><input type="number" class="form-control price" min="0" step="0.01"></td>
												<td><input type="text" class="form-control total" readonly></td>
												<td><button type="button" class="btn btn-danger btn-sm remove-row"><i class="fas fa-times"></i></button></td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="5">
													<button type="button" class="btn btn-success btn-sm" id="addRow">
														<i class="fas fa-plus me-1"></i> Add Item
													</button>
												</td>
											</tr>
										</tfoot>
									</table>
								</div>

								<!-- Additional Costs -->
								<h5 class="mb-3 text-primary"><i class="fas fa-calculator me-2"></i>Additional Costs</h5>
								<div class="row g-3 mb-4">
									<div class="col-md-3">
										<label class="form-label">Tax (%)</label>
										<input type="number" class="form-control" min="0" id="tax" value="0">
									</div>
									<div class="col-md-3">
										<label class="form-label">Discount (%)</label>
										<input type="number" class="form-control" min="0" id="discount" value="0">
									</div>
									<div class="col-md-3">
										<label class="form-label">Shipping</label>
										<input type="number" class="form-control" min="0" step="0.01" id="shipping" value="0">
									</div>
									<div class="col-md-3">
										<label class="form-label">Other Fees</label>
										<input type="number" class="form-control" min="0" step="0.01" id="otherFees" value="0">
									</div>
								</div>

								<!-- Payment & Validity -->
								<h5 class="mb-3 text-primary"><i class="fas fa-money-bill-wave me-2"></i>Payment & Validity</h5>
								<div class="row g-3 mb-4">
									<div class="col-md-4">
										<label class="form-label">Payment Terms (days)</label>
										<input type="number" class="form-control" min="0" value="30">
									</div>
									<div class="col-md-4">
										<label class="form-label">Deposit Required (%)</label>
										<input type="number" class="form-control" min="0" max="100" value="0">
									</div>
									<div class="col-md-4">
										<label class="form-label">Quotation Valid Until</label>
										<input type="date" class="form-control">
									</div>
									<div class="col-12">
										<label class="form-label">Payment Methods</label>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="bankTransfer" checked>
											<label class="form-check-label" for="bankTransfer">Bank Transfer</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="creditCard">
											<label class="form-check-label" for="creditCard">Credit Card</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="cash">
											<label class="form-check-label" for="cash">Cash</label>
										</div>
									</div>
								</div>

								<!-- Notes -->
								<div class="mb-4">
									<label class="form-label">Notes/Comments</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>

								<!-- Totals -->
								<div class="row mb-4">
									<div class="col-md-6 offset-md-6">
										<table class="table table-bordered">
											<tr>
												<th>Subtotal</th>
												<td id="subtotal">$0.00</td>
											</tr>
											<tr>
												<th>Tax</th>
												<td id="taxAmount">$0.00</td>
											</tr>
											<tr>
												<th>Discount</th>
												<td id="discountAmount">$0.00</td>
											</tr>
											<tr>
												<th>Shipping & Fees</th>
												<td id="feesAmount">$0.00</td>
											</tr>
											<tr class="table-active">
												<th>Total Amount</th>
												<td id="grandTotal">$0.00</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="reset" class="btn btn-secondary">
										<i class="fas fa-redo me-1"></i> Reset
									</button>
									<button type="button" class="btn btn-info me-2">
										<i class="fas fa-file-pdf me-1"></i> Save as PDF
									</button>
									<button type="submit" class="btn btn-primary">
										<i class="fas fa-paper-plane me-1"></i> Generate Quotation
									</button>
									<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
								</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Module Header -->

			<!-- Table -->
			<div class="container mt-5">
				<div class="row">
					<div class="col">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Small Tables
								</div>

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-nowrap table-sm">
										<thead>
											<tr>
												<th scope="col">Invoice</th>
												<th scope="col">Created Date</th>
												<th scope="col">Status</th>
												<th scope="col">Action</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="checkebox-sm" checked="">
														<label class="form-check-label" for="checkebox-sm">
															Zelensky
														</label>
													</div>
												</th>
												<td>25-Apr-2021</td>
												<td><span class="badge bg-soft-success">Paid</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="checkebox-sm1">
														<label class="form-check-label" for="checkebox-sm1">
															Kim Jong
														</label>
													</div>
												</th>
												<td>29-April-2022</td>
												<td><span class="badge bg-soft-danger">Pending</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="checkebox-sm2">
														<label class="form-check-label" for="checkebox-sm2">
															Obana
														</label>
													</div>
												</th>
												<td>30-Nov-2022</td>
												<td><span class="badge bg-soft-success">Paid</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="checkebox-sm3">
														<label class="form-check-label" for="checkebox-sm3">
															Sean Paul
														</label>
													</div>
												</th>
												<td>01-Jan-2022</td>
												<td><span class="badge bg-soft-success">Paid</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="checkebox-sm4">
														<label class="form-check-label" for="checkebox-sm4">
															Karizma
														</label>
													</div>
												</th>
												<td>14-Feb-2022</td>
												<td><span class="badge bg-soft-danger">Pending</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
					<div class="col">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Small Tables
								</div>

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-nowrap table-sm">
										<thead>
											<tr>
												<th scope="col">Invoice</th>
												<th scope="col">Created Date</th>
												<th scope="col">Status</th>
												<th scope="col">Action</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="checkebox-sm" checked="">
														<label class="form-check-label" for="checkebox-sm">
															Zelensky
														</label>
													</div>
												</th>
												<td>25-Apr-2021</td>
												<td><span class="badge bg-soft-success">Paid</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="checkebox-sm1">
														<label class="form-check-label" for="checkebox-sm1">
															Kim Jong
														</label>
													</div>
												</th>
												<td>29-April-2022</td>
												<td><span class="badge bg-soft-danger">Pending</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="checkebox-sm2">
														<label class="form-check-label" for="checkebox-sm2">
															Obana
														</label>
													</div>
												</th>
												<td>30-Nov-2022</td>
												<td><span class="badge bg-soft-success">Paid</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="checkebox-sm3">
														<label class="form-check-label" for="checkebox-sm3">
															Sean Paul
														</label>
											</tr>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="checkebox-sm4">
														<label class="form-check-label" for="checkebox-sm4">
															Karizma
														</label>
													</div>
												</th>
												<td>14-Feb-2022</td>
												<td><span class="badge bg-soft-danger">Pending</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									<select class="form-select w-25" id="module-select">
										<option value="">Select Module</option>
										<option value="eventModal">Event Order</option>
										<option value="quoteModal">Quote Generator</option>
										<option value="transportModal">Transport Fleet Record</option>
										<option value="equipmentModal">Equipment Records</option>
										<option value="financeModal">Finance Record Expence, Income</option>
										<option value="personalModal">Personal Report</option>
										<option value="recruitmentModal">Recruitment</option>
										<option value="employeeModal">Employee Management</option>
										<option value="leaveModal">Leave Management</option>
										<option value="marketModal">Market Analysis</option>
									</select>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>

												<th scope="col">Team Head</th>
												<th scope="col">Category</th>
												<th scope="col">Role</th>
												<th scope="col">Gmail</th>
												<th scope="col">Team</th>
												<th scope="col">Work Progress</th>
												<th scope="col">Revenue</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>

												<td>
													<div class="d-flex align-items-center">
														<span class="avatar avatar-xs me-2 online avatar-rounded">
															<img src="assets/img/avatar/avatar-3.jpg" alt="img">
														</span>Mayor Kelly
													</div>
												</td>
												<td>Manufacturer</td>
												<td><span class="badge bg-soft-primary">Team Lead</span></td>
												<td>mayorkrlly@gmail.com</td>
												<td>
													<div class="avatar-list-stacked">
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-2.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-8.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-2.jpg" alt="img">
														</span>
														<a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);">
															+4
														</a>
													</div>
												</td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar bg-primary" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</td>
												<td>$10,984.29</td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="d-flex align-items-center">
														<span class="avatar avatar-xs me-2 online avatar-rounded">
															<img src="assets/img/avatar/avatar-12.jpg" alt="img">
														</span>Andrew Garfield
													</div>
												</td>
												<td>Managing Director</td>
												<td><span class="badge bg-soft-warning">Director</span></td>
												<td>andrewgarfield@gmail.com</td>
												<td>
													<div class="avatar-list-stacked">
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-1.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-5.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-11.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-15.jpg" alt="img">
														</span>
														<a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);">
															+4
														</a>
													</div>
												</td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar bg-primary" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</td>
												<td>$1.4billion</td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="d-flex align-items-center">
														<span class="avatar avatar-xs me-2 online avatar-rounded">
															<img src="assets/img/avatar/avatar-14.jpg" alt="img">
														</span>Simon Cowel
													</div>
												</td>
												<td>Service Manager</td>
												<td><span class="badge bg-soft-success">Manager</span></td>
												<td>simoncowel234@gmail.com</td>
												<td>
													<div class="avatar-list-stacked">
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-6.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-16.jpg" alt="img">
														</span>
														<a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);">
															+10
														</a>
													</div>
												</td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</td>
												<td>$7,123.21</td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="d-flex align-items-center">
														<span class="avatar avatar-xs me-2 online avatar-rounded">
															<img src="assets/img/avatar/avatar-5.jpg" alt="img">
														</span>Mirinda Hers
													</div>
												</td>
												<td>Recruiter</td>
												<td><span class="badge bg-soft-danger">Employee</span></td>
												<td>mirindahers@gmail.com</td>
												<td>
													<div class="avatar-list-stacked">
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-3.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-10.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-14.jpg" alt="img">
														</span>
														<a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);">
															+6
														</a>
													</div>
												</td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar bg-primary" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</td>
												<td>$2,325.45</td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"><i class="feather-download"></i></a>
														<a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"><i class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Table -->



			<!-- Customizer -->
			
		</div>
		<!-- Transport Fleet Record Modal -->
		<div class="modal fade" id="transportModal" tabindex="-1" aria-labelledby="transportModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="transportModalLabel">Transport Fleet Record</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<!-- Transport Fleet Record Form -->
						<form class="form-body row g-3">
							<div class="col-md-6">
								<label class="form-label" for="transport-fleet-record-vehicle-type">Vehicle Type</label>
								<select class="form-select" id="transport-fleet-record-vehicle-type">
									<option value="">Select Vehicle Type</option>
									<option value="truck">Truck</option>
									<option value="bus">Bus</option>
									<option value="car">Car</option>
									<option value="motorcycle">Motorcycle</option>
								</select>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="transport-fleet-record-vehicle-number">Vehicle Number</label>
								<input type="text" class="form-control" id="transport-fleet-record-vehicle-number" placeholder="Enter Vehicle Number">
							</div>
							<div class="col-md-6">
								<label class="form-label" for="transport-fleet-record-driver-name">Driver Name</label>
								<input type="text" class="form-control" id="transport-fleet-record-driver-name" placeholder="Enter Driver Name">
							</div>
							<div class="col-md-6">
								<label class="form-label" for="transport-fleet-record-driver-mobile">Driver Mobile</label>
								<input type="text" class="form-control" id="transport-fleet-record-driver-mobile" placeholder="Enter Driver Mobile">
							</div>
							<div class="col-md-6">
								<label class="form-label" for="transport-fleet-record-vehicle-capacity">Vehicle Capacity</label>
								<input type="text" class="form-control" id="transport-fleet-record-vehicle-capacity" placeholder="Enter Vehicle Capacity">
							</div>
							<div class="col-md-6">
								<label class="form-label" for="transport-fleet-record-vehicle-fuel">Vehicle Fuel</label>
								<select class="form-select" id="transport-fleet-record-vehicle-fuel">
									<option value="">Select Vehicle Fuel</option>
									<option value="petrol">Petrol</option>
									<option value="diesel">Diesel</option>
									<option value="electric">Electric</option>
									<option value="hybrid">Hybrid</option>
								</select>
							</div>
							<div class="col-12 mt-3">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Equipment Records Form modal -->
		<div class="modal fade" id="equipmentModal" tabindex="-1" aria-labelledby="equipmentModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="equipmentModalLabel">Equipment Records</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<!-- Equipment Records Form -->
						<form class="form-body row g-3">
							<div class="col-md-6">
								<label class="form-label" for="equipment-record-equipment-name">Equipment Name</label>
								<input type="text" class="form-control" id="equipment-record-equipment-name" placeholder="Enter Equipment Name">
							</div>
							<div class="col-md-6">
								<label class="form-label" for="equipment-record-equipment-category">Equipment Category</label>
								<select class="form-select" id="equipment-record-equipment-category">
									<option value="">Select Equipment Category</option>
									<option value="construction">Construction</option>
									<option value="office">Office</option>
									<option value="electronic">Electronic</option>
									<option value="other">Other</option>
								</select>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="equipment-record-equipment-quantity">Equipment Quantity</label>
								<input type="number" class="form-control" id="equipment-record-equipment-quantity" placeholder="Enter Equipment Quantity">
							</div>
							<div class="col-md-6">
								<label class="form-label" for="equipment-record-equipment-price">Equipment Price</label>
								<input type="text" class="form-control" id="equipment-record-equipment-price" placeholder="Enter Equipment Price">
							</div>
							<div class="col-md-6">
								<label class="form-label" for="equipment-record-equipment-date">Equipment Date</label>
								<input type="date" class="form-control" id="equipment-record-equipment-date" placeholder="Enter Equipment Date">
							</div>
							<div class="col-12 mt-3">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Finance Record Expence, Income Form modal -->
		<div class="modal fade" id="financeModal" tabindex="-1" aria-labelledby="financeModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="financeModalLabel">Finance Record Expence, Income</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<!-- Finance Record Expence, Income Form -->
						<form>
							<div class="mb-3">
								<label class="form-label" for="finance-record-expence-income-type">Type</label>
								<select class="form-select" id="finance-record-expence-income-type">
									<option value="">Select Type</option>
									<option value="expence">Expence</option>
									<option value="income">Income</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label" for="finance-record-expence-income-amount">Amount</label>
								<input type="number" class="form-control" id="finance-record-expence-income-amount" placeholder="Enter Amount">
							</div>
							<div class="mb-3">
								<label class="form-label" for="finance-record-expence-income-date">Date</label>
								<input type="date" class="form-control" id="finance-record-expence-income-date" placeholder="Enter Date">
							</div>
							<div class="mb-3">
								<label class="form-label" for="finance-record-expence-income-description">Description</label>
								<textarea class="form-control" id="finance-record-expence-income-description" rows="3"></textarea>
							</div>
							<div class="col-12 mt-3">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Personal Report Modal -->
		<div class="modal fade" id="personalModal" tabindex="-1" aria-labelledby="personalModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary text-white">
						<h5 class="modal-title" id="personalModalLabel">
							<i class="fas fa-user-tie me-2"></i> Worker Performance Report
						</h5>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<!-- Personal Report Form -->
						<form class="form-body row g-3 needs-validation" novalidate>
							<!-- Worker Information -->
							<div class="col-md-6">
								<label class="form-label" for="personal-report-user">
									<i class="fas fa-user me-1"></i> Worker Name
								</label>
								<select class="form-select" id="personal-report-user" required>
									<option value="" disabled selected>Select Worker</option>
									<option value="1">John Doe (Top 5 Sai)</option>
									<option value="2">Sarah Smith (Energy Radio)</option>
									<option value="3">Mike Johnson (5 Star Event)</option>
									<option value="4">Emily Chen (Top 5 Sai)</option>
									<option value="5">David Kim (Energy Radio)</option>
								</select>
								<div class="invalid-feedback">Please select a worker</div>
							</div>

							<div class="col-md-6">
								<label class="form-label" for="personal-report-date">
									<i class="fas fa-calendar-alt me-1"></i> Report Date
								</label>
								<input type="date" class="form-control" id="personal-report-date" required>
								<div class="invalid-feedback">Please select a date</div>
							</div>

							<!-- Job Details -->
							<div class="col-md-6">
								<label class="form-label" for="personal-report-job">
									<i class="fas fa-briefcase me-1"></i> Assignment/Project
								</label>
								<select class="form-select" id="personal-report-job" required>
									<option value="" disabled selected>Select Assignment</option>
									<option value="1">Radio Broadcast (Energy Radio)</option>
									<option value="2">Concert Setup (5 Star Event)</option>
									<option value="3">Studio Recording (Top 5 Sai)</option>
									<option value="4">Equipment Maintenance</option>
									<option value="5">Client Meeting</option>
								</select>
								<div class="invalid-feedback">Please select an assignment</div>
							</div>

							<div class="col-md-6">
								<label class="form-label" for="personal-report-hours">
									<i class="fas fa-clock me-1"></i> Hours Worked
								</label>
								<input type="number" class="form-control" id="personal-report-hours" min="1" max="24" required>
								<div class="invalid-feedback">Please enter valid hours (1-24)</div>
							</div>

							<!-- Performance Rating -->
							<div class="col-md-12">
								<label class="form-label">
									<i class="fas fa-star me-1"></i> Performance Rating
								</label>
								<div class="rating-container">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="performanceRating" id="rating5" value="5" required>
										<label class="form-check-label" for="rating5">Excellent</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="performanceRating" id="rating4" value="4">
										<label class="form-check-label" for="rating4">Good</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="performanceRating" id="rating3" value="3">
										<label class="form-check-label" for="rating3">Average</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="performanceRating" id="rating2" value="2">
										<label class="form-check-label" for="rating2">Needs Improvement</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="performanceRating" id="rating1" value="1">
										<label class="form-check-label" for="rating1">Poor</label>
									</div>
								</div>
							</div>

							<!-- Incident/Accomplishment -->
							<div class="col-md-6">
								<label class="form-label" for="personal-report-type">
									<i class="fas fa-exclamation-circle me-1"></i> Report Type
								</label>
								<select class="form-select" id="personal-report-type" required>
									<option value="" disabled selected>Select Type</option>
									<option value="incident">Incident Report</option>
									<option value="accomplishment">Accomplishment Report</option>
									<option value="feedback">Client Feedback</option>
									<option value="other">Other</option>
								</select>
							</div>

							<div class="col-md-6">
								<label class="form-label" for="personal-report-severity">
									<i class="fas fa-exclamation-triangle me-1"></i> Severity Level
								</label>
								<select class="form-select" id="personal-report-severity">
									<option value="" disabled selected>Select Severity</option>
									<option value="low">Low</option>
									<option value="medium">Medium</option>
									<option value="high">High</option>
									<option value="critical">Critical</option>
								</select>
							</div>

							<!-- Detailed Remarks -->
							<div class="col-12">
								<label class="form-label" for="personal-report-remark">
									<i class="fas fa-comment-alt me-1"></i> Detailed Remarks
								</label>
								<textarea class="form-control" id="personal-report-remark" rows="4" placeholder="Describe the incident, accomplishment, or feedback in detail..." required></textarea>
								<div class="invalid-feedback">Please provide detailed remarks</div>
							</div>

							<!-- Evidence Upload -->
							<div class="col-12">
								<label class="form-label" for="personal-report-evidence">
									<i class="fas fa-paperclip me-1"></i> Supporting Evidence (Photos/Documents)
								</label>
								<input class="form-control" type="file" id="personal-report-evidence" multiple>
								<small class="text-muted">Max file size: 5MB (JPEG, PNG, PDF)</small>
							</div>

							<!-- Submit Button -->
							<div class="col-12 mt-4 text-end">
								<button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">
									<i class="fas fa-times me-1"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
									<i class="fas fa-paper-plane me-1"></i> Submit Report
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Include these in your head or before closing body tag -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
		<script>
			// Form validation script
			(function() {
				'use strict';
				window.addEventListener('load', function() {
					var forms = document.getElementsByClassName('needs-validation');
					Array.prototype.filter.call(forms, function(form) {
						form.addEventListener('submit', function(event) {
							if (form.checkValidity() === false) {
								event.preventDefault();
								event.stopPropagation();
							}
							form.classList.add('was-validated');
						}, false);
					});
				}, false);
			})();
		</script>

		<style>
			.rating-container {
				background-color: #f8f9fa;
				padding: 15px;
				border-radius: 5px;
				border: 1px solid #dee2e6;
			}

			.modal-header {
				padding: 1rem 1.5rem;
			}

			.form-label {
				font-weight: 500;
				color: #495057;
			}
		</style>

		<!-- Recruitment Modal -->
		<div class="modal fade" id="recruitmentModal" tabindex="-1" aria-labelledby="recruitmentModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary text-white">
						<h5 class="modal-title" id="recruitmentModalLabel">
							<i class="fas fa-user-plus me-2"></i> Job Application Form
						</h5>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form class="needs-validation" novalidate>
							<!-- Personal Information Section -->
							<h6 class="mb-3 text-primary"><i class="fas fa-user-circle me-2"></i> Personal Information</h6>
							<div class="row g-3">
								<div class="col-md-4">
									<label class="form-label" for="first-name">First Name*</label>
									<input type="text" class="form-control" id="first-name" required>
									<div class="invalid-feedback">Please enter your first name</div>
								</div>
								<div class="col-md-4">
									<label class="form-label" for="middle-name">Middle Name</label>
									<input type="text" class="form-control" id="middle-name">
								</div>
								<div class="col-md-4">
									<label class="form-label" for="last-name">Last Name*</label>
									<input type="text" class="form-control" id="last-name" required>
									<div class="invalid-feedback">Please enter your last name</div>
								</div>

								<div class="col-md-6">
									<label class="form-label" for="email">Email*</label>
									<input type="email" class="form-control" id="email" required>
									<div class="invalid-feedback">Please enter a valid email</div>
								</div>
								<div class="col-md-6">
									<label class="form-label" for="phone">Phone*</label>
									<input type="tel" class="form-control" id="phone" required>
									<div class="invalid-feedback">Please enter a valid phone number</div>
								</div>

								<div class="col-md-4">
									<label class="form-label" for="dob">Date of Birth*</label>
									<input type="date" class="form-control" id="dob" required>
									<div class="invalid-feedback">Please select your date of birth</div>
								</div>
								<div class="col-md-4">
									<label class="form-label" for="gender">Gender*</label>
									<select class="form-select" id="gender" required>
										<option value="" selected disabled>Select</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="other">Other</option>
										<option value="prefer-not-to-say">Prefer not to say</option>
									</select>
									<div class="invalid-feedback">Please select your gender</div>
								</div>
								<div class="col-md-4">
									<label class="form-label" for="nationality">Nationality*</label>
									<input type="text" class="form-control" id="nationality" required>
									<div class="invalid-feedback">Please enter your nationality</div>
								</div>
							</div>

							<!-- Position Information -->
							<h6 class="mb-3 mt-4 text-primary"><i class="fas fa-briefcase me-2"></i> Position Information</h6>
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label" for="position">Position Applied For*</label>
									<select class="form-select" id="position" required>
										<option value="" selected disabled>Select position</option>
										<option value="radio-host">Radio Host/Presenter</option>
										<option value="sound-engineer">Sound Engineer</option>
										<option value="event-manager">Event Manager</option>
										<option value="marketing">Marketing Specialist</option>
										<option value="technical-support">Technical Support</option>
										<option value="other">Other</option>
									</select>
									<div class="invalid-feedback">Please select a position</div>
								</div>
								<div class="col-md-6">
									<label class="form-label" for="department">Preferred Department*</label>
									<select class="form-select" id="department" required>
										<option value="" selected disabled>Select department</option>
										<option value="top5-sai">Top 5 Sai</option>
										<option value="energy-radio">Energy Radio</option>
										<option value="5star-event">5 Star Event</option>
										<option value="administration">Administration</option>
										<option value="technical">Technical</option>
									</select>
									<div class="invalid-feedback">Please select a department</div>
								</div>

								<div class="col-md-6">
									<label class="form-label" for="salary-expectation">Salary Expectation (USD)*</label>
									<input type="number" class="form-control" id="salary-expectation" min="0" required>
									<div class="invalid-feedback">Please enter your salary expectation</div>
								</div>
								<div class="col-md-6">
									<label class="form-label" for="availability">Available Start Date*</label>
									<input type="date" class="form-control" id="availability" required>
									<div class="invalid-feedback">Please select your availability date</div>
								</div>
							</div>

							<!-- Education & Experience -->
							<h6 class="mb-3 mt-4 text-primary"><i class="fas fa-graduation-cap me-2"></i> Education & Experience</h6>
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label" for="education-level">Highest Education Level*</label>
									<select class="form-select" id="education-level" required>
										<option value="" selected disabled>Select education level</option>
										<option value="high-school">High School</option>
										<option value="diploma">Diploma</option>
										<option value="bachelor">Bachelor's Degree</option>
										<option value="master">Master's Degree</option>
										<option value="phd">PhD</option>
										<option value="other">Other</option>
									</select>
									<div class="invalid-feedback">Please select your education level</div>
								</div>
								<div class="col-md-6">
									<label class="form-label" for="years-experience">Years of Experience*</label>
									<select class="form-select" id="years-experience" required>
										<option value="" selected disabled>Select years</option>
										<option value="0">No experience</option>
										<option value="1-2">1-2 years</option>
										<option value="3-5">3-5 years</option>
										<option value="5+">5+ years</option>
									</select>
									<div class="invalid-feedback">Please select years of experience</div>
								</div>

								<div class="col-12">
									<label class="form-label" for="work-history">Work History (Most Recent First)*</label>
									<textarea class="form-control" id="work-history" rows="3" required placeholder="Company name, position, duration, and key responsibilities"></textarea>
									<div class="invalid-feedback">Please provide your work history</div>
								</div>

								<div class="col-12">
									<label class="form-label" for="skills">Relevant Skills & Qualifications*</label>
									<textarea class="form-control" id="skills" rows="3" required placeholder="List your key skills relevant to this position"></textarea>
									<div class="invalid-feedback">Please list your relevant skills</div>
								</div>
							</div>

							<!-- Documents Upload -->
							<h6 class="mb-3 mt-4 text-primary"><i class="fas fa-file-upload me-2"></i> Supporting Documents</h6>
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label" for="resume">Resume/CV* (PDF/DOC, max 5MB)</label>
									<input class="form-control" type="file" id="resume" accept=".pdf,.doc,.docx" required>
									<div class="invalid-feedback">Please upload your resume</div>
								</div>
								<div class="col-md-6">
									<label class="form-label" for="cover-letter">Cover Letter (PDF/DOC, max 5MB)</label>
									<input class="form-control" type="file" id="cover-letter" accept=".pdf,.doc,.docx">
								</div>
								<div class="col-md-6">
									<label class="form-label" for="certificates">Certifications (PDF/IMG, max 5MB each)</label>
									<input class="form-control" type="file" id="certificates" multiple accept=".pdf,.jpg,.png">
								</div>
								<div class="col-md-6">
									<label class="form-label" for="portfolio">Portfolio/Work Samples (if applicable)</label>
									<input class="form-control" type="file" id="portfolio" multiple>
								</div>
							</div>

							<!-- Additional Information -->
							<h6 class="mb-3 mt-4 text-primary"><i class="fas fa-info-circle me-2"></i> Additional Information</h6>
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label" for="reference">How did you hear about us?*</label>
									<select class="form-select" id="reference" required>
										<option value="" selected disabled>Select option</option>
										<option value="website">Company Website</option>
										<option value="social-media">Social Media</option>
										<option value="job-portal">Job Portal</option>
										<option value="employee-referral">Employee Referral</option>
										<option value="other">Other</option>
									</select>
									<div class="invalid-feedback">Please select an option</div>
								</div>
								<div class="col-md-6">
									<label class="form-label" for="reference-name">If referred, name of referrer</label>
									<input type="text" class="form-control" id="reference-name">
								</div>

								<div class="col-12">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="consent" required>
										<label class="form-check-label" for="consent">
											I certify that all information provided is accurate and complete. I consent to the processing of my personal data for recruitment purposes.*
										</label>
										<div class="invalid-feedback">You must agree before submitting</div>
									</div>
								</div>
							</div>

							<!-- Submit Button -->
							<div class="row mt-4">
								<div class="col-12 text-end">
									<button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">
										<i class="fas fa-times me-1"></i> Cancel
									</button>
									<button type="submit" class="btn btn-primary">
										<i class="fas fa-paper-plane me-1"></i> Submit Application
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Include these in your head or before closing body tag -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
		<script>
			// Form validation script
			(function() {
				'use strict';
				window.addEventListener('load', function() {
					var forms = document.getElementsByClassName('needs-validation');
					Array.prototype.filter.call(forms, function(form) {
						form.addEventListener('submit', function(event) {
							if (form.checkValidity() === false) {
								event.preventDefault();
								event.stopPropagation();
							}
							form.classList.add('was-validated');
						}, false);
					});
				}, false);
			})();
		</script>

		<style>
			.modal-header {
				padding: 1rem 1.5rem;
			}

			.form-label {
				font-weight: 500;
				color: #495057;
			}

			.invalid-feedback {
				font-size: 0.85rem;
			}
		</style>


	</div>
</div>

<?php include 'includes/footer.php'; ?>
