<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Attendance</h4>
                <h6>Daily agent attendance records</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-search" id="search_icon"><img src="../assets/img/icons/search.svg" alt="img"></a>
                            <input type="text" class="form-control search-box" placeholder="Search">
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>Agent ID</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Status</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AG001</td>
                                <td>Jane Doe</td>
                                <td>2025-05-15</td>
                                <td>08:05</td>
                                <td>17:00</td>
                                <td><span class="badge bg-success">Present</span></td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>AG002</td>
                                <td>John Smith</td>
                                <td>2025-05-15</td>
                                <td>-</td>
                                <td>-</td>
                                <td><span class="badge bg-danger">Absent</span></td>
                                <td>Sick Leave</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Problem Report</h4>
                <h6>Submit operational or equipment problems</h6>
            </div>
            <div class="page-toolbar">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#problemReportModal">
                    <i class="fa fa-plus"></i> New Problem Report
                </button>
            </div>
        </div>

        <div class="modal fade" id="problemReportModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New Problem Report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="problemReportForm">
                            <div class="row">
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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Problem Description</label>
                                        <textarea class="form-control" name="problem_description" rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Date & Time</label>
                                        <input type="datetime-local" class="form-control" name="reported_at" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <button class="btn btn-primary">Submit Problem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Incident Report</h4>
                <h6>Log safety or operational incidents</h6>
            </div>
            <div class="page-toolbar">
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#incidentModal">
                    <i class="fa fa-plus"></i> Report Incident
                </button>
            </div>
        </div>

        <div class="modal fade" id="incidentModal" tabindex="-1" aria-labelledby="incidentModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="incidentModalLabel">Report Incident</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="incidentForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Reported By</label>
                                        <input type="text" class="form-control" name="reported_by" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Date of Incident</label>
                                        <input type="date" class="form-control" name="incident_date" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Incident Description</label>
                                        <textarea class="form-control" name="incident_description" rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <button class="btn btn-danger">Report Incident</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'includes/footer.php'; ?>