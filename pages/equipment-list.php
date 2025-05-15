<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product List</h4>
                <h6>Manage your products</h6>
            </div>
            <div class="page-btn">
                <button type="button" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add New Product
                </button>
            </div>

            <!-- Add Product Modal -->
            <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addProductModalLabel">Add New Equipment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="addProductForm">
                                <div class="mb-3">
                                    <label for="equipmentId" class="form-label">Equipment ID</label>
                                    <input type="text" class="form-control" id="equipmentId" name="equipmentId" required>
                                </div>
                                <div class="mb-3">
                                    <label for="itemName" class="form-label">Item Name</label>
                                    <input type="text" class="form-control" id="itemName" name="itemName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <input type="text" class="form-control" id="category" name="category" required>
                                </div>
                                <div class="mb-3">
                                    <label for="brandModel" class="form-label">Brand/Model</label>
                                    <input type="text" class="form-control" id="brandModel" name="brandModel" required>
                                </div>
                                <div class="mb-3">
                                    <label for="condition" class="form-label">Condition</label>
                                    <select class="form-control" id="condition" name="condition" required>
                                        <option value="">Select Condition</option>
                                        <option value="New">New</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="Available">Available</option>
                                        <option value="In Use">In Use</option>
                                        <option value="Maintenance">Maintenance</option>
                                        <option value="Retired">Retired</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lastMaintenance" class="form-label">Last Maintenance</label>
                                    <input type="date" class="form-control" id="lastMaintenance" name="lastMaintenance">
                                </div>
                                <div class="mb-3">
                                    <label for="rentalValue" class="form-label">Rental Value</label>
                                    <input type="number" class="form-control" id="rentalValue" name="rentalValue" step="0.01" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Equipment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin du modal -->
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-search" id="search_icon">
                                <img src="../assets/img/icons/search.svg" alt="img">
                            </a>
                            <input type="text" class="form-control search-box" placeholder="Search">
                        </div>
                    </div>


                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Export to PDF">
                                    <img src="../assets/img/icons/pdf.svg" alt="img">
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Export to Excel">
                                    <img src="../assets/img/icons/excel.svg" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>Equipment ID</th>
                                <th>Item Name</th>
                                <th>Category</th>
                                <th>Brand/Model</th>
                                <th>Condition</th>
                                <th>Status</th>
                                <th>Location</th>
                                <th>Last Maintenance</th>
                                <th>Rental Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Audio Equipment -->
                            <tr>
                                <td>AE-1001</td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);">Full PA System</a>
                                </td>
                                <td>Audio</td>
                                <td>JBL EON712</td>
                                <td><span class="badge bg-success">Excellent</span></td>
                                <td><span class="badge bg-success">Available</span></td>
                                <td>Warehouse A</td>
                                <td>15-10-2023</td>
                                <td>$200/day</td>
                                <td>
                                    <a class="me-3" href="equipment_details.php">
                                        <img src="../assets/img/icons/eye.svg" alt="View">
                                    </a>
                                    <a class="me-3 editDetail" data-bs-toggle="modal" data-bs-target="#editDetailModal" data-id="AE-1001">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                </td>
                            </tr>

                            <!-- Lighting Equipment -->
                            <tr>
                                <td>LE-1002</td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);">LED Moving Head</a>
                                </td>
                                <td>Lighting</td>
                                <td>Chauvet R2X</td>
                                <td><span class="badge bg-warning">Good</span></td>
                                <td><span class="badge bg-info">Reserved</span></td>
                                <td>Main Stage</td>
                                <td>20-10-2023</td>
                                <td>$75/day</td>
                                <td>
                                    <a class="me-3" href="equipment_details.php">
                                        <img src="../assets/img/icons/eye.svg" alt="View">
                                    </a>
                                    <a class="me-3 editDetail" data-bs-toggle="modal" data-bs-target="#editDetailModal" data-id="LE-1002">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                </td>
                            </tr>

                            <!-- Wedding Equipment -->
                            <tr>
                                <td>WE-1003</td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);">Premium Wedding Package</a>
                                </td>
                                <td>Wedding</td>
                                <td>Luxury Events</td>
                                <td><span class="badge bg-success">Excellent</span></td>
                                <td><span class="badge bg-danger">Booked</span></td>
                                <td>On Event</td>
                                <td>01-11-2023</td>
                                <td>$1,200/day</td>
                                <td>
                                    <a class="me-3" href="equipment_details.php">
                                        <img src="../assets/img/icons/eye.svg" alt="View">
                                    </a>
                                    <a class="me-3 editDetail" data-bs-toggle="modal" data-bs-target="#editDetailModal" data-id="RS-1004">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                </td>
                            </tr>

                            <!-- Radio Studio Equipment -->
                            <tr>
                                <td>RS-1004</td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);">Broadcast Console</a>
                                </td>
                                <td>Radio Studio</td>
                                <td>Energy Radio Pro</td>
                                <td><span class="badge bg-success">Excellent</span></td>
                                <td><span class="badge bg-success">Available</span></td>
                                <td>Studio 3</td>
                                <td>05-11-2023</td>
                                <td>$350/day</td>
                                <td>
                                    <a class="me-3" href="equipment_details.php">
                                        <img src="../assets/img/icons/eye.svg" alt="View">
                                    </a>
                                    <a class="me-3 editDetail" data-bs-toggle="modal" data-bs-target="#editDetailModal" data-id="RS-1004">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                </td>
                            </tr>

                            <!-- Backline Equipment -->
                            <tr>
                                <td>BE-1005</td>
                                <td class="productimgname">
                                    <a href="javascript:void(0);">Drum Kit (Full)</a>
                                </td>
                                <td>Backline</td>
                                <td>Pearl Export</td>
                                <td><span class="badge bg-warning">Good</span></td>
                                <td><span class="badge bg-warning">Maintenance</span></td>
                                <td>Service Dept</td>
                                <td>12-10-2023</td>
                                <td>$120/day</td>
                                <td>
                                    <a class="me-3" href="equipment_details.php">
                                        <img src="../assets/img/icons/eye.svg" alt="View">
                                    </a>
                                    <a class="me-3 editDetail" data-bs-toggle="modal" data-bs-target="#editDetailModal" data-id="BE-1005">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Modal -->
                    <div class="modal fade" id="editDetailModal" tabindex="-1" aria-labelledby="editDetailModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editDetailModalLabel">Edit Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="editDetailId" class="form-label">ID</label>
                                                    <input type="text" class="form-control" id="editDetailId" aria-describedby="editDetailIdHelp" readonly>
                                                    <div id="editDetailIdHelp" class="form-text">ID of the equipment</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="editDetailName" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="editDetailName" aria-describedby="editDetailNameHelp">
                                                    <div id="editDetailNameHelp" class="form-text">Name of the equipment</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="editDetailType" class="form-label">Type</label>
                                                    <input type="text" class="form-control" id="editDetailType" aria-describedby="editDetailTypeHelp">
                                                    <div id="editDetailTypeHelp" class="form-text">Type of the equipment</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="editDetailBrand" class="form-label">Brand</label>
                                                    <input type="text" class="form-control" id="editDetailBrand" aria-describedby="editDetailBrandHelp">
                                                    <div id="editDetailBrandHelp" class="form-text">Brand of the equipment</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="editDetailStatus" class="form-label">Status</label>
                                                    <select class="form-select" id="editDetailStatus" aria-label="Default select example">
                                                        <option value="Excellent">Excellent</option>
                                                        <option value="Good">Good</option>
                                                        <option value="Fair">Fair</option>
                                                        <option value="Maintenance">Maintenance</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="editDetailPrice" class="form-label">Price</label>
                                                    <input type="number" class="form-control" id="editDetailPrice" aria-describedby="editDetailPriceHelp">
                                                    <div id="editDetailPriceHelp" class="form-text">Price of the equipment per day</div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
