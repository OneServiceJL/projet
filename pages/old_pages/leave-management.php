<?php include 'includes/header.php'; ?>


<div class="page-wrapper">
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h4>Leave Management</h4>
                <h6>Track and manage leave requests</h6>
            </div>
            <div class="page-btn">
                <a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#addLeaveModal">
                    <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Request Leave
                </a>
            </div>
        </div>

        <!-- Leave Records Table -->
        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-search"><img src="../assets/img/icons/search.svg" alt="img"></a>
                            <input type="text" class="form-control search-box" placeholder="Search leave records">
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>Agent ID</th>
                                <th>Name</th>
                                <th>Leave Type</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Reason</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AG001</td>
                                <td>Jane Doe</td>
                                <td>Annual</td>
                                <td>2025-05-10</td>
                                <td>2025-05-15</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>Family event</td>
                            </tr>
                            <tr>
                                <td>AG002</td>
                                <td>John Smith</td>
                                <td>Sick</td>
                                <td>2025-04-28</td>
                                <td>2025-05-02</td>
                                <td><span class="badge bg-success">Approved</span></td>
                                <td>Flu recovery</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal: Add Leave -->
        <div class="modal fade" id="addLeaveModal" tabindex="-1" aria-labelledby="addLeaveModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addLeaveModalLabel">Request Leave</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Agent ID</label>
                                    <input type="text" class="form-control" name="agent_id" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Agent Name</label>
                                    <input type="text" class="form-control" name="agent_name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Leave Type</label>
                                    <select class="form-control" name="leave_type" required>
                                        <option value="">Select</option>
                                        <option value="Annual">Annual</option>
                                        <option value="Sick">Sick</option>
                                        <option value="Emergency">Emergency</option>
                                        <option value="Unpaid">Unpaid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Reason</label>
                                    <input type="text" class="form-control" name="reason" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="date" class="form-control" name="start_date" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="date" class="form-control" name="end_date" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit Request</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>



<?php include 'includes/footer.php'; ?>