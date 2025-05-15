<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Event Reports</h4>
                <h6>Overview of past and upcoming events</h6>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="card mb-3">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>From Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>To Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Event Type</label>
                                <select class="form-select">
                                    <option>All</option>
                                    <option>Wedding</option>
                                    <option>Concert</option>
                                    <option>Corporate Event</option>
                                    <option>Private Party</option>
                                    <option>Conference</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fa fa-filter"></i> Filter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Event Report Table -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Event Summary</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Client</th>
                                <th>Venue</th>
                                <th>Status</th>
                                <th>Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Smith-Jones Wedding</td>
                                <td>Wedding</td>
                                <td>2025-05-10</td>
                                <td>John Smith</td>
                                <td>Grand Ballroom</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>$5,500</td>
                            </tr>
                            <tr>
                                <td>Rock the Night</td>
                                <td>Concert</td>
                                <td>2025-05-12</td>
                                <td>XYZ Events</td>
                                <td>Outdoor Garden</td>
                                <td><span class="badge bg-warning">Upcoming</span></td>
                                <td>$7,200</td>
                            </tr>
                            <tr>
                                <td>Annual Conference</td>
                                <td>Conference</td>
                                <td>2025-04-28</td>
                                <td>ABC Corp</td>
                                <td>Conference Hall A</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                                <td>$0</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" class="text-end"><strong>Total Revenue:</strong></td>
                                <td><strong>$12,700</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!-- Notes / Insights -->
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title">Additional Insights</h5>
            </div>
            <div class="card-body">
                <textarea class="form-control" rows="4" placeholder="Write insights, issues, or highlights from recent events..."></textarea>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>