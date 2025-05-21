<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Equipment Rentals</h4>
                <h6>Create a new rental order</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Client</label>
                                <div class="input-group">
                                    <select class="form-select">
                                        <option>Select Client</option>
                                        <option>John Smith</option>
                                        <option>ABC Corporation</option>
                                        <option>XYZ Events</option>
                                    </select>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addClientModal">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Rental Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Return Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>

                    <!-- Equipment Section -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Rental Equipment</h5>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addEquipmentModal">
                                        <i class="fa fa-plus"></i> Add Equipment
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Equipment</th>
                                                    <th>Category</th>
                                                    <th>Quantity</th>
                                                    <th>Rate/Day</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Shure SM58 Microphone</td>
                                                    <td>Sound Equipment</td>
                                                    <td>
                                                        <input type="number" class="form-control" value="3" min="1">
                                                    </td>
                                                    <td>$25.00</td>
                                                    <td>$75.00</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="text-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>LED Moving Head Light</td>
                                                    <td>Lighting</td>
                                                    <td>
                                                        <input type="number" class="form-control" value="2" min="1">
                                                    </td>
                                                    <td>$60.00</td>
                                                    <td>$120.00</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="text-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4" class="text-end"><strong>Subtotal:</strong></td>
                                                    <td colspan="2"><strong>$195.00</strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notes & Submit -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Additional Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Special instructions, delivery requirements, etc."></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-primary me-2">Save Rental</button>
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add Client Modal (reuse the same as from booking page) -->
<div class="modal fade" id="addClientModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Client form fields would appear here...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save Client</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Add Equipment Modal -->
<div class="modal fade" id="addEquipmentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Equipment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Equipment</th>
                                <th>Category</th>
                                <th>Available</th>
                                <th>Rate/Day</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>Wireless Microphone</td>
                                <td>Sound Equipment</td>
                                <td><span class="badge bg-success">10 Available</span></td>
                                <td>$30.00</td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>LED Video Wall</td>
                                <td>Visual Equipment</td>
                                <td><span class="badge bg-success">2 Available</span></td>
                                <td>$400.00</td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>Fog Machine</td>
                                <td>Special Effects</td>
                                <td><span class="badge bg-success">4 Available</span></td>
                                <td>$50.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add Selected Equipment</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>