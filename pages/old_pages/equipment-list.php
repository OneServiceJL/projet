<?php
require_once('../config/config.php');
?>

<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product List</h4>
                <h6>Manage your products</h6>
            </div>
            <div class="page-btn">
                <button type="button" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#addStoreModal">
                    <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Store
                </button>
            </div>
            <div class="page-btn">
                <button type="button" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add New Product
                </button>
            </div>

            <!-- Add Store Modal -->
            <div class="modal fade" id="addStoreModal" tabindex="-1" aria-labelledby="addStoreModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addStoreModalLabel">Add Store</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="addStoreForm" method="POST" action="">
                                <div class="mb-3">
                                    <label for="storeName" class="form-label">Store Name</label>
                                    <input type="text" class="form-control" id="storeName" name="storeName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="storeAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="storeAddress" name="storeAddress" required>
                                </div>
                                <div class="mb-3">
                                    <label for="storeContact" class="form-label">Contact Number</label>
                                    <input type="text" class="form-control" id="storeContact" name="storeContact" required>
                                </div>
                                <div class="mb-3">
                                    <label for="storePhone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="storePhone" name="storePhone" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add Store</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin du modal -->
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
                                    <label for="brandModel" class="form-label">Brand/Model</label>
                                    <input type="text" class="form-control" id="brandModel" name="brandModel" required>
                                </div>
                                <div class="mb-3">
                                    <label for="serialNumber" class="form-label">Serial Number</label>
                                    <input type="text" class="form-control" id="serialNumber" name="serialNumber" required>
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select" id="category" name="category" required>
                                        <option value="">Select Category</option>
                                        <option value="Event">Event</option>
                                        <option value="Radio">Radio</option>
                                        <option value="Studio">Studio</option>
                                        <option value="Production">Production</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="condition" class="form-label">Condition</label>
                                    <select class="form-select" id="condition" name="condition" required>
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
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="Available">Available</option>
                                        <option value="In Use">In Use</option>
                                        <option value="Maintenance">Maintenance</option>
                                        <option value="Retired">Retired</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Location</label>
                                    <select class="form-select" id="location" name="location" required>
                                        <option value="">Select Location</option>
                                        <?php
                                        $stmt = $conn->prepare("SELECT store_name FROM stores");
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row['store_name'] . "'>" . $row['store_name'] . "</option>";
                                        }
                                        ?>
                                    </select>
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
                            <?php
                            
                            $query = "SELECT * FROM equipment ORDER BY id DESC";
                            $result = $conn->query($query);
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['equipment_id']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['item_name']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['brand_model']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['serial_number']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['category']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['equipment_condition']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['location']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['last_maintenance']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['rental_value']) . "</td>";
                                echo "</tr>";
                            }
                            ?>
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

<script>
    $('#addProductForm').on('submit', function(e) {
        e.preventDefault();
        var equipmentId = $('#equipmentId').val();
        var itemName = $('#itemName').val();
        var brandModel = $('#brandModel').val();
        var serialNumber = $('#serialNumber').val();
        var category = $('#category').val();
        var condition = $('#condition').val();
        var status = $('#status').val();
        var location = $('#location').val();
        var lastMaintenance = $('#lastMaintenance').val();
        var rentalValue = $('#rentalValue').val();

        $.ajax({
            url: '../process/addEquipment.php',
            type: 'POST',
            data: {
                equipmentId: equipmentId,
                itemName: itemName,
                brandModel: brandModel,
                serialNumber: serialNumber,
                category: category,
                condition: condition,
                status: status,
                location: location,
                lastMaintenance: lastMaintenance,
                rentalValue: rentalValue
            },
            success: function(response) {
                if (response == 'success') {
                    alert('Equipment added successfully');
                    location.reload();
                } else {
                    alert('Failed to add equipment');
                }
            }
        });
    });

    $('#addStoreForm').on('submit', function(e) {
        e.preventDefault();
        var storeName = $('#storeName').val();
        var storeAddress = $('#storeAddress').val();
        var storeContact = $('#storeContact').val();
        var storePhone = $('#storePhone').val();
        var storeLocation = $('#storeLocation').val();

        $.ajax({
            url: '../process/addStore.php',
            type: 'POST',
            data: {
                storeName: storeName,
                storeAddress: storeAddress,
                storeContact: storeContact,
                storePhone: storePhone,
                storeLocation: storeLocation
            },
            success: function(response) {
                if (response == 'success') {
                    alert('Store added successfully');
                    location.reload();
                } else {
                    alert('Failed to add store');
                }
            }
        });
    });



</script>

<?php include 'includes/footer.php'; ?>