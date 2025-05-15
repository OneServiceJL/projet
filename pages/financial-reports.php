<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <!-- Header -->
        <div class="page-header">
            <div class="page-title">
                <h4>Financial Reports</h4>
                <h6>Overview of revenues, expenses, and profits by division</h6>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="card mb-3">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>From Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>To Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Division</label>
                                <select class="form-select">
                                    <option>All Divisions</option>
                                    <option>Top 5 Sai Studio</option>
                                    <option>5 Star Event</option>
                                    <option>Energy Radio</option>
                                    <option>Equipment Store</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fa fa-filter"></i> Filter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Summary Table -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Consolidated Financial Summary</h5>
                <button class="btn btn-secondary btn-sm ms-2">
                    <i class="fa fa-download"></i> Export CSV
                </button>
                <button class="btn btn-secondary btn-sm ms-2">
                    <i class="fa fa-print"></i> Print
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Division</th>
                                <th>Revenue</th>
                                <th>Expenses</th>
                                <th>Profit</th>
                                <th>Margin (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Top 5 Sai Studio</td>
                                <td>$25,000</td>
                                <td>$15,000</td>
                                <td>$10,000</td>
                                <td>40%</td>
                            </tr>
                            <tr>
                                <td>5 Star Event</td>
                                <td>$40,000</td>
                                <td>$22,000</td>
                                <td>$18,000</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Energy Radio</td>
                                <td>$15,000</td>
                                <td>$8,500</td>
                                <td>$6,500</td>
                                <td>43%</td>
                            </tr>
                            <tr>
                                <td>Equipment Store</td>
                                <td>$30,000</td>
                                <td>$18,000</td>
                                <td>$12,000</td>
                                <td>40%</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="text-end"><strong>Total</strong></td>
                                <td><strong>$110,000</strong></td>
                                <td><strong>$63,500</strong></td>
                                <td><strong>$46,500</strong></td>
                                <td><strong>42.3%</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!-- Detailed Insights -->
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-title">Detailed Notes & Insights</h5>
            </div>
            <div class="card-body">
                <textarea class="form-control" rows="5" placeholder="Add any commentary on budget variances, forecasts, or audit notes here..."></textarea>
            </div>
            
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>