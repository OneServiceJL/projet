<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Studio Bookings</h4>
                <h6>Dashboard/Studio Bookings</h6>
            </div>
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addReservationModal" class="btn btn-primary">
                Add Reservation
            </a>
            <!-- Add Reservation Modal -->
            <div class="modal fade" id="addReservationModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Studio</label>
                                            <select class="form-control">
                                                <option>Select Studio</option>
                                                <option>Studio A</option>
                                                <option>Studio B</option>
                                                <option>Studio C</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control">
                                                <option>Select Type</option>
                                                <option>Recording</option>
                                                <option>Rehearsal</option>
                                                <option>Broadcast</option>
                                                <option>Podcast</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Booking Date</label>
                                            <input type="date" class="form-control" value="2022-02-27">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Time Slot</label>
                                            <input type="time" class="form-control" value="12:00">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Client</label>
                                            <select class="form-control">
                                                <option>Select Client</option>
                                                <option>Universal Music</option>
                                                <option>Midnight Band</option>
                                                <option>Tech Talk Media</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Session Type</label>
                                            <select class="form-control">
                                                <option>Select Session Type</option>
                                                <option>Album Session</option>
                                                <option>Single Session</option>
                                                <option>Rehearsal Session</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Rate ($)</label>
                                            <input type="number" class="form-control" value="350">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control">
                                                <option>Select Status</option>
                                                <option>Confirmed</option>
                                                <option>Reserved</option>
                                                <option>Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary ms-auto">Save Reservation</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-12 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Customer Name</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>Select Customer</option>
                                                    <option value="2">Mark Doe</option>
                                                    <option value="3">John Doe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                            <div class="add-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
                                                    <img src="../assets/img/icons/plus1.svg" alt="img"></a>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="addCustomerModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Add Customer</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Customer Name</label>
                                                                    <input type="text" class="form-control" placeholder="John Doe">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Customer Email</label>
                                                                    <input type="email" class="form-control" placeholder="john@example.com">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Customer Phone</label>
                                                                    <input type="text" class="form-control" placeholder="1234567890">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Address</label>
                                                                    <textarea class="form-control" placeholder="123 Street, City, State, Country"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save Customer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Quotation Date</label>
                                    <div class="input-groupicon">
                                        <input type="date" class="form-control" value="2022-02-27">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Reference No.</label>
                                    <input type="text" placeholder="555444">
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6 col-12">
                                <button id="scan-btn" class="addonset" style="background: none; border: none;">
                                    <img src="../assets/img/icons/scanners.svg" alt="Scan QR">
                                </button>
                                <div class="form-group">
                                    <label>Ticket</label>
                                    <div class="input-groupicon">
                                        <div id="qr-reader" style="width: 300px;"></div>
                                        <input type="text" placeholder="Scan/Search select...">
                                       
                                        <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
                                        <script>
                                            document.getElementById("scan-btn").addEventListener("click", function() {
                                                const qrReader = document.getElementById("qr-reader");
                                                qrReader.style.display = "block";

                                                const html5QrCode = new Html5Qrcode("qr-reader");

                                                html5QrCode.start({
                                                        facingMode: "environment"
                                                    }, // use rear camera
                                                    {
                                                        fps: 10,
                                                        qrbox: 250
                                                    },
                                                    qrCodeMessage => {
                                                        alert(`QR Code scanned: ${qrCodeMessage}`);
                                                        html5QrCode.stop().then(() => {
                                                            qrReader.style.display = "none";
                                                        });
                                                    },
                                                    errorMessage => {
                                                        // optional: console.log(`QR error: ${errorMessage}`);
                                                    }
                                                ).catch(err => {
                                                    alert("Unable to start QR scanner: " + err);
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Studio</th>
                                            <th>Type</th>
                                            <th>Booking Date</th>
                                            <th>Time Slot</th>
                                            <th>Client</th>
                                            <th>Session Type</th>
                                            <th>Rate ($)</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Recording Studio Booking -->
                                        <tr>
                                            <td class="productimgname">
                                                <a href="javascript:void(0);">Studio A (Premium)</a>
                                            </td>
                                            <td>Recording</td>
                                            <td>15-Nov-2023</td>
                                            <td>14:00 - 18:00</td>
                                            <td>Universal Music</td>
                                            <td>Album Session</td>
                                            <td>$350/hr</td>
                                            <td><span class="badge bg-success">Confirmed</span></td>
                                            <td>
                                                <a class="me-2" href="edit-booking.html">
                                                    <img src="../assets/img/icons/edit.svg" alt="Edit">
                                                </a>
                                                <a class="delete-set" href="javascript:void(0);">
                                                    <img src="../assets/img/icons/delete.svg" alt="Delete">
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- Radio Studio Booking -->
                                        <tr>
                                            <td class="productimgname">
                                                <a href="javascript:void(0);">Energy Radio Booth</a>
                                            </td>
                                            <td>Broadcast</td>
                                            <td>16-Nov-2023</td>
                                            <td>09:00 - 12:00</td>
                                            <td>Hit FM</td>
                                            <td>Live Show</td>
                                            <td>$250/hr</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>
                                                <a class="me-2" href="edit-booking.html">
                                                    <img src="../assets/img/icons/edit.svg" alt="Edit">
                                                </a>
                                                <a class="delete-set" href="javascript:void(0);">
                                                    <img src="../assets/img/icons/delete.svg" alt="Delete">
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- Podcast Studio Booking -->
                                        <tr>
                                            <td class="productimgname">
                                                <a href="javascript:void(0);">Podcast Suite B</a>
                                            </td>
                                            <td>Podcast</td>
                                            <td>17-Nov-2023</td>
                                            <td>10:00 - 14:00</td>
                                            <td>Tech Talk Media</td>
                                            <td>Video Podcast</td>
                                            <td>$180/hr</td>
                                            <td><span class="badge bg-info">Reserved</span></td>
                                            <td>
                                                <a class="me-2" href="edit-booking.html">
                                                    <img src="../assets/img/icons/edit.svg" alt="Edit">
                                                </a>
                                                <a class="delete-set" href="javascript:void(0);">
                                                    <img src="../assets/img/icons/delete.svg" alt="Delete">
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- Rehearsal Studio Booking -->
                                        <tr>
                                            <td class="productimgname">
                                                <a href="javascript:void(0);">Rehearsal Space 1</a>
                                            </td>
                                            <td>Rehearsal</td>
                                            <td>18-Nov-2023</td>
                                            <td>19:00 - 22:00</td>
                                            <td>Midnight Band</td>
                                            <td>Band Practice</td>
                                            <td>$120/hr</td>
                                            <td><span class="badge bg-danger">Cancelled</span></td>
                                            <td>
                                                <a class="me-2" href="edit-booking.html">
                                                    <img src="../assets/img/icons/edit.svg" alt="Edit">
                                                </a>
                                                <a class="delete-set" href="javascript:void(0);">
                                                    <img src="../assets/img/icons/delete.svg" alt="Delete">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 float-md-right">
                                <div class="total-order">
                                    <ul>
                                        <li>
                                            <h4>Order Tax</h4>
                                            <h5>$ 0.00 (0.00%)</h5>
                                        </li>
                                        <li>
                                            <h4>Discount </h4>
                                            <h5>$ 0.00</h5>
                                        </li>
                                        <li>
                                            <h4>Shipping</h4>
                                            <h5>$ 0.00</h5>
                                        </li>
                                        <li class="total">
                                            <h4>Grand Total</h4>
                                            <h5>$ 20000.00</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Order Tax</label>
                                    <input type="text" placeholder="0">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Discount</label>
                                    <input type="text" placeholder="0">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Shipping</label>
                                    <input type="text" placeholder="0">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control">
                                        <option>Choose Status</option>
                                        <option>Completed</option>
                                        <option>Inprogress</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <a class="btn btn-submit me-2">Update</a>
                                <a href="salesreturnlist.html" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?php include 'includes/footer.php'; ?>