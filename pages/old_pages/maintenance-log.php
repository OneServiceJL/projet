<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Equipment Maintenance</h4>
                <h6>Track and manage maintenance records</h6>
            </div>
            <div class="page-btn">
                <button type="button" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#addMaintenanceModal">
                    <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Maintenance
                </button>
            </div>

            <!-- Add Maintenance Modal -->
            <div class="modal fade" id="addMaintenanceModal" tabindex="-1" aria-labelledby="addMaintenanceModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="addMaintenanceForm">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addMaintenanceModalLabel">Add Maintenance Record</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="equipmentId" class="form-label">Equipment ID</label>
                                    <input type="text" class="form-control" name="equipmentId" required>
                                </div>
                                <div class="mb-3">
                                    <label for="maintenanceDate" class="form-label">Maintenance Date</label>
                                    <input type="date" class="form-control" name="maintenanceDate" required>
                                </div>
                                <div class="mb-3">
                                    <label for="performedBy" class="form-label">Performed By</label>
                                    <input type="text" class="form-control" name="performedBy" required>
                                </div>
                                <div class="mb-3">
                                    <label for="details" class="form-label">Maintenance Details</label>
                                    <textarea class="form-control" name="details" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status After Maintenance</label>
                                    <select class="form-control" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="Available">Available</option>
                                        <option value="In Use">In Use</option>
                                        <option value="Maintenance">Maintenance</option>
                                        <option value="Retired">Retired</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save Maintenance</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Add Modal -->
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
                            <li><a data-bs-toggle="tooltip" title="Export to PDF"><img src="../assets/img/icons/pdf.svg" alt="pdf"></a></li>
                            <li><a data-bs-toggle="tooltip" title="Export to Excel"><img src="../assets/img/icons/excel.svg" alt="excel"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>Equipment ID</th>
                                <th>Maintenance Date</th>
                                <th>Performed By</th>
                                <th>Details</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AE-1001</td>
                                <td>2024-12-10</td>
                                <td>John Tech</td>
                                <td>Replaced speaker cables and tested system</td>
                                <td><span class="badge bg-success">Available</span></td>
                                <td>
                                    <a class="me-3" href="maintenance_details.php"><img src="../assets/img/icons/eye.svg" alt="View"></a>
                                    <a class="me-3 editDetail" data-bs-toggle="modal" data-bs-target="#editMaintenanceModal"><img src="../assets/img/icons/edit.svg" alt="Edit"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>AE-1002</td>
                                <td>2024-11-28</td>
                                <td>Jane Doe</td>
                                <td>Performed regular cleaning and maintenance</td>
                                <td><span class="badge bg-info">In Use</span></td>
                                <td>
                                    <a class="me-3" href="maintenance_details.php"><img src="../assets/img/icons/eye.svg" alt="View"></a>
                                    <a class="me-3 editDetail" data-bs-toggle="modal" data-bs-target="#editMaintenanceModal"><img src="../assets/img/icons/edit.svg" alt="Edit"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>AE-1003</td>
                                <td>2024-10-20</td>
                                <td>Steve Smith</td>
                                <td>Replaced power supply and tested system</td>
                                <td><span class="badge bg-success">Available</span></td>
                                <td>
                                    <a class="me-3" href="maintenance_details.php"><img src="../assets/img/icons/eye.svg" alt="View"></a>
                                    <a class="me-3 editDetail" data-bs-toggle="modal" data-bs-target="#editMaintenanceModal"><img src="../assets/img/icons/edit.svg" alt="Edit"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>AE-1004</td>
                                <td>2024-09-17</td>
                                <td>John Tech</td>
                                <td>Replaced speaker drivers and tested system</td>
                                <td><span class="badge bg-info">In Use</span></td>
                                <td>
                                    <a class="me-3" href="maintenance_details.php"><img src="../assets/img/icons/eye.svg" alt="View"></a>
                                    <a class="me-3 editDetail" data-bs-toggle="modal" data-bs-target="#editMaintenanceModal"><img src="../assets/img/icons/edit.svg" alt="Edit"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>AE-1005</td>
                                <td>2024-08-15</td>
                                <td>Jane Doe</td>
                                <td>Performed regular cleaning and maintenance</td>
                                <td><span class="badge bg-success">Available</span></td>
                                <td>
                                    <a class="me-3" href="maintenance_details.php"><img src="../assets/img/icons/eye.svg" alt="View"></a>
                                    <a class="me-3 editDetail" data-bs-toggle="modal" data-bs-target="#editMaintenanceModal"><img src="../assets/img/icons/edit.svg" alt="Edit"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Edit Modal -->
                <div class="modal fade" id="editMaintenanceModal" tabindex="-1" aria-labelledby="editMaintenanceModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editMaintenanceModalLabel">Edit Maintenance Record</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Equipment ID</label>
                                        <input type="text" class="form-control" value="AE-1001" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Maintenance Date</label>
                                        <input type="date" class="form-control" value="2024-12-10">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Performed By</label>
                                        <input type="text" class="form-control" value="John Tech">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Details</label>
                                        <textarea class="form-control" rows="3">Replaced speaker cables and tested system</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="form-select">
                                            <option selected>Available</option>
                                            <option>In Use</option>
                                            <option>Maintenance</option>
                                            <option>Retired</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Edit Modal -->
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>