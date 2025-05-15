<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Equipment Used</h4>
                <h6>Track and manage equipment usage</h6>
            </div>
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addEquipmentModal" class="btn btn-primary">
                <img src="../assets/img/icons/plus.svg" alt="img" class="me-2">Add Equipment
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-input">
                            <a class="btn btn-searchset">
                                <img src="../assets/img/icons/search-white.svg" alt="img">
                            </a>
                            
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf">
                                    <img src="../assets/img/icons/pdf.svg" alt="img">
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel">
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
                                <th>Equipment Name</th>
                                <th>Category</th>
                                <th>Current Location</th>
                                <th>Last Used</th>
                                <th>Status</th>
                                <th>Maintenance Due</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Audio Equipment -->
                            <tr>
                                <td>AE-1001</td>
                                <td>JBL EON712 PA System</td>
                                <td>Audio</td>
                                <td>Studio A</td>
                                <td>15-Nov-2023</td>
                                <td><span class="badge bg-success">Available</span></td>
                                <td>15-Dec-2023</td>
                                <td>
                                    <a class="me-3" href="edit-equipment.html">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="Delete">
                                    </a>
                                </td>
                            </tr>

                            <!-- Microphone -->
                            <tr>
                                <td>AE-1002</td>
                                <td>Shure SM7B Vocal Microphone</td>
                                <td>Audio</td>
                                <td>Booth 2</td>
                                <td>16-Nov-2023</td>
                                <td><span class="badge bg-info">In Use</span></td>
                                <td>20-Jan-2024</td>
                                <td>
                                    <a class="me-3" href="edit-equipment.html">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="Delete">
                                    </a>
                                </td>
                            </tr>

                            <!-- Mixing Console -->
                            <tr>
                                <td>AE-1003</td>
                                <td>Behringer X32 Digital Mixer</td>
                                <td>Audio</td>
                                <td>Control Room</td>
                                <td>17-Nov-2023</td>
                                <td><span class="badge bg-success">Available</span></td>
                                <td>10-Dec-2023</td>
                                <td>
                                    <a class="me-3" href="edit-equipment.html">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="Delete">
                                    </a>
                                </td>
                            </tr>

                            <!-- Lighting Equipment -->
                            <tr>
                                <td>LE-2001</td>
                                <td>Chauvet R2X Wash Moving Head</td>
                                <td>Lighting</td>
                                <td>Warehouse B</td>
                                <td>10-Nov-2023</td>
                                <td><span class="badge bg-warning">Maintenance</span></td>
                                <td>25-Nov-2023</td>
                                <td>
                                    <a class="me-3" href="edit-equipment.html">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="Delete">
                                    </a>
                                </td>
                            </tr>

                            <!-- Stands -->
                            <tr>
                                <td>AC-3001</td>
                                <td>K&M Tripod Boom Microphone Stand</td>
                                <td>Accessory</td>
                                <td>Studio B</td>
                                <td>18-Nov-2023</td>
                                <td><span class="badge bg-success">Available</span></td>
                                <td>15-Feb-2024</td>
                                <td>
                                    <a class="me-3" href="edit-equipment.html">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="Delete">
                                    </a>
                                </td>
                            </tr>

                            <!-- Cables -->
                            <tr>
                                <td>AC-3002</td>
                                <td>Mogami Gold XLR Cable (10ft)</td>
                                <td>Accessory</td>
                                <td>Storage Room</td>
                                <td>14-Nov-2023</td>
                                <td><span class="badge bg-success">Available</span></td>
                                <td>01-Mar-2024</td>
                                <td>
                                    <a class="me-3" href="edit-equipment.html">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="Delete">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Equipment Modal -->
<div class="modal fade" id="addEquipmentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Equipment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Equipment Name</label>
                                <input type="text" class="form-control" placeholder="Enter equipment name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control">
                                    <option>Audio</option>
                                    <option>Lighting</option>
                                    <option>Video</option>
                                    <option>Accessory</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Location</label>
                                <select class="form-control">
                                    <option>Studio A</option>
                                    <option>Studio B</option>
                                    <option>Control Room</option>
                                    <option>Warehouse A</option>
                                    <option>Warehouse B</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control">
                                    <option>Available</option>
                                    <option>In Use</option>
                                    <option>Maintenance</option>
                                    <option>Retired</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Maintenance Due Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Purchase Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Any special notes..."></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save Equipment</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>



<?php include 'includes/footer.php'; ?>