<?php include 'includes/header.php'; ?>

<section class="page-wrapper">
    <div class="container-fluid">
        <div class="page-header">
            <div class="page-title">
                <h4>Recording Sessions</h4>
                <h6>Dashboard/Recording Sessions</h6>
            </div>
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addSessionModal" class="btn btn-primary">
                <img src="../assets/img/icons/plus.svg" alt="img" class="me-2">New Session
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="sessionsTable">
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Session Type</th>
                                <th>Studio</th>
                                <th>Session Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Engineer</th>
                                <th>Artist</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Midnight Band</td>
                                <td>Recording</td>
                                <td>Studio A</td>
                                <td>2023-02-25</td>
                                <td>10:00am</td>
                                <td>5:00pm</td>
                                <td>Sarah Johnson</td>
                                <td>Midnight Band</td>
                                <td>Scheduled</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm">View</a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</section>


<?php include 'includes/footer.php'; ?>