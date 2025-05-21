<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Radio Schedule</h4>
                <h6>Manage daily broadcast programming</h6>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="card mb-3">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Select Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Program Type</label>
                                <select class="form-select">
                                    <option>All</option>
                                    <option>Music</option>
                                    <option>Talk Show</option>
                                    <option>News</option>
                                    <option>Interview</option>
                                    <option>Advertisement</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 d-flex align-items-end">
                            <button class="btn btn-primary w-100" type="submit">
                                <i class="fa fa-search"></i> Filter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Schedule Table -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Broadcast Schedule</h5>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addProgramModal">
                    <i class="fa fa-plus"></i> Add Program
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Time Slot</th>
                                <th>Program Title</th>
                                <th>Host / Presenter</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>08:00 - 09:00</td>
                                <td>Morning Vibes</td>
                                <td>Alice Morgan</td>
                                <td>Music</td>
                                <td><span class="badge bg-success">Scheduled</span></td>
                                <td>
                                    <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>09:00 - 10:00</td>
                                <td>Business Talk</td>
                                <td>Michael Brown</td>
                                <td>Talk Show</td>
                                <td><span class="badge bg-success">Scheduled</span></td>
                                <td>
                                    <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>10:00 - 10:30</td>
                                <td>Midday News</td>
                                <td>News Desk</td>
                                <td>News</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Notes -->
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title">Broadcast Notes</h5>
            </div>
            <div class="card-body">
                <textarea class="form-control" rows="4" placeholder="Enter any special notes or reminders about today's schedule..."></textarea>
            </div>
        </div>
    </div>
</div>

<!-- Add Program Modal -->
<div class="modal fade" id="addProgramModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Program</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Program Title</label>
                                <input type="text" class="form-control" placeholder="Enter program name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Host / Presenter</label>
                                <input type="text" class="form-control" placeholder="Enter presenter name">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Start Time</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>End Time</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-select">
                                    <option>Music</option>
                                    <option>Talk Show</option>
                                    <option>News</option>
                                    <option>Interview</option>
                                    <option>Advertisement</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" placeholder="Program details..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="submit" class="btn btn-primary">Add Program</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>