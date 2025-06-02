<?php
include 'config/config.php';
include 'config/function.php';
include 'includes_2/header.php';
include 'includes_2/sidebar.php';
include 'modal.php';
?>





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
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#recordprogramModal" href="view_all.php">
						<i class="fas fa-handshake mr-2"></i> Record Program
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#energy-radioModal">
						<i class="fas fa-bullhorn mr-2"></i> Energy Radio
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i> Radio Program Management
					</a>
				</div>
				
			</div>&nbsp;&nbsp;&nbsp;&nbsp;


		
			<div class="dropdown w-100">
				<button class="btn btn-info w-100 dropdown-toggle" type="button" id="businessDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-chart-line mr-2"></i> Radio Service Management
				</button>
				<div class="dropdown-menu w-100" aria-labelledby="businessDropdown">
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#recordprogramModal" href="view_all.php">
						<i class="fas fa-handshake mr-2"></i> Periodic emmission GVMT & NGO
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#energy-radioModal">
						<i class="fas fa-bullhorn mr-2"></i> Local emmission
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Announcement & press release
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Publi reportage
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Advertisments(jingle= ADVERT + Mentions)Goverment, corporate&
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Advertisments(jingle= ADVERT + Mentions)Local business & NGO
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Program sponsoring
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>adverts/ sports production
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Radio drama production
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Live broadcasting(OUT OF THE STUDIO)
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>live talkshow in the studio(GVMT&NGOS, PROJECTS, CORPORATES)
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Kwandika itangazo
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Performance ITORERO INDEMEZO
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>KOGEZA IMIPIRA KURI TERRAIN
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Advertisment on website and social media 
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Royalities 7 broadcast syndication
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Broadcasting through other broadcasting media 
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Radio studio Rental
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>Radio equipment Rental
					</a>
					<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#radioProgramModal">
						<i class="fas fa-users mr-2"></i>other Radio services 
					</a>
				</div>
			</div>
		</div>
	</div>
	
		</div>
	</div>

	

	<!-- Table to display radio program details -->
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Radio Programs</h5>
					<table id="radioProgramsTable" class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Title</th>
								<th>Host</th>
								<th>Genre</th>
								<th>Language</th>
								<th>Start Time</th>
								<th>End Time</th>
								<th>Days of the Week</th>
								<th>Description</th>
								<th>Status</th>
								<th>Actions</th>
								
							</tr>
						</thead>
						<tbody id="radioProgramsTableBody">

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<?php include 'includes_2/footer.php'; ?>