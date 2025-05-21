<?php include 'includes/header.php'; ?>

<style>
    .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        overflow: hidden;
    }
    .avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .event-list {
        list-style: none;
        padding: 0;
    }
    .event-list li {
        display: flex;
        margin-bottom: 15px;
    }
    .event-date {
        width: 50px;
        height: 50px;
        background-color: #0d6efd;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        margin-right: 15px;
    }
    .event-date .date {
        font-weight: bold;
        font-size: 16px;
        line-height: 1;
    }
    .event-date .month {
        font-size: 12px;
        line-height: 1;
    }
    .event-date.bg-success {
        background-color: #198754 !important;
    }
    .event-date.bg-warning {
        background-color: #ffc107 !important;
    }
    .event-detail h6 {
        margin-bottom: 3px;
        font-size: 15px;
    }
</style>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Employee Dashboard</h4>
                <h6>Human Resources Management</h6>
            </div>
            <div class="page-btn">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
                    <i class="fa fa-user-plus"></i> Add Employee
                </button>
                <button class="btn btn-outline-primary ms-2">
                    <i class="fa fa-file-export"></i> Export
                </button>
            </div>
        </div>

        <!-- HR Summary Cards -->
        <div class="row mb-4">
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Total Employees</h6>
                                <h3 class="mb-0">42</h3>
                                <small class="text-success"><i class="fa fa-arrow-up"></i> 2 new this month</small>
                            </div>
                            <div class="bg-primary bg-opacity-10 p-3 rounded">
                                <i class="fa fa-users text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">On Leave Today</h6>
                                <h3 class="mb-0">3</h3>
                                <small class="text-warning"><i class="fa fa-exclamation-circle"></i> 2 scheduled</small>
                            </div>
                            <div class="bg-warning bg-opacity-10 p-3 rounded">
                                <i class="fa fa-bed text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Active Positions</h6>
                                <h3 class="mb-0">18</h3>
                                <small class="text-info">3 positions open</small>
                            </div>
                            <div class="bg-info bg-opacity-10 p-3 rounded">
                                <i class="fa fa-briefcase text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Upcoming Birthdays</h6>
                                <h3 class="mb-0">5</h3>
                                <small class="text-success">This month</small>
                            </div>
                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                <i class="fa fa-birthday-cake text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Employee List -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Employee Directory</h5>
                        <div class="card-search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search employees...">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>EMP-2023-001</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-2">
                                                    <img src="assets/img/profiles/avatar-01.jpg" alt="User Image">
                                                </div>
                                                <span>KAMANA Eric</span>
                                            </div>
                                        </td>
                                        <td>Radio Presenter</td>
                                        <td>Programming</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-edit"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-file-alt"></i> Documents</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa fa-trash"></i> Terminate</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EMP-2023-002</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-2">
                                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                                </div>
                                                <span>UWINEZA Alice</span>
                                            </div>
                                        </td>
                                        <td>Sales Manager</td>
                                        <td>Marketing</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-edit"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-file-alt"></i> Documents</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa fa-trash"></i> Terminate</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EMP-2023-003</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-2">
                                                    <img src="assets/img/profiles/avatar-03.jpg" alt="User Image">
                                                </div>
                                                <span>MUGISHA David</td>
                                        <td>Technical Director</td>
                                        <td>Engineering</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-edit"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-file-alt"></i> Documents</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa fa-trash"></i> Terminate</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EMP-2023-004</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-2">
                                                    <img src="assets/img/profiles/avatar-04.jpg" alt="User Image">
                                                </div>
                                                <span>HABIMANA Pierre</td>
                                        <td>Accountant</td>
                                        <td>Finance</td>
                                        <td><span class="badge bg-warning">On Leave</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-edit"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-file-alt"></i> Documents</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa fa-trash"></i> Terminate</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <nav>
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HR Widgets -->
            <div class="col-lg-4">
                <!-- Upcoming Events -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Upcoming Events</h5>
                    </div>
                    <div class="card-body">
                        <ul class="event-list">
                            <li>
                                <div class="event-date">
                                    <span class="date">15</span>
                                    <span class="month">May</span>
                                </div>
                                <div class="event-detail">
                                    <h6>Staff Meeting</h6>
                                    <p class="text-muted">10:00 AM - Conference Room</p>
                                </div>
                            </li>
                            <li>
                                <div class="event-date bg-success">
                                    <span class="date">20</span>
                                    <span class="month">May</span>
                                </div>
                                <div class="event-detail">
                                    <h6>Employee Training</h6>
                                    <p class="text-muted">All day - Training Center</p>
                                </div>
                            </li>
                            <li>
                                <div class="event-date bg-warning">
                                    <span class="date">25</span>
                                    <span class="month">May</span>
                                </div>
                                <div class="event-detail">
                                    <h6>Performance Reviews</h6>
                                    <p class="text-muted">Starts this week</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Department Distribution -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Department Distribution</h5>
                    </div>
                    <div class="card-body">
                        <div id="departmentChart" style="height: 250px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Employee Modal -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addEmployeeForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>First Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Last Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Gender</label>
                                <select class="form-select">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="+250">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Position</label>
                                <select class="form-select" required>
                                    <option value="">Select Position</option>
                                    <option>Radio Presenter</option>
                                    <option>Sales Manager</option>
                                    <option>Technical Director</option>
                                    <option>Accountant</option>
                                    <option>Marketing Executive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Department</label>
                                <select class="form-select" required>
                                    <option value="">Select Department</option>
                                    <option>Programming</option>
                                    <option>Marketing</option>
                                    <option>Engineering</option>
                                    <option>Finance</option>
                                    <option>Administration</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Join Date</label>
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Employee ID</label>
                                <input type="text" class="form-control" value="EMP-<?php echo date('Y-').str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT); ?>" readonly>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Address</label>
                        <textarea class="form-control" rows="2"></textarea>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>National ID Number</label>
                        <input type="text" class="form-control">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Profile Photo</label>
                        <input type="file" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save Employee</button>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    // Initialize datepicker
    $('[type="date"]').flatpickr();
    
    // Sample chart initialization
    console.log('Initialize department chart here');
    
    // Form submission handling
    $('#addEmployeeForm').on('submit', function(e) {
        e.preventDefault();
        // Add your form submission logic here
        alert('Employee added successfully!');
        $('#addEmployeeModal').modal('hide');
    });
});
</script>

<?php include 'includes/footer.php'; ?>


