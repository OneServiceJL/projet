<?php include 'includes_2/header.php'; ?>

<?php include 'includes_2/sidebar.php'; ?>

<?php include 'modal.php' ?>


<!-- Module Header -->

<div style="margin-top: 2.5em;" class="page-wrapper">
	<div class="row d-flex ml-2">
		<?php include 'includes_2/nav_menu.php'; ?>

		<!-- Radio Program Management Dropdown -->
		<div class="col-xl-3 col-sm-6 col-12 d-flex mb-3">
			<div class="dropdown w-100">
				<button class="btn btn-info w-100 dropdown-toggle" type="button" id="businessDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-chart-line mr-2"></i> Radio Program Management
				</button>
				<div class="dropdown-menu w-100" aria-labelledby="businessDropdown">
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#recordprogramModal">
						<i class="fas fa-handshake mr-2"></i> Record Program
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#energy-radioModal">
						<i class="fas fa-bullhorn mr-2"></i> Energy Radio
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i> Radio Program Management
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row d-flex ml-2">
		<div class="col-xl-12 col-sm-6 col-12 d-flex mb-3">
			<div class="card">
				<div class="card-body">
					<?php include 'fullcalendar.php'; ?>
				</div>
			</div>
		</div>
	</div>
	



	<?php include 'includes_2/footer.php'; ?>