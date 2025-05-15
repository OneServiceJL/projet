<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Ad Spots Management</h4>
                <h6>Manage scheduled advertisements and airtime</h6>
            </div>
        </div>

        <!-- Filter Form -->
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
                                <label>Client</label>
                                <select class="form-select">
                                    <option>All Clients</option>
                                    <option>ABC Ltd.</option>
                                    <option>XYZ Corp.</option>
                                    <option>Energy Ads</option>
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

        <!-- Ad Spots Table -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Scheduled Ad Spots</h5>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addAdSpotModal">
                    <i class="fa fa-plus"></i> Add Ad Spot
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Time Slot</th>
                                <th>Client</th>
                                <th>Ad Title</th>
                                <th>Duration</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>08:15 - 08:30</td>
                                <td>ABC Ltd.</td>
                                <td>Summer Sale Promo</td>
                                <td>15 mins</td>
                                <td>$150</td>
                                <td><span class="badge bg-success">Scheduled</span></td>
                                <td>
                                    <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>10:00 - 10:05</td>
                                <td>XYZ Corp.</td>
                                <td>Insurance Quick Ad</td>
                                <td>5 mins</td>
                                <td>$50</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="text-end"><strong>Total Revenue:</strong></td>
                                <td colspan="3"><strong>$200</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Ad Spot Modal -->
<div class="modal fade" id="addAdSpotModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Advertisement Spot</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Client</label>
                                <select class="form-select">
                                    <option>Select Client</option>
                                    <option>ABC Ltd.</option>
                                    <option>XYZ Corp.</option>
                                    <option>Energy Ads</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Ad Title</label>
                                <input type="text" class="form-control" placeholder="Enter Ad Title">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control">
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
                                <label>Duration (minutes)</label>
                                <input type="number" class="form-control" placeholder="e.g. 15">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Rate ($)</label>
                                <input type="number" class="form-control" placeholder="e.g. 100">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-select">
                                    <option>Scheduled</option>
                                    <option>Pending</option>
                                    <option>Completed</option>
                                    <option>Cancelled</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ad content details..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="submit" class="btn btn-primary">Add Ad Spot</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>