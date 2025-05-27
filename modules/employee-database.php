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
							<div class="col-md-12">
								<h4>Employee Database</h4>
							</div>
							<div class="col-md-12">
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
									Add Employee
								</button>
								<table class="table">
									<thead>
										<tr>
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
