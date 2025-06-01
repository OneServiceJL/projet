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

		<!-- Leave Form Modal -->
		<div class="modal fade" id="leaveModal" tabindex="-1" aria-labelledby="leaveModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="leaveModalLabel">
							<i class="fas fa-calendar me-2"></i> Request Leave
						</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form class="form-body row g-3 needs-validation" novalidate>
						<!-- Leave Type -->
						<div class="col-md-12">
							<label class="form-label" for="leave-type">
								<i class="fas fa-list me-1"></i> Leave Type
							</label>
							<select class="form-select" id="leave-type" required>
								<option value="" selected disabled>Select</option>
								<option value="annual">Annual</option>
								<option value="sick">Sick</option>
								<option value="family">Family</option>
								<option value="maternity">Maternity</option>
								<option value="paternity">Paternity</option>
								<option value="bereavement">Bereavement</option>
								<option value="other">Other (please specify)</option>
							</select>
							<div class="invalid-feedback">Please select a leave type</div>
						</div>

						<!-- Leave Date -->
						<div class="col-md-6">
							<label class="form-label" for="leave-date">
								<i class="fas fa-calendar me-1"></i> Leave Date
							</label>
							<input type="date" class="form-control" id="leave-date" required>
							<div class="invalid-feedback">Please select a date</div>
						</div>

						<!-- Leave Reason -->
						<div class="col-md-6">
							<label class="form-label" for="leave-reason">
								<i class="fas fa-question-circle me-1"></i> Reason for Leave
							</label>
							<input type="text" class="form-control" id="leave-reason" required>
							<div class="invalid-feedback">Please provide a reason for your leave</div>
						</div>

						<!-- Submit Button -->
						<div class="col-12 text-end">
							<button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">
								<i class="fas fa-times me-1"></i> Cancel
							</button>
							<button type="submit" class="btn btn-primary">
								<i class="fas fa-paper-plane me-1"></i> Submit Leave Request
							</button>
						</div>
					</form>
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


		<!-- Add Employee Modal -->
		<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary text-white">
						<h5 class="modal-title" id="addEmployeeModalLabel">
							<i class="fas fa-user-plus me-2"></i> Add New Employee
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
									<input type="email" class="form-control" id="email" required placeholder="yourmail@top5sai.com">
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
								<div class="col-md-6">
									<label class="form-label" for="address">Address*</label>
									<input type="text" class="form-control" id="address" required>
									<div class="invalid-feedback">Please enter your address</div>
								</div>

								<div class="col-md-4">
									<label class="form-label" for="dob">ID Numder</label>
									<input type="text" class="form-control" id="dob" required>
									<div class="invalid-feedback">Please enter your ID number</div>
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
							<!-- Photo Upload -->
							<h6 class="mb-3 mt-4 text-primary"><i class="fas fa-camera me-2"></i> Photo Upload</h6>
							<div class="row g-3">
								<div class="col-md-6">
									<label for="photo" class="form-label">Photo (jpg, png, max 5MB)</label>
									<input type="file" class="form-control" id="photo" accept=".jpg,.png" required>
									<div class="invalid-feedback">Please upload a photo</div>
								</div>
							</div>
							<!-- Position Information -->
							<h6 class="mb-3 mt-4 text-primary"><i class="fas fa-briefcase me-2"></i> Position Information</h6>
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label" for="position">Position*</label>
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
									<label class="form-label" for="department">Department*</label>
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
									<label class="form-label" for="salary">Salary (USD)*</label>
									<input type="number" class="form-control" id="salary" min="0" required>
									<div class="invalid-feedback">Please enter your salary</div>
								</div>
								<div class="col-md-6">
									<label class="form-label" for="availability">Available Start Date*</label>
									<input type="date" class="form-control" id="availability" required>
									<div class="invalid-feedback">Please select your availability date</div>
								</div>
							</div>

							<!-- Submit Button -->
							<div class="row mt-4">
								<div class="col-12 text-end">
									<button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">
										<i class="fas fa-times me-1"></i> Cancel
									</button>
									<button type="submit" class="btn btn-primary">
										<i class="fas fa-paper-plane me-1"></i> Add Employee
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


		<?php
		if(isset($POST['Save_department_data']))
		{
			echo "Hello Departement";
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
					<form class="row g-3 needs-validation" id="departmentForm" method="post" action="employee-database.php" novalidate>
							<!-- Hidden input for department id -->
							<input type="hidden" name="department-id" id="department-id">

							<!-- Basic Information -->
							<div class="col-md-6">
								<label class="form-label" for="department-name">
									<i class="fas fa-building me-1"></i> Department Name*
								</label>
								<input type="text" class="form-control" id="department-name" name="department-name" placeholder="e.g., On-Air Talent, Engineering, Newsroom" required>
								<div class="invalid-feedback">Please enter a valid department name</div>
							</div>

							<div class="col-md-6">
								<label class="form-label" for="department-code">
									<i class="fas fa-hashtag me-1"></i> Department Code
								</label>
								<input type="text" class="form-control" id="department-code" name="department-code" placeholder="e.g., OAT, ENG, NR">
								<small class="text-muted">Unique 2-5 character identifier</small>
							</div>

							<!-- Department Details -->
							<div class="col-md-6">
								<label class="form-label" for="department-type">
									<i class="fas fa-tag me-1"></i> Department Type*
								</label>
								<select class="form-select" id="department-type" name="department-type" required>
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
								<label class="form-label" for="department-head">
									<i class="fas fa-user-tie me-1"></i> Department Head
								</label>
								<select class="form-select" id="department-head" name="department-head">
									<option value="" selected>Not assigned</option>
									<!-- select employee from database -->
									<option value="1">John Doe</option>
									<option value="2">Jane Smith</option>
									<option value="3">Michael Johnson</option>
								</select>
							</div>

							<div class="col-md-6">
								<label class="form-label" for="department-status">
									<i class="fas fa-power-off me-1"></i> Status
								</label>
								<select class="form-select" id="department-status" name="department-status">
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
										<button type="Save_department_data" class="btn btn-primary">
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


		<!-- Leave Request Modal -->
		<div class="modal fade" id="addLeaveModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addLeaveModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-info text-white">
						<h5 class="modal-title" id="addLeaveModalLabel">
							<i class="fas fa-calendar-plus me-2"></i>Leave Request Form
						</h5>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form class="row g-3 needs-validation" id="leaveRequestForm" novalidate>
							<!-- Employee Information -->
							<div class="col-md-6">
								<label class="form-label" for="employee-name">
									<i class="fas fa-user-tie me-1"></i> Employee Name*
								</label>
								<label class="visually-hidden" for="employee-name">Employee Name</label>
								<select class="form-select" id="employee-name" required>
									<option value="" selected disabled>Select Employee</option>
									<?php foreach ($employees as $employee) {
										echo "<option value='{$employee['id']}'>{$employee['name']} ({$employee['department']})</option>";
									} ?>
								</select>
								<div class="invalid-feedback">Please select an employee</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="employee-department">
									<i class="fas fa-broadcast-tower me-1"></i> Department/Show*
								</label>
								<label class="visually-hidden" for="employee-department">Department/Show</label>
								<select class="form-select" id="employee-department" required>
									<option value="" selected disabled>Select Department/Show</option>
									<?php foreach ($departments as $department) {
										echo "<option value='{$department['id']}'>{$department['name']}</option>";
									} ?>
								</select>
								<div class="invalid-feedback">Please select a department/show</div>
							</div>

							<!-- Leave Details -->
							<div class="col-md-4">
								<label class="form-label" for="leave-type">
									<i class="fas fa-clipboard-list me-1"></i> Leave Type*
								</label>
								<select class="form-select" id="leave-type" required>
									<option value="" selected disabled>Select Leave Type</option>
									<option value="annual">Annual Leave</option>
									<option value="sick">Sick Leave</option>
									<option value="family">Family Responsibility</option>
									<option value="maternity">Maternity Leave</option>
									<option value="paternity">Paternity Leave</option>
									<option value="compassionate">Compassionate/Bereavement</option>
									<option value="study">Study Leave</option>
									<option value="special">Special Leave (Unpaid)</option>
									<option value="other">Other</option>
								</select>
								<div class="invalid-feedback">Please select a leave type</div>
							</div>

							<div class="col-md-4">
								<label class="form-label" for="leave-priority">
									<i class="fas fa-exclamation-circle me-1"></i> Priority
								</label>
								<select class="form-select" id="leave-priority">
									<option value="normal" selected>Normal</option>
									<option value="urgent">Urgent</option>
									<option value="emergency">Emergency</option>
								</select>
							</div>

							<div class="col-md-4">
								<label class="form-label" for="leave-status">
									<i class="fas fa-tasks me-1"></i> Status
								</label>
								<select class="form-select" id="leave-status">
									<option value="pending" selected>Pending Approval</option>
									<option value="approved">Approved</option>
									<option value="rejected">Rejected</option>
								</select>
							</div>

							<!-- Date Range -->
							<div class="col-md-6">
								<label class="form-label" for="leave-start-date">
									<i class="fas fa-calendar-day me-1"></i> Start Date*
								</label>
								<div class="input-group">
									<input type="date" class="form-control" id="leave-start-date" required>
									<span class="input-group-text">
										<i class="fas fa-clock"></i>
										<select class="form-select form-select-sm ms-2" style="width: 80px;">
											<option value="full">Full Day</option>
											<option value="am">AM Only</option>
											<option value="pm">PM Only</option>
										</select>
									</span>
								</div>
								<div class="invalid-feedback">Please select start date</div>
							</div>

							<div class="col-md-6">
								<label class="form-label" for="leave-end-date">
									<i class="fas fa-calendar-day me-1"></i> End Date*
								</label>
								<div class="input-group">
									<input type="date" class="form-control" id="leave-end-date" required>
									<span class="input-group-text">
										<i class="fas fa-clock"></i>
										<select class="form-select form-select-sm ms-2" style="width: 80px;">
											<option value="full">Full Day</option>
											<option value="am">AM Only</option>
											<option value="pm">PM Only</option>
										</select>
									</span>
								</div>
								<div class="invalid-feedback">Please select end date</div>
							</div>

							<!-- Reason and Coverage -->
							<div class="col-md-8">
								<label class="form-label" for="leave-reason">
									<i class="fas fa-comment-dots me-1"></i> Reason for Leave*
								</label>
								<textarea class="form-control" id="leave-reason" rows="3" placeholder="Please provide details about your leave request" required></textarea>
								<div class="invalid-feedback">Please provide a reason</div>
							</div>

							<div class="col-md-4">
								<label class="form-label" for="leave-coverage">
									<i class="fas fa-user-friends me-1"></i> Suggested Coverage
								</label>
								<select class="form-select" id="leave-coverage">
									<option value="" selected>No preference</option>
									<option value="1">Sarah Smith</option>
									<option value="2">Mike Johnson</option>
									<option value="3">Emily Chen</option>
									<option value="4">David Kim</option>
								</select>
							</div>

							<!-- Attachments -->
							<div class="col-md-6">
								<label class="form-label" for="leave-attachment">
									<i class="fas fa-paperclip me-1"></i> Supporting Documents
								</label>
								<input type="file" class="form-control" id="leave-attachment" multiple>
								<small class="text-muted">Upload medical certificates or other supporting documents (Max 5MB)</small>
							</div>

							<div class="col-md-6">
								<label class="form-label" for="leave-contact">
									<i class="fas fa-phone-alt me-1"></i> Emergency Contact During Leave
								</label>
								<div class="input-group">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
									<input type="text" class="form-control" placeholder="Contact person">
									<span class="input-group-text"><i class="fas fa-phone"></i></span>
									<input type="tel" class="form-control" placeholder="Phone number">
								</div>
							</div>

							<!-- Approval Chain -->
							<div class="col-12">
								<div class="card bg-light">
									<div class="card-body p-3">
										<h6 class="card-title mb-3">
											<i class="fas fa-user-shield me-2"></i>Approval Workflow
										</h6>
										<div class="d-flex justify-content-between">
											<div class="text-center">
												<div class="avatar-sm mx-auto mb-2">
													<span class="avatar-title rounded-circle bg-primary text-white">
														1
													</span>
												</div>
												<h6 class="mb-0">HOD Departement</h6>
												<small class="text-muted">Jane Wilson</small>
											</div>
											<div class="text-center">
												<div class="avatar-sm mx-auto mb-2">
													<span class="avatar-title rounded-circle bg-secondary text-white">
														2
													</span>
												</div>
												<h6 class="mb-0">HR Management</h6>
												<small class="text-muted">Mark Thompson</small>
											</div>
											<div class="text-center">
												<div class="avatar-sm mx-auto mb-2">
													<span class="avatar-title rounded-circle bg-secondary text-white">
														3
													</span>
												</div>
												<h6 class="mb-0">CEO</h6>
												<small class="text-muted">Parick Uwineza</small>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Submit Buttons -->
							<div class="col-12 mt-4">
								<div class="d-flex justify-content-between">
									<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
										<i class="fas fa-times me-1"></i> Cancel
									</button>
									<div>
										<button type="button" class="btn btn-outline-info me-2">
											<i class="fas fa-save me-1"></i> Save Draft
										</button>
										<button type="submit" class="btn btn-primary">
											<i class="fas fa-paper-plane me-1"></i> Submit Request
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- On-air Shift Assignment Modal -->
		<div class="modal fade" id="addShiftModal" tabindex="-1" aria-labelledby="addShiftModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary text-white">
						<h5 class="modal-title" id="addShiftModalLabel">
							<i class="fas fa-calendar-alt me-2"></i>Assign On-Air Shift
						</h5>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form class="form-body row g-3 needs-validation" id="shiftAssignmentForm" novalidate>
							<!-- Station and Talent Selection -->
							<div class="col-md-6">
								<label class="form-label" for="onair-shift-station">
									<i class="fas fa-broadcast-tower me-1"></i> Station/Brand
								</label>
								<select class="form-select" id="onair-shift-station" required>
									<option value="" disabled selected>Select Station</option>
									<option value="top5">Top 5 Sai</option>
									<option value="energy">Energy Radio</option>
									<option value="5star">5 Star Event</option>
									<option value="news">News Network</option>
								</select>
								<div class="invalid-feedback">Please select a station</div>
							</div>

							<div class="col-md-6">
								<label class="form-label" for="onair-shift-user">
									<i class="fas fa-user me-1"></i> On-air Talent
								</label>
								<select class="form-select" id="onair-shift-user" required>
									<option value="" disabled selected>Select Talent</option>
									<optgroup label="Top 5 Sai">
										<option value="1">John Doe (Morning Host)</option>
										<option value="4">Emily Chen (Afternoon Drive)</option>
									</optgroup>
									<optgroup label="Energy Radio">
										<option value="2">Sarah Smith (Evenings)</option>
										<option value="5">David Kim (Weekends)</option>
									</optgroup>
									<optgroup label="5 Star Event">
										<option value="3">Mike Johnson (Special Events)</option>
									</optgroup>
								</select>
								<div class="invalid-feedback">Please select an on-air talent</div>
							</div>

							<!-- Shift Details -->
							<div class="col-md-6">
								<label class="form-label" for="onair-shift-title">
									<i class="fas fa-heading me-1"></i> Shift Title/Show Name
								</label>
								<input type="text" class="form-control" id="onair-shift-title" placeholder="e.g. Morning Drive, Late Night Jazz" required>
								<div class="invalid-feedback">Please enter a shift title</div>
							</div>

							<div class="col-md-6">
								<label class="form-label" for="onair-shift-type">
									<i class="fas fa-tags me-1"></i> Shift Type
								</label>
								<select class="form-select" id="onair-shift-type" required>
									<option value="" disabled selected>Select Type</option>
									<option value="regular">Regular Show</option>
									<option value="special">Special Program</option>
									<option value="fill-in">Fill-in</option>
									<option value="emergency">Emergency Coverage</option>
									<option value="training">Training Shift</option>
								</select>
								<div class="invalid-feedback">Please select shift type</div>
							</div>

							<!-- Date and Time -->
							<div class="col-md-4">
								<label class="form-label" for="onair-shift-date">
									<i class="fas fa-calendar-day me-1"></i> Start Date
								</label>
								<input type="date" class="form-control" id="onair-shift-date" required>
								<div class="invalid-feedback">Please select a date</div>
							</div>

							<div class="col-md-4">
								<label class="form-label" for="onair-shift-start-time">
									<i class="fas fa-clock me-1"></i> Start Time
								</label>
								<input type="time" class="form-control" id="onair-shift-start-time" required>
								<div class="invalid-feedback">Please enter start time</div>
							</div>

							<div class="col-md-4">
								<label class="form-label" for="onair-shift-end-time">
									<i class="fas fa-clock me-1"></i> End Time
								</label>
								<input type="time" class="form-control" id="onair-shift-end-time" required>
								<div class="invalid-feedback">Please enter end time</div>
							</div>

							<!-- Recurrence Options -->
							<div class="col-12">
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="recurring-shift">
									<label class="form-check-label" for="recurring-shift">
										<i class="fas fa-redo me-1"></i> Recurring Shift
									</label>
								</div>
							</div>

							<div class="col-12" id="recurrence-options" style="display:none;">
								<div class="card border-primary">
									<div class="card-body">
										<h6 class="card-title">
											<i class="fas fa-calendar-week me-1"></i> Recurrence Pattern
										</h6>
										<div class="row">
											<div class="col-md-4">
												<label class="form-label">Repeat Every</label>
												<div class="input-group">
													<input type="number" class="form-control" value="1" min="1" max="52">
													<select class="form-select">
														<option value="week">Week(s)</option>
														<option value="month">Month(s)</option>
													</select>
												</div>
											</div>
											<div class="col-md-8">
												<label class="form-label">Repeat On</label>
												<div class="btn-group btn-group-sm w-100" role="group">
													<input type="checkbox" class="btn-check" id="mon" autocomplete="off">
													<label class="btn btn-outline-primary" for="mon">Mon</label>

													<input type="checkbox" class="btn-check" id="tue" autocomplete="off">
													<label class="btn btn-outline-primary" for="tue">Tue</label>

													<input type="checkbox" class="btn-check" id="wed" autocomplete="off">
													<label class="btn btn-outline-primary" for="wed">Wed</label>

													<input type="checkbox" class="btn-check" id="thu" autocomplete="off">
													<label class="btn btn-outline-primary" for="thu">Thu</label>

													<input type="checkbox" class="btn-check" id="fri" autocomplete="off">
													<label class="btn btn-outline-primary" for="fri">Fri</label>

													<input type="checkbox" class="btn-check" id="sat" autocomplete="off">
													<label class="btn btn-outline-primary" for="sat">Sat</label>

													<input type="checkbox" class="btn-check" id="sun" autocomplete="off">
													<label class="btn btn-outline-primary" for="sun">Sun</label>
												</div>
											</div>
										</div>
										<div class="row mt-2">
											<div class="col-md-6">
												<label class="form-label">Ends</label>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="endOptions" id="never" checked>
													<label class="form-check-label" for="never">Never</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="endOptions" id="after">
													<label class="form-check-label" for="after">
														After <input type="number" class="form-control d-inline-block ms-2" style="width: 60px;" value="10" min="1"> occurrences
													</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="endOptions" id="onDate">
													<label class="form-check-label" for="onDate">
														On <input type="date" class="form-control d-inline-block ms-2" style="width: 140px;">
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Additional Options -->
							<div class="col-md-6">
								<label class="form-label" for="shift-status">
									<i class="fas fa-power-off me-1"></i> Shift Status
								</label>
								<select class="form-select" id="shift-status">
									<option value="confirmed" selected>Confirmed</option>
									<option value="tentative">Tentative</option>
									<option value="cancelled">Cancelled</option>
								</select>
							</div>

							<div class="col-md-6">
								<label class="form-label" for="shift-notes">
									<i class="fas fa-sticky-note me-1"></i> Notes/Instructions
								</label>
								<textarea class="form-control" id="shift-notes" rows="2" placeholder="Special instructions or show details"></textarea>
							</div>

							<!-- Submit Button -->
							<div class="col-12 mt-4">
								<div class="d-flex justify-content-between">
									<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
										<i class="fas fa-times me-1"></i> Cancel
									</button>
									<div>
										<button type="button" class="btn btn-outline-primary me-2">
											<i class="fas fa-save me-1"></i> Save Draft
										</button>
										<button type="submit" class="btn btn-primary">
											<i class="fas fa-paper-plane me-1"></i> Assign Shift
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>



		<!-- Radio Program Management Modal -->
		<style>
			/* Add this to your stylesheet */
			#radioProgramModal .modal-content {
				border-radius: 10px;
				overflow: hidden;
			}

			#radioProgramModal .modal-header {
				padding: 1rem 1.5rem;
			}

			#radioProgramModal .modal-body {
				padding: 1.5rem;
			}

			#radioProgramModal .form-label {
				font-weight: 500;
				margin-bottom: 0.5rem;
			}

			#radioProgramModal .form-check {
				margin-bottom: 0.3rem;
			}

			#radioProgramModal .form-check-label {
				margin-left: 0.5rem;
			}

			#radioProgramModal textarea {
				resize: vertical;
				min-height: 100px;
			}
		</style>
		<div class="modal fade" id="radioProgramModal" tabindex="-1" aria-labelledby="radioProgramModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary text-white">
						<h5 class="modal-title" id="radioProgramModalLabel">Radio Program Details</h5>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form id="radioProgramForm">
							<div class="row mb-3">
								<div class="col-md-6">
									<label for="programTitle" class="form-label">Program Title*</label>
									<input type="text" class="form-control" id="programTitle" required>
								</div>
								<div class="col-md-6">
									<label for="programHost" class="form-label">Host/DJ</label>
									<select class="form-select" id="programHost">
										<option value="">Select a host</option>
										<option value="host1">Host 1</option>
										<option value="host2">Host 2</option>
										<option value="host3">Host 3</option>
									</select>
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-md-6">
									<label for="programGenre" class="form-label">Type*</label>
									<select class="form-select" id="programGenre" required>
										<option value="">Select a genre</option>
										<option value="news">News</option>
										<option value="talk">Talk Show</option>
										<option value="music">Music</option>
										<option value="sports">Sports</option>
										<option value="comedy">Comedy</option>
										<option value="drama">Radio Drama</option>
										<option value="educational">Educational</option>
										<option value="religious">Religious</option>
										<option value="other">Other</option>
									</select>
								</div>
								<div class="col-md-6">
									<label for="programLanguage" class="form-label">Language*</label>
									<input type="text" class="form-control" id="programLanguage" required>
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-md-6">
									<label for="startTime" class="form-label">Start Time*</label>
									<input type="time" class="form-control" id="startTime" required>
								</div>
								<div class="col-md-6">
									<label for="endTime" class="form-label">End Time*</label>
									<input type="time" class="form-control" id="endTime" required>
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-md-6">
									<label class="form-label">Days of the Week*</label>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="monday">
										<label class="form-check-label" for="monday">Monday</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="tuesday">
										<label class="form-check-label" for="tuesday">Tuesday</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="wednesday">
										<label class="form-check-label" for="wednesday">Wednesday</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="thursday">
										<label class="form-check-label" for="thursday">Thursday</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="friday">
										<label class="form-check-label" for="friday">Friday</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="saturday">
										<label class="form-check-label" for="saturday">Saturday</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="sunday">
										<label class="form-check-label" for="sunday">Sunday</label>
									</div>
								</div>
								<div class="col-md-6">
									<label for="programDescription" class="form-label">Description</label>
									<textarea class="form-control" id="programDescription" rows="5"></textarea>
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-md-6">
									<label for="programImage" class="form-label">Program Image</label>
									<input type="file" class="form-control" id="programImage" accept="image/*">
								</div>
								<div class="col-md-6">
									<label for="programStatus" class="form-label">Status</label>
									<select class="form-select" id="programStatus">
										<option value="active">Active</option>
										<option value="inactive">Inactive</option>
										<option value="on_break">On Break</option>
									</select>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary" id="saveProgram">Save Program</button>
					</div>
				</div>
			</div>
		</div>

		<script>
			// Initialize modal
			var radioProgramModal = new bootstrap.Modal(document.getElementById('radioProgramModal'));

			// Show modal function
			function showRadioProgramModal(programData = null) {
				if (programData) {
					// Populate form with existing data
					document.getElementById('programTitle').value = programData.title || '';
					document.getElementById('programHost').value = programData.host || '';
					// ... populate other fields ...
				} else {
					// Clear form for new program
					document.getElementById('radioProgramForm').reset();
				}

				radioProgramModal.show();
			}

			// Save button event listener
			document.getElementById('saveProgram').addEventListener('click', function() {
				// Validate and save form data
				if (document.getElementById('radioProgramForm').checkValidity()) {
					const programData = {
						title: document.getElementById('programTitle').value,
						host: document.getElementById('programHost').value,
						genre: document.getElementById('programGenre').value,
						// ... collect other field values ...
					};

					// Here you would typically send data to your backend
					console.log('Saving program:', programData);

					radioProgramModal.hide();
				} else {
					// Show validation errors
					document.getElementById('radioProgramForm').reportValidity();
				}
			});
		</script>