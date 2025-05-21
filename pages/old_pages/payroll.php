<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Payroll Management</h4>
                <h6>Track employee payments and generate payslips</h6>
            </div>
        </div>

        <!-- Payroll Filter -->
        <div class="card mb-3">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Pay Period</label>
                                <input type="month" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Employee</label>
                                <select class="form-select">
                                    <option>All Employees</option>
                                    <option>John Doe</option>
                                    <option>Jane Smith</option>
                                    <option>Ali Musa</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fa fa-search"></i> Filter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Payroll Table -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Payroll Records</h5>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addPayrollModal">
                    <i class="fa fa-plus"></i> Add Payroll Entry
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Employee</th>
                                <th>Pay Period</th>
                                <th>Worked Days</th>
                                <th>Daily Rate</th>
                                <th>Gross Pay</th>
                                <th>Deductions</th>
                                <th>Net Pay</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>2025-05</td>
                                <td>22</td>
                                <td>$40</td>
                                <td>$880</td>
                                <td>$80</td>
                                <td>$800</td>
                                <td><span class="badge bg-success">Paid</span></td>
                                <td><a href="#" class="text-danger"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>2025-05</td>
                                <td>20</td>
                                <td>$45</td>
                                <td>$900</td>
                                <td>$100</td>
                                <td>$800</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td><a href="#" class="text-danger"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" class="text-end"><strong>Total Net Pay:</strong></td>
                                <td colspan="3"><strong>$1600</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Payroll Modal -->
<div class="modal fade" id="addPayrollModal" tabindex="-1" aria-labelledby="addPayrollLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title">Add Payroll Entry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Employee</label>
                                <select class="form-select">
                                    <option>Select Employee</option>
                                    <option>John Doe</option>
                                    <option>Jane Smith</option>
                                    <option>Ali Musa</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Pay Period</label>
                                <input type="month" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Worked Days</label>
                                <input type="number" class="form-control" placeholder="e.g. 22">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Daily Rate ($)</label>
                                <input type="number" class="form-control" placeholder="e.g. 40">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Deductions ($)</label>
                                <input type="number" class="form-control" placeholder="e.g. 80">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-select">
                                    <option>Pending</option>
                                    <option>Paid</option>
                                    <option>Cancelled</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Notes</label>
                                <input type="text" class="form-control" placeholder="Optional remarks">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Payroll</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>





<?php include 'includes/footer.php'; ?>