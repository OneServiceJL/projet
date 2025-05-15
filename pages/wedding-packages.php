<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Wedding Packages</h4>
                <h6>Manage and create wedding packages</h6>
            </div>
        </div>

        <!-- Add Wedding Package Form -->
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Package Name</label>
                                <input type="text" class="form-control" placeholder="e.g. Silver, Gold, Deluxe">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Base Price</label>
                                <input type="number" class="form-control" placeholder="e.g. 1500">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Duration (hours)</label>
                                <input type="number" class="form-control" placeholder="e.g. 6">
                            </div>
                        </div>
                    </div>

                    <!-- Services Section -->
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Included Services</label>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Services</h5>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addServiceModal">
                                        <i class="fa fa-plus"></i> Add Service
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Service</th>
                                                    <th>Category</th>
                                                    <th>Description</th>
                                                    <th>Cost</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Live DJ</td>
                                                    <td>Music</td>
                                                    <td>4 hours performance</td>
                                                    <td>$300.00</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="text-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Floral Decoration</td>
                                                    <td>Decoration</td>
                                                    <td>Full venue floral arrangement</td>
                                                    <td>$500.00</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="text-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3" class="text-end"><strong>Package Total:</strong></td>
                                                    <td colspan="2"><strong>$800.00</strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="row">
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-primary me-2">Save Package</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- List of Existing Packages -->
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="card-title">Existing Wedding Packages</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Package Name</th>
                                <th>Duration</th>
                                <th>Base Price</th>
                                <th>Services Included</th>
                                <th>Total Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Gold</td>
                                <td>6 hrs</td>
                                <td>$1,200</td>
                                <td>DJ, Floral, Catering</td>
                                <td>$1,800</td>
                                <td>
                                    <a href="#" class="me-2 text-primary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Deluxe</td>
                                <td>8 hrs</td>
                                <td>$2,000</td>
                                <td>Full Service</td>
                                <td>$2,800</td>
                                <td>
                                    <a href="#" class="me-2 text-primary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Service Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Service to Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Service</label>
                            <input type="text" class="form-control" placeholder="e.g. Live DJ">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control">
                                <option>Music</option>
                                <option>Lighting</option>
                                <option>Food</option>
                                <option>Entertainment</option>
                                <option>Decoration</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" placeholder="Detailed description of the service"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Cost</label>
                            <input type="number" class="form-control" placeholder="e.g. 300">
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <button type="submit" class="btn btn-primary">Add Service</button>
                    </div>
                </div>
                </form>
            </div>
            
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Service</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>Stage Lighting</td>
                                <td>Lighting</td>
                                <td>Colorful spotlight and ambient effects</td>
                                <td>$250</td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>Catering</td>
                                <td>Food</td>
                                <td>Buffet for 100 guests</td>
                                <td>$700</td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>Photo Booth</td>
                                <td>Entertainment</td>
                                <td>Interactive wedding-themed booth</td>
                                <td>$150</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add Selected</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>