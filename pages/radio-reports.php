<?php include 'includes/header.php'; ?>


<style>
    .feedback-summary-card {
        padding: 20px;
        border-radius: 10px;
        color: white;
    }
    .feedback-summary-card.positive {
        background: linear-gradient(135deg, #28a745 0%, #5cb85c 100%);
    }
    .feedback-summary-card.neutral {
        background: linear-gradient(135deg, #ffc107 0%, #f0ad4e 100%);
    }
    .feedback-summary-card.negative {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
    }
    .feedback-summary-card .icon {
        font-size: 2.5rem;
        opacity: 0.3;
    }
</style>


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Energy Radio Performance Dashboard</h4>
                <h6>Comprehensive analytics and performance metrics</h6>
            </div>
            <div class="page-btn">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#generateReportModal">
                    <i class="fa fa-file-pdf"></i> Generate Full Report
                </button>
            </div>
        </div>

        <!-- Date Range Selector -->
        <div class="card mb-4">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d', strtotime('-7 days')); ?>">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <label>Time Period</label>
                                <select class="form-select">
                                    <option>Custom Range</option>
                                    <option>Today</option>
                                    <option>Yesterday</option>
                                    <option>Last 7 Days</option>
                                    <option>Last 30 Days</option>
                                    <option>This Month</option>
                                    <option>Last Month</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex align-items-end">
                            <button class="btn btn-primary w-100" type="submit">
                                <i class="fa fa-refresh"></i> Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Key Metrics Cards -->
        <div class="row mb-4">
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Average Listeners</h6>
                                <h3 class="mb-0">24,586</h3>
                                <small class="text-success"><i class="fa fa-arrow-up"></i> 12.5% from last period</small>
                            </div>
                            <div class="bg-primary bg-opacity-10 p-3 rounded">
                                <i class="fa fa-users text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Peak Listeners</h6>
                                <h3 class="mb-0">38,742</h3>
                                <small class="text-success"><i class="fa fa-arrow-up"></i> 8.3% from last period</small>
                            </div>
                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                <i class="fa fa-chart-line text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Ad Revenue</h6>
                                <h3 class="mb-0">$28,450</h3>
                                <small class="text-success"><i class="fa fa-arrow-up"></i> 15.2% from last period</small>
                            </div>
                            <div class="bg-info bg-opacity-10 p-3 rounded">
                                <i class="fa fa-dollar-sign text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Listener Engagement</h6>
                                <h3 class="mb-0">78%</h3>
                                <small class="text-danger"><i class="fa fa-arrow-down"></i> 2.1% from last period</small>
                            </div>
                            <div class="bg-warning bg-opacity-10 p-3 rounded">
                                <i class="fa fa-heart text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Listener Trends</h5>
                        <div class="graph-sets">
                            <select class="form-select form-select-sm">
                                <option>Last 7 Days</option>
                                <option>Last 30 Days</option>
                                <option>Last 90 Days</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="listenerTrendsChart" style="height: 350px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Top Programs</h5>
                    </div>
                    <div class="card-body">
                        <div id="topProgramsChart" style="height: 350px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Demographics</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-3">Age Distribution</h6>
                                <div id="ageDistributionChart" style="height: 250px;"></div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="mb-3">Gender Distribution</h6>
                                <div id="genderDistributionChart" style="height: 250px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Advertising Performance</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Ad Campaign</th>
                                        <th>Impressions</th>
                                        <th>CTR</th>
                                        <th>Revenue</th>
                                        <th>ROI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Summer Energy Blast</td>
                                        <td>124,586</td>
                                        <td>3.2%</td>
                                        <td>$8,450</td>
                                        <td><span class="badge bg-success">42%</span></td>
                                    </tr>
                                    <tr>
                                        <td>Power Solutions</td>
                                        <td>98,342</td>
                                        <td>2.7%</td>
                                        <td>$6,120</td>
                                        <td><span class="badge bg-success">38%</span></td>
                                    </tr>
                                    <tr>
                                        <td>Eco Drive Initiative</td>
                                        <td>87,654</td>
                                        <td>1.9%</td>
                                        <td>$4,850</td>
                                        <td><span class="badge bg-warning">22%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Listener Feedback Summary -->
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="card-title">Listener Feedback Summary</h5>
            <a href="listener-feedback.php" class="btn btn-sm btn-primary">View All Feedback</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feedback-summary-card positive">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6>Positive Feedback</h6>
                                    <h3>856</h3>
                                    <small>78% of total</small>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-thumbs-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feedback-summary-card neutral">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6>Neutral Feedback</h6>
                                    <h3>142</h3>
                                    <small>13% of total</small>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-comment"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feedback-summary-card negative">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6>Negative Feedback</h6>
                                    <h3>102</h3>
                                    <small>9% of total</small>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-thumbs-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Generate Report Modal -->
<div class="modal fade" id="generateReportModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Generate Custom Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Report Type</label>
                                <select class="form-select">
                                    <option>Standard Performance Report</option>
                                    <option>Advertising Revenue Report</option>
                                    <option>Listener Demographics Report</option>
                                    <option>Program Analysis Report</option>
                                    <option>Custom Report</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Format</label>
                                <select class="form-select">
                                    <option>PDF</option>
                                    <option>Excel</option>
                                    <option>CSV</option>
                                    <option>HTML</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Date Range</label>
                        <div class="input-group">
                            <input type="date" class="form-control">
                            <span class="input-group-text">to</span>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Include Sections</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label">Listener Metrics</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label">Advertising Performance</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label">Program Ratings</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Technical Statistics</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label">Listener Feedback</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Social Media Metrics</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Email Report To</label>
                        <input type="email" class="form-control" placeholder="Enter email addresses (comma separated)">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Generate Report</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>



<script>
    // These would be replaced with actual chart initialization code
    // using your preferred charting library (Chart.js, Highcharts, etc.)
    document.addEventListener('DOMContentLoaded', function() {
        // Listener Trends Chart (placeholder)
        console.log('Initializing listener trends chart...');
        
        // Top Programs Chart (placeholder)
        console.log('Initializing top programs chart...');
        
        // Demographics Charts (placeholder)
        console.log('Initializing demographics charts...');
    });
</script>

<?php include 'includes/footer.php'; ?>

