<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="POS - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Register</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fevicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
        <!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Custom CSS -->
    <style>
        body{
            
            background-image:url("assets/images/bg_login.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100vh;
        }
        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        .step {
            text-align: center;
            position: relative;
            flex: 1;
        }
        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: bold;
        }
        .step.active .step-number {
            background-color: #0d6efd;
            color: white;
        }
        .step.completed .step-number {
            background-color: #198754;
            color: white;
        }
        .step-title {
            font-size: 14px;
            color: #6c757d;
        }
        .step.active .step-title {
            color: #0d6efd;
            font-weight: bold;
        }
        .step.completed .step-title {
            color: #198754;
        }
        .step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 20px;
            left: 60%;
            width: 80%;
            height: 2px;
            background-color: #e9ecef;
            z-index: -1;
        }
        .step.active:not(:last-child)::after {
            background-color: #e9ecef;
        }
        .step.completed:not(:last-child)::after {
            background-color: #198754;
        }
        .form-step {
            display: none;
        }
        .form-step.active {
            display: block;
        }
    </style>
		
    </head>
    <body>

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow"> <!-- Added card shadow for better visual hierarchy -->
                        <div class="card-header bg-primary text-white"> <!-- Added card header -->
                            <h4 class="mb-0">Registration Form</h4>
                        </div>
                        <div class="card-body">
                            <!-- Step Indicator - moved outside the form -->
                            <div class="step-indicator">
                                <div class="step active" data-step="1">
                                    <div class="step-number">1</div>
                                    <div class="step-title">Personal Info</div>
                                </div>
                                <div class="step" data-step="2">
                                    <div class="step-number">2</div>
                                    <div class="step-title">Contact Info</div>
                                </div>
                                <div class="step" data-step="3">
                                    <div class="step-number">3</div>
                                    <div class="step-title">Account Setup</div>
                                </div>
                                <div class="step" data-step="4">
                                    <div class="step-number">4</div>
                                    <div class="step-title">Confirmation</div>
                                </div>
                            </div>
                            
                            <!-- Form Steps -->
                            <form id="registrationForm">
                                <!-- Step 1 -->
                                <div class="form-step active" data-step="1">
                                    <h5 class="mb-4">Personal Information</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstName" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastName" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" id="gender" required>
                                            <option value="" selected disabled>Select gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" required>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary next-step">Next</button>
                                    </div>
                                </div>
                                
                                <!-- Step 2 -->
                                <div class="form-step" data-step="2">
                                    <h5 class="mb-4">Contact Information</h5>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea class="form-control" id="address" rows="3" required></textarea>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary prev-step">Previous</button>
                                        <button type="button" class="btn btn-primary next-step">Next</button>
                                    </div>
                                </div>
                                
                                <!-- Step 3 -->
                                <div class="form-step" data-step="3">
                                    <h5 class="mb-4">Account Setup</h5>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmPassword" required>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="terms" required>
                                        <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary prev-step">Previous</button>
                                        <button type="button" class="btn btn-primary next-step">Next</button>
                                    </div>
                                </div>
                                
                                <!-- Step 4 -->
                                <div class="form-step" data-step="4">
                                    <h5 class="mb-4">Confirmation</h5>
                                    <div class="alert alert-info">
                                        <p>Please review your information before submitting.</p>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6>Personal Information</h6>
                                        </div>
                                        <div class="card-body">
                                            <p><strong>Name:</strong> <span id="review-name"></span></p>
                                            <p><strong>Gender:</strong> <span id="review-gender"></span></p>
                                            <p><strong>Date of Birth:</strong> <span id="review-dob"></span></p>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6>Contact Information</h6>
                                        </div>
                                        <div class="card-body">
                                            <p><strong>Email:</strong> <span id="review-email"></span></p>
                                            <p><strong>Phone:</strong> <span id="review-phone"></span></p>
                                            <p><strong>Address:</strong> <span id="review-address"></span></p>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h6>Account Information</h6>
                                        </div>
                                        <div class="card-body">
                                            <p><strong>Username:</strong> <span id="review-username"></span></p>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary prev-step">Previous</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
		<!-- /Main Wrapper -->
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registrationForm');
            const steps = document.querySelectorAll('.step');
            const formSteps = document.querySelectorAll('.form-step');
            const nextButtons = document.querySelectorAll('.next-step');
            const prevButtons = document.querySelectorAll('.prev-step');
            let currentStep = 1;
            
            // Next button click handler
            nextButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Validate current step before proceeding
                    if (validateStep(currentStep)) {
                        goToStep(currentStep + 1);
                    }
                });
            });
            
            // Previous button click handler
            prevButtons.forEach(button => {
                button.addEventListener('click', function() {
                    goToStep(currentStep - 1);
                });
            });
            
            // Form submission handler
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you would typically send the form data to the server
                alert('Form submitted successfully!');
                // Reset form and go to step 1
                form.reset();
                goToStep(1);
            });
            
            function goToStep(step) {
                // Update current step
                currentStep = step;
                
                // Update step indicator
                steps.forEach((stepElement, index) => {
                    if (index + 1 === currentStep) {
                        stepElement.classList.add('active');
                        stepElement.classList.remove('completed');
                    } else if (index + 1 < currentStep) {
                        stepElement.classList.remove('active');
                        stepElement.classList.add('completed');
                    } else {
                        stepElement.classList.remove('active', 'completed');
                    }
                });
                
                // Show/hide form steps
                formSteps.forEach(formStep => {
                    if (parseInt(formStep.dataset.step) === currentStep) {
                        formStep.classList.add('active');
                    } else {
                        formStep.classList.remove('active');
                    }
                });
                
                // Update review section if we're on the last step
                if (currentStep === 4) {
                    updateReviewSection();
                }
            }
            
            function validateStep(step) {
                let isValid = true;
                const currentFormStep = document.querySelector(`.form-step[data-step="${step}"]`);
                
                // Check all required fields in the current step
                const inputs = currentFormStep.querySelectorAll('[required]');
                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        input.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });
                
                // Additional validation for specific steps
                if (step === 3) {
                    const password = document.getElementById('password').value;
                    const confirmPassword = document.getElementById('confirmPassword').value;
                    const terms = document.getElementById('terms').checked;
                    
                    if (password !== confirmPassword) {
                        document.getElementById('password').classList.add('is-invalid');
                        document.getElementById('confirmPassword').classList.add('is-invalid');
                        isValid = false;
                    }
                    
                    if (!terms) {
                        document.getElementById('terms').classList.add('is-invalid');
                        isValid = false;
                    }
                }
                
                return isValid;
            }
            
            function updateReviewSection() {
                // Personal Info
                document.getElementById('review-name').textContent = 
                    `${document.getElementById('firstName').value} ${document.getElementById('lastName').value}`;
                document.getElementById('review-gender').textContent = 
                    document.getElementById('gender').value;
                document.getElementById('review-dob').textContent = 
                    document.getElementById('dob').value;
                
                // Contact Info
                document.getElementById('review-email').textContent = 
                    document.getElementById('email').value;
                document.getElementById('review-phone').textContent = 
                    document.getElementById('phone').value;
                document.getElementById('review-address').textContent = 
                    document.getElementById('address').value;
                
                // Account Info
                document.getElementById('review-username').textContent = 
                    document.getElementById('username').value;
            }
        });
    </script>
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.7.1.min.js"></script>

         <!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Custom JS -->
        <script src="assets/js/theme-script.js"></script>	
		<script src="assets/js/script.js"></script>

    </body>
</html>