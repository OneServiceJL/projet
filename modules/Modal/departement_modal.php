<?php
// Traitement du formulaire
if(isset($_POST['submit_department']))
{
	$name = $_POST['name'];
	$code = $_POST['code'];
	$type = $_POST['type'];
	$head = $_POST['head'];
	$status = $_POST['status'];

	$insert_query = "INSERT INTO department (name, code, type, head, status) VALUES ('$name', '$code', '$type', '$head', '$status')";
	$insert_query_run =mysqli_query($conn, $insert_query);
	if ($insert_query_run)
	{
		$_SESSION['success_message'] = "Department added successfully";
		header("Location: employee-database.php");
	} else {
		$_SESSION['error_message'] = "Failed to add department";
		header("Location: employee-database.php");
	}
	
}
?>


<!-- Department Management Modal -->
<div class="modal fade" id="addDepartmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-title" id="addDepartmentModalLabel">
					<i class="fas fa-sitemap me-2"></i>Department Management
				</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="row g-3 needs-validation" id="departmentForm" method="post" novalidate>
					<!-- Basic Information -->
					<div class="col-md-6">
						<label class="form-label" name="name" for="name">
							<i class="fas fa-building me-1"></i> Department Name*
						</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="e.g., On-Air Talent, Engineering, Newsroom" required>
						<div class="invalid-feedback">Please enter a valid department name</div>
					</div>

					<div class="col-md-6">
						<label class="form-label" name="code" for="code">
							<i class="fas fa-hashtag me-1"></i> Department Code
						</label>
						<input type="text" class="form-control" id="code" name="code" placeholder="e.g., OAT, ENG, NR">
						<small class="text-muted">Unique 2-5 character identifier</small>
					</div>

					<!-- Department Details -->
					<div class="col-md-6">
						<label class="form-label" name="type" for="type">
							<i class="fas fa-tag me-1"></i> Department Type*
						</label>
						<select class="form-select" id="type" name="type">
							<option value="" disabled selected>Select type</option>
							<option value="on-air">On-Air/Programming</option>
							<option value="technical">Technical/Engineering</option>
							<option value="news">News/Content</option>
							<option value="sales">Sales/Marketing</option>
							<option value="admin">Administrative</option>
							<option value="production">Production</option>
							<option value="digital">Digital/Online</option>
							<option value="other">Other</option>
						</select>
						<div class="invalid-feedback">Please select department type</div>
					</div>

					<div class="col-md-6">
						<label class="form-label" name="head" for="head">
							<i class="fas fa-user-tie me-1"></i> Department Head
						</label>
						<select class="form-select" id="head" name="head">
							<option value="" selected>Not assigned</option>
							<!-- select employee from database -->
							<option value="1">John Doe</option>
							<option value="2">Jane Smith</option>
							<option value="3">Michael Johnson</option>
						</select>
					</div>

					<div class="col-md-6">
						<label class="form-label" name="status" for="status">
							<i class="fas fa-power-off me-1"></i> Status
						</label>
						<select class="form-select" id="status" name="status">
							<option value="active" selected>Active</option>
							<option value="inactive">Inactive</option>
							<option value="merged">Merged</option>
						</select>
					</div>

					<!-- Submit Buttons -->
					<div class="col-12 mt-4">
						<div class="d-flex justify-content-between">
							<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
								<i class="fas fa-times me-1"></i> Cancel
							</button>
							<div>
								<button type="submit" name="submit_department" class="btn btn-primary">
									<i class="fas fa-paper-plane me-1"></i> Save Department
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
