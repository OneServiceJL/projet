<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Listener Feedback Management</h4>
                <h6>View and manage listener comments and ratings</h6>
            </div>
        </div>

        <!-- Filter Form -->
        <div class="card mb-3">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Date Range</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Program</label>
                                <select class="form-select">
                                    <option>All Programs</option>
                                    <option>Morning Show</option>
                                    <option>Afternoon Drive</option>
                                    <option>Evening Jazz</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Rating</label>
                                <select class="form-select">
                                    <option>All Ratings</option>
                                    <option>5 Stars</option>
                                    <option>4 Stars</option>
                                    <option>3 Stars</option>
                                    <option>2 Stars</option>
                                    <option>1 Star</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 d-flex align-items-end">
                            <button class="btn btn-primary w-100" type="submit">
                                <i class="fa fa-filter"></i> Filter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Feedback Summary Cards -->
        <div class="row mb-4">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Total Feedback</h6>
                                <h3 class="mb-0">1,248</h3>
                            </div>
                            <div class="bg-primary bg-opacity-10 p-3 rounded">
                                <i class="fa fa-comments text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Avg. Rating</h6>
                                <h3 class="mb-0">4.2 <small class="text-muted">/5</small></h3>
                            </div>
                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                <i class="fa fa-star text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Positive</h6>
                                <h3 class="mb-0">856</h3>
                            </div>
                            <div class="bg-info bg-opacity-10 p-3 rounded">
                                <i class="fa fa-thumbs-up text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Complaints</h6>
                                <h3 class="mb-0">42</h3>
                            </div>
                            <div class="bg-danger bg-opacity-10 p-3 rounded">
                                <i class="fa fa-exclamation-triangle text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feedback Table -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Listener Feedback</h5>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exportFeedbackModal">
                    <i class="fa fa-download"></i> Export
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date/Time</th>
                                <th>Listener</th>
                                <th>Program</th>
                                <th>Feedback</th>
                                <th>Rating</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-06-15 08:24</td>
                                <td>John D.</td>
                                <td>Morning Show</td>
                                <td>Great segment on local businesses!</td>
                                <td>
                                    <div class="rating">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                </td>
                                <td><span class="badge bg-success">Processed</span></td>
                                <td>
                                    <a href="#" class="text-primary me-2" data-bs-toggle="modal" data-bs-target="#viewFeedbackModal"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2023-06-14 17:45</td>
                                <td>Sarah M.</td>
                                <td>Afternoon Drive</td>
                                <td>The volume on ads is too loud compared to the show</td>
                                <td>
                                    <div class="rating">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <a href="#" class="text-primary me-2" data-bs-toggle="modal" data-bs-target="#viewFeedbackModal"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info">Showing 1 to 10 of 24 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers float-end">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
                                <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
                                <li class="paginate_button page-item next"><a href="#" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- View Feedback Modal -->
<div class="modal fade" id="viewFeedbackModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Feedback Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-6">
                        <strong>Date:</strong> 2023-06-15 08:24
                    </div>
                    <div class="col-6">
                        <strong>Listener:</strong> John D.
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <strong>Program:</strong> Morning Show
                    </div>
                    <div class="col-6">
                        <strong>Rating:</strong> 
                        <div class="rating d-inline-block">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label><strong>Feedback:</strong></label>
                    <div class="p-3 bg-light rounded">
                        Great segment on local businesses! I particularly enjoyed the interview with the bakery owner. Would love to hear more content like this.
                    </div>
                </div>
                <div class="form-group">
                    <label><strong>Response:</strong></label>
                    <textarea class="form-control" rows="3" placeholder="Enter your response to the listener..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save Response</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Export Feedback Modal -->
<div class="modal fade" id="exportFeedbackModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Export Feedback</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group mb-3">
                        <label>Date Range</label>
                        <div class="input-group">
                            <input type="date" class="form-control">
                            <span class="input-group-text">to</span>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Format</label>
                        <select class="form-select">
                            <option>CSV</option>
                            <option>Excel</option>
                            <option>PDF</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Include Fields</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Date/Time</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Listener Info</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Program</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Feedback Content</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Rating</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Export</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>