<?php include 'includes/header.php'; ?>


<style>
    .nav-tabs .nav-link.active {
        font-weight: bold;
        border-bottom: 3px solid #0d6efd;
    }
    .signature-pad {
        cursor: crosshair;
    }
</style>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Cash Flow Management</h4>
                <h6>Track income deposits and fund withdrawals</h6>
            </div>
            <div class="page-btn">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newDepositModal">
                    <i class="fa fa-plus-circle"></i> New Deposit
                </button>
                <button class="btn btn-outline-primary ms-2" data-bs-toggle="modal" data-bs-target="#newWithdrawalModal">
                    <i class="fa fa-minus-circle"></i> New Withdrawal
                </button>
            </div>
        </div>

        <!-- Summary Cards -->
        <div class="row mb-4">
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Total Deposits (Month)</h6>
                                <h3 class="mb-0">4,250,000 <small>Frw</small></h3>
                                <small class="text-success"><i class="fa fa-arrow-up"></i> 12.5% from last month</small>
                            </div>
                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                <i class="fa fa-money-bill-wave text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Total Withdrawals (Month)</h6>
                                <h3 class="mb-0">2,150,000 <small>Frw</small></h3>
                                <small class="text-danger"><i class="fa fa-arrow-down"></i> 5.3% from last month</small>
                            </div>
                            <div class="bg-danger bg-opacity-10 p-3 rounded">
                                <i class="fa fa-hand-holding-usd text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Net Cash Flow</h6>
                                <h3 class="mb-0">2,100,000 <small>Frw</small></h3>
                                <small class="text-success"><i class="fa fa-arrow-up"></i> 28.7% from last month</small>
                            </div>
                            <div class="bg-primary bg-opacity-10 p-3 rounded">
                                <i class="fa fa-chart-line text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs" id="cashFlowTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="deposits-tab" data-bs-toggle="tab" data-bs-target="#deposits" type="button" role="tab">Deposits</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="withdrawals-tab" data-bs-toggle="tab" data-bs-target="#withdrawals" type="button" role="tab">Withdrawals</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="reports-tab" data-bs-toggle="tab" data-bs-target="#reports" type="button" role="tab">Reports</button>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content" id="cashFlowTabsContent">
            <!-- Deposits Tab -->
            <div class="tab-pane fade show active" id="deposits" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Deposit #</th>
                                        <th>Client Name</th>
                                        <th>Phone</th>
                                        <th>Amount (Frw)</th>
                                        <th>Date/Time</th>
                                        <th>Purpose</th>
                                        <th>Received By</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>DEP-2025-0015</td>
                                        <td>MUKANDOTIVE Julienne</td>
                                        <td>+250788123456</td>
                                        <td>5,900.00</td>
                                        <td>10/05/2025 13:16</td>
                                        <td>Advertisement payment</td>
                                        <td>KAMANA Eric</td>
                                        <td><span class="badge bg-success">Verified</span></td>
                                        <td>
                                            <a href="#" class="text-primary me-2" title="View"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="text-success me-2" title="Print"><i class="fa fa-print"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>DEP-2025-0014</td>
                                        <td>NSHIMIYIMANA Jean</td>
                                        <td>+250782987654</td>
                                        <td>15,000.00</td>
                                        <td>09/05/2025 10:45</td>
                                        <td>Event sponsorship</td>
                                        <td>UWINEZA Alice</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td>
                                            <a href="#" class="text-primary me-2" title="View"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="text-success me-2" title="Print"><i class="fa fa-print"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Withdrawals Tab -->
            <div class="tab-pane fade" id="withdrawals" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Withdrawal #</th>
                                        <th>Requested By</th>
                                        <th>Phone</th>
                                        <th>Amount (Frw)</th>
                                        <th>Date/Time</th>
                                        <th>Purpose</th>
                                        <th>Approved By</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>WD-2025-0007</td>
                                        <td>HABIMANA Pierre</td>
                                        <td>+250783456789</td>
                                        <td>750,000.00</td>
                                        <td>08/05/2025 09:30</td>
                                        <td>Equipment purchase</td>
                                        <td>MUGISHA David</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <a href="#" class="text-primary me-2" title="View"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="text-success me-2" title="Print"><i class="fa fa-print"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>WD-2025-0006</td>
                                        <td>UWERA Claudine</td>
                                        <td>+250788765432</td>
                                        <td>250,000.00</td>
                                        <td>05/05/2025 14:15</td>
                                        <td>Office supplies</td>
                                        <td>-</td>
                                        <td><span class="badge bg-danger">Rejected</span></td>
                                        <td>
                                            <a href="#" class="text-primary me-2" title="View"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="text-success me-2" title="Print"><i class="fa fa-print"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reports Tab -->
            <div class="tab-pane fade" id="reports" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Monthly Cash Flow</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="monthlyCashFlowChart" style="height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Withdrawal Purposes</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="withdrawalPurposeChart" style="height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- New Deposit Modal -->
<div class="modal fade" id="newDepositModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Cash Deposit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="depositForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Deposit Date/Time</label>
                                <input type="datetime-local" class="form-control" value="<?php echo date('Y-m-d\TH:i'); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Deposit Reference #</label>
                                <input type="text" class="form-control" value="DEP-<?php echo date('Y-m-').str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT); ?>" readonly>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Client Information</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" placeholder="Phone Number" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Deposit Details</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="number" class="form-control" placeholder="Amount (Frw)" required>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" required>
                                    <option value="">Currency</option>
                                    <option selected>Rwandan Franc (Frw)</option>
                                    <option>US Dollar ($)</option>
                                    <option>Euro (€)</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" required>
                                    <option value="">Payment Method</option>
                                    <option>Cash</option>
                                    <option>Bank Transfer</option>
                                    <option>Mobile Money</option>
                                    <option>Check</option>
                                    <option>MOMO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Received By</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['user_name'] ?? ''; ?>" readonly>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Purpose of Deposit</label>
                        <textarea class="form-control" rows="2" placeholder="Describe the purpose of this deposit..." required></textarea>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Received By</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['user_name'] ?? ''; ?>" readonly>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Client Signature</label>
                        <div class="signature-pad border rounded p-2" style="height: 100px; background: #f8f9fa;">
                            <!-- Signature pad would be implemented with JavaScript -->
                            <p class="text-muted text-center mt-4">Client will sign here on printed copy</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save Deposit</button>
                <button type="button" class="btn btn-success">Save & Print</button>
            </div>
        </div>
    </div>
</div>

<!-- New Withdrawal Modal -->
<div class="modal fade" id="newWithdrawalModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Fund Withdrawal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="withdrawalForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Withdrawal Date</label>
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Withdrawal Reference #</label>
                                <input type="text" class="form-control" value="WD-<?php echo date('Y-m-').str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT); ?>" readonly>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Requested By</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" placeholder="Phone Number" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Withdrawal Details</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="number" class="form-control" placeholder="Amount (Frw)" required>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" required>
                                    <option value="">Currency</option>
                                    <option selected>Rwandan Franc (Frw)</option>
                                    <option>US Dollar ($)</option>
                                    <option>Euro (€)</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" required>
                                    <option value="">Payment Method</option>
                                    <option>Cash</option>
                                    <option>Bank Transfer</option>
                                    <option>Check</option>
                                    <option>MOMO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Purpose of Withdrawal</label>
                        <textarea class="form-control" rows="2" placeholder="Describe why these funds are needed..." required></textarea>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Approval Workflow</label>
                        <div class="border rounded p-3 bg-light">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="cashierApproval">
                                <label class="form-check-label" for="cashierApproval">Cashier Verification</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="dafApproval">
                                <label class="form-check-label" for="dafApproval">DAF Approval</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="dceoApproval">
                                <label class="form-check-label" for="dceoApproval">DCEO Approval</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Supporting Documents</label>
                        <input type="file" class="form-control">
                        <small class="text-muted">Upload any supporting documents (quotes, invoices, etc.)</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Submit Request</button>
            </div>
        </div>
    </div>
</div>




<script>
$(document).ready(function() {
    // Initialize tabs
    $('#cashFlowTabs button').on('click', function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    
    // Initialize datepickers
    $('[type="datetime-local"]').flatpickr({
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
    
    // Sample chart initialization (would be replaced with real chart library)
    console.log('Initialize charts here with Chart.js or similar library');
});
</script>

<?php include 'includes/footer.php'; ?>