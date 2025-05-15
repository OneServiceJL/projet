<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Event Booking</h4>
                <h6>Create new event reservation</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Event Type</label>
                                <select class="form-select">
                                    <option>Select Event Type</option>
                                    <option>Wedding</option>
                                    <option>Corporate Event</option>
                                    <option>Concert</option>
                                    <option>Private Party</option>
                                    <option>Conference</option>
                                </select>
                            </div>
                        </div>
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
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Event Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Event Time</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Venue</label>
                                <select class="form-select">
                                    <option>Select Venue</option>
                                    <option>Grand Ballroom</option>
                                    <option>Rooftop Terrace</option>
                                    <option>Conference Hall A</option>
                                    <option>Outdoor Garden</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Estimated Guests</label>
                                <input type="number" class="form-control" placeholder="100">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Event Description</label>
                                <textarea class="form-control" rows="3" placeholder="Describe the event..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Required Instruments & Equipment</h5>
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
                                                    <th>Rate</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Yamaha Grand Piano</td>
                                                    <td>Musical Instruments</td>
                                                    <td>
                                                        <input type="number" class="form-control" value="1" min="1">
                                                    </td>
                                                    <td>$500.00</td>
                                                    <td>$500.00</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="text-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bose L1 Pro8 PA System</td>
                                                    <td>Sound Equipment</td>
                                                    <td>
                                                        <input type="number" class="form-control" value="2" min="1">
                                                    </td>
                                                    <td>$300.00</td>
                                                    <td>$600.00</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="text-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chauvet DJ Wash FX</td>
                                                    <td>Lighting</td>
                                                    <td>
                                                        <input type="number" class="form-control" value="4" min="1">
                                                    </td>
                                                    <td>$75.00</td>
                                                    <td>$300.00</td>
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
                                                    <td colspan="2"><strong>$1,400.00</strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-0">
                                <label>Additional Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Any special requirements or notes..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-primary me-2">Save Booking</button>
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add Client Modal -->
<div class="modal fade" id="addClientModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Client form content would go here -->
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
                <h5 class="modal-title">Add Equipment to Booking</h5>
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
                                <th>Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Yamaha Grand Piano</td>
                                <td>Musical Instruments</td>
                                <td><span class="badge bg-success">3 Available</span></td>
                                <td>$500.00</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Bose L1 Pro8 PA System</td>
                                <td>Sound Equipment</td>
                                <td><span class="badge bg-success">5 Available</span></td>
                                <td>$300.00</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Chauvet DJ Wash FX</td>
                                <td>Lighting</td>
                                <td><span class="badge bg-success">8 Available</span></td>
                                <td>$75.00</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>Shure SM58 Microphone</td>
                                <td>Sound Equipment</td>
                                <td><span class="badge bg-success">12 Available</span></td>
                                <td>$25.00</td>
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