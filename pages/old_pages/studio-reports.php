<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            
            
            <!-- Active Clients -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count">
                    <div class="dash-counts">
                        <h4>42</h4>
                        <h5>Active Clients</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="users"></i>
                    </div>
                </div>
            </div>
            
            <!-- Available Studios -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das1">
                    <div class="dash-counts">
                        <h4>3</h4>
                        <h5>Available Studios</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="mic"></i>
                    </div>
                </div>
            </div>
            
            <!-- Completed Sessions -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das2">
                    <div class="dash-counts">
                        <h4>68</h4>
                        <h5>Completed Sessions</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="check-circle"></i>
                    </div>
                </div>
            </div>
            
            <!-- Pending Invoices -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das3">
                    <div class="dash-counts">
                        <h4>7</h4>
                        <h5>Pending Invoices</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="dollar-sign"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Studio Utilization Chart -->
            <div class="col-lg-7 col-sm-12 col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Studio Utilization</h5>
                        <div class="graph-sets">
                            <ul>
                                <li>
                                    <span>Recording</span>
                                </li>
                                <li>
                                    <span>Live</span>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    This Month <img src="../assets/img/icons/dropdown.svg" alt="img" class="ms-2">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">This Year</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="studio_utilization_chart"></div>
                    </div>
                </div>
            </div>
            
            <!-- Upcoming Sessions -->
            <div class="col-lg-5 col-sm-12 col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Upcoming Sessions</h4>
                        <div class="dropdown">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                class="dropset">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a href="sessions-list.html" class="dropdown-item">View All</a>
                                </li>
                                <li>
                                    <a href="add-session.html" class="dropdown-item">Add Session</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive dataview">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Session</th>
                                        <th>Studio</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>09:00-12:00</td>
                                        <td>Album Recording - Midnight Band</td>
                                        <td>Studio A</td>
                                        <td><span class="badge bg-success">Confirmed</span></td>
                                    </tr>
                                    <tr>
                                        <td>14:00-16:00</td>
                                        <td>Podcast - Tech Today</td>
                                        <td>Studio B</td>
                                        <td><span class="badge bg-info">Reserved</span></td>
                                    </tr>
                                    <tr>
                                        <td>18:00-21:00</td>
                                        <td>Voice Over - Commercial</td>
                                        <td>Booth 1</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>10:00-13:00</td>
                                        <td>Live Session - Jazz Quartet</td>
                                        <td>Live Room</td>
                                        <td><span class="badge bg-success">Confirmed</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Equipment Maintenance Alerts -->
        <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">Equipment Maintenance Alerts</h4>
                <div class="table-responsive dataview">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Equipment</th>
                                <th>Last Service</th>
                                <th>Next Due</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Neumann U87 Microphone</td>
                                <td>15-Oct-2023</td>
                                <td>15-Jan-2024</td>
                                <td><span class="badge bg-success">OK</span></td>
                                <td><a href="#" class="text-primary">Schedule</a></td>
                            </tr>
                            <tr>
                                <td>Yamaha HS8 Monitors</td>
                                <td>01-Sep-2023</td>
                                <td>01-Dec-2023</td>
                                <td><span class="badge bg-warning">Due Soon</span></td>
                                <td><a href="#" class="text-primary">Schedule</a></td>
                            </tr>
                            <tr>
                                <td>Universal Audio Apollo Twin</td>
                                <td>20-Aug-2023</td>
                                <td>20-Nov-2023</td>
                                <td><span class="badge bg-danger">Overdue</span></td>
                                <td><a href="#" class="text-primary">Urgent</a></td>
                            </tr>
                            <tr>
                                <td>AKG C414 Microphone</td>
                                <td>10-Oct-2023</td>
                                <td>10-Jan-2024</td>
                                <td><span class="badge bg-success">OK</span></td>
                                <td><a href="#" class="text-primary">Schedule</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'includes/footer.php'; ?>