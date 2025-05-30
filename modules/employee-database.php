<?php include 'includes_2/header.php'; ?>

<?php include 'includes_2/sidebar.php'; ?>

<?php include 'modal.php' ?>

<!-- Module Header -->

<div style="margin-top: 2.5em;" class="page-wrapper">
	<div class="content">
		<div class="row">
			<?php include 'includes_2/nav_menu.php'; ?>
			<div class="col-xl-3 col-sm-6 col-12 d-flex mb-3">
				<div class="dropdown w-100">
					<button class="btn btn-info w-100 dropdown-toggle" type="button" id="businessDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-chart-line mr-2"></i> Employee Portal
					</button>
					<div class="dropdown-menu w-100" aria-labelledby="businessDropdown">
						<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
							<i class="fas fa-building mr-2"></i> <span class="d-none d-md-inline">Add Department</span>
						</a>
						<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
							<i class="fas fa-user-plus mr-2"></i> <span class="d-none d-md-inline">Add employee</span>
						</a>
						<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addLeaveModal">
							<i class="fas fa-calendar mr-2"></i> <span class="d-none d-md-inline">Add Leave</span>
						</a>
						<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#affectEmployeeModal">
							<i class="fas fa-user mr-2"></i> <span class="d-none d-md-inline">Affect Employee</span>
						</a>
						<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addEmployeeRemarkModal">
							<i class="fas fa-sticky-note mr-2"></i> <span class="d-none d-md-inline">Add Remark</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Chat Content-->
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<h4>Employee Database</h4>
							</div>
							<div class="col-md-12">
								<table class="table">
									<thead>
										<tr>
											<th>Image</th>
											<th>First Name</th>
											<th>Middle Name</th>
											<th>Last Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Date of Birth</th>
											<th>Gender</th>
											<th>Nationality</th>
											<th>Position Applied For</th>
											<th>Preferred Department</th>
											<th>Salary Expectation</th>
											<th>Available Start Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><img src="uploads/<?php echo $row['photo']; ?>" alt="Employee" class="img-fluid rounded-circle" style="width: 40px; height: 40px;"></td>
											<td>John</td>
											<td>Smith</td>
											<td>Doe</td>
											<td>john.doe@example.com</td>
											<td>123-456-7890</td>
											<td>March 12, 1990</td>
											<td>Male</td>
											<td>American</td>
											<td>Software Engineer</td>
											<td>IT</td>
											<td>$100,000</td>
											<td>May 1, 2023</td>
										</tr>
										<tr>
											<td>Jane</td>
											<td>Doe</td>
											<td>Smith</td>
											<td>jane.smith@example.com</td>
											<td>098-765-4321</td>
											<td>June 20, 1995</td>
											<td>Female</td>
											<td>British</td>
											<td>Marketing Manager</td>
											<td>Sales and Marketing</td>
											<td>$80,000</td>
											<td>June 15, 2023</td>
										</tr>
									</tbody>
								</table>

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