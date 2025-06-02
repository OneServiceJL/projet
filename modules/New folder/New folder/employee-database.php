<?php
// Au début de employee-database.php
session_start();
// Connexion à la base de données
include '../config/config.php';

// Inclusion des fichiers nécessaires
include 'includes_2/header.php';
include 'includes_2/sidebar.php';

include 'Modal/departement_modal.php';


if(isset($_SESSION['success_message']))
{
	?>	
	<div class="alert alert-success">
		<?php echo $_SESSION['success_message']; ?>
	</div>
	<?php
	unset($_SESSION['success_message']);
}
if(isset($_SESSION['error_message']))
{
	?>
	<div class="alert alert-danger">
		<?php echo $_SESSION['error_message']; ?>
	</div>
	<?php
	unset($_SESSION['error_message']);
}
?>

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
						<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addShiftModal">
							<i class="fas fa-user mr-2"></i> <span class="d-none d-md-inline">Assign Shift</span>
						</a>
						<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addEmployeeRemarkModal">
							<i class="fas fa-sticky-note mr-2"></i> <span class="d-none d-md-inline">Add Remark</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!--Department Table-->
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<h4>Department Table</h4>
							</div>
							<div class="col-md-12">
								<table class="table">
									<thead>
										<tr>
											<th>ID</th>
											<th>Department Name</th>
											<th>Department Code</th>
											<th>Department Type</th>
											<th>Department Head</th>
											<th>Department Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$sql = "SELECT * FROM department";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											// output data of each row
											while ($row = $result->fetch_assoc()) {
												echo '<tr>
												<td>' . $row['id'] . '</td>
												<td>' . $row['name'] . '</td>
												<td>' . $row['code'] . '</td>
												<td>' . $row['type'] . '</td>
												<td>' . $row['head'] . '</td>
												<td>' . $row['status'] . '</td>
											</tr>';
											}
										} else {
											echo "0 results";
										}
										?>
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




<!--Departement Modal-->
<?php include 'Modal/departement_modal.php'; ?>
<?php include 'includes_2/footer.php'; ?>