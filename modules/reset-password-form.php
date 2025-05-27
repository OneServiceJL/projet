<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
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
    <div class="container d-flex justify-content-center py-2">
        <img src="assets/images/fevicon.png" class="img-fluid" width="100" alt="POS - Bootstrap Admin Template">
    </div>
    <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow"> <!-- Added card shadow for better visual hierarchy -->
                        <div class="card-header bg-primary text-white"> <!-- Added card header -->
                            <h4 class="mb-0">Reset User Password</h4>
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
                            </div>
                            
                            <!-- Form Steps -->
                            <form id="requestResetPasswordForm">
                                <!-- Step 1 -->
                                <div class="form-step active" data-step="1">
                                    <h5 class="mb-4">Request Password Reset</h5>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter Your Email Address" required>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary next-step">Next</button>
                                    </div>
                                </div>
                                <!-- Step 2 -->
                                <div class="form-step" data-step="2">
                                    <h5 class="mb-4">Additional Information</h5>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">Your Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter Your Name" required>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mb-3">
                                            <label for="comment" class="form-label">Additional Comments</label>
                                            <textarea class="form-control" id="comment" rows="3" placeholder="Enter any additional comments" required></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary prev-step">Previous</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
   
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
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
</body>
</html>
