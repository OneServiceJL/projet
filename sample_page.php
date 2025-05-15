<div class="page-wrapper">
    <div class="content">
        <div class="row">


            <!-- Active Clients -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count">
                    <div class="dash-counts">
                        <h4>42</h4>
                        <h5>Active Clients</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="users"></i>
                    </div>
                </div>
            </div>

            <!-- Available Studios -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das1">
                    <div class="dash-counts">
                        <h4>3</h4>
                        <h5>Available Studios</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="mic"></i>
                    </div>
                </div>
            </div>

            <!-- Completed Sessions -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das2">
                    <div class="dash-counts">
                        <h4>68</h4>
                        <h5>Completed Sessions</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="check-circle"></i>
                    </div>
                </div>
            </div>

            <!-- Pending Invoices -->
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das3">
                    <div class="dash-counts">
                        <h4>7</h4>
                        <h5>Pending Invoices</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="dollar-sign"></i>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#invoiceInputModal">
            <i class="fa fa-file-invoice"></i> Create TOP 5 SAI Invoice
        </button>

        <!-- Add this modal to your existing page -->
        <div class="modal fade" id="invoiceInputModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">TOP 5 SAI Ltd - Invoice Creation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="top5saiInvoiceForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Invoice Number</label>
                                        <input type="text" class="form-control" value="INV-<?php echo strtoupper(uniqid()); ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Invoice Date</label>
                                        <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Client</label>
                                        <select class="form-select" disabled>
                                            <option selected>TOP 5 SAI Ltd Company</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Billing Period</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" placeholder="Start date">
                                            <span class="input-group-text">to</span>
                                            <input type="date" class="form-control" placeholder="End date">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label>Contract Reference</label>
                                <select class="form-select">
                                    <option>Select Contract</option>
                                    <option>SAI-2023-001 - Prime Time Package</option>
                                    <option>SAI-2023-002 - Weekend Special</option>
                                    <option>SAI-2023-003 - Morning Drive Package</option>
                                </select>
                            </div>

                            <hr>
                            <h6 class="mb-3">Ad Spots Details</h6>

                            <div class="table-responsive mb-3">
                                <table class="table table-bordered" id="adSpotsTable">
                                    <thead>
                                        <tr>
                                            <th width="20%">Date Aired</th>
                                            <th width="25%">Program/Time Slot</th>
                                            <th width="20%">Ad Title</th>
                                            <th width="15%">Duration</th>
                                            <th width="20%">Amount ($)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="date" class="form-control" value="2023-06-15"></td>
                                            <td>
                                                <select class="form-select">
                                                    <option>Morning Show (08:00-10:00)</option>
                                                    <option>Afternoon Drive (15:00-18:00)</option>
                                                    <option>Evening Jazz (20:00-22:00)</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" value="SAI Tech Solutions"></td>
                                            <td><input type="text" class="form-control" value="30 sec"></td>
                                            <td><input type="number" class="form-control" value="250"></td>
                                        </tr>
                                        <!-- Additional rows will be added dynamically -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" class="text-end"><strong>Subtotal:</strong></td>
                                            <td>$<span id="subtotalAmount">250</span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-end"><strong>VAT (15%):</strong></td>
                                            <td>$<span id="vatAmount">37.50</span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-end"><strong>Total Amount:</strong></td>
                                            <td>$<span id="totalAmount">287.50</span></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <button type="button" class="btn btn-sm btn-outline-primary" id="addAdSpotRow">
                                    <i class="fa fa-plus"></i> Add Ad Spot
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-danger" id="clearAdSpots">
                                    <i class="fa fa-trash"></i> Clear All
                                </button>
                            </div>

                            <div class="form-group mb-3">
                                <label>Special Notes</label>
                                <textarea class="form-control" rows="2" placeholder="Any special instructions or notes for this invoice..."></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label>Payment Terms</label>
                                <select class="form-select">
                                    <option>Net 15 Days</option>
                                    <option selected>Net 30 Days</option>
                                    <option>Due on Receipt</option>
                                    <option>50% Advance, 50% on Completion</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="saveDraftInvoice">
                            <i class="fa fa-save"></i> Save Draft
                        </button>
                        <button type="button" class="btn btn-success" id="generateInvoice">
                            <i class="fa fa-file-invoice"></i> Generate Invoice
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            #adSpotsTable input,
            #adSpotsTable select {
                min-width: 100px;
                border: 1px solid #dee2e6;
            }

            #adSpotsTable tfoot td {
                font-weight: bold;
                background-color: #f8f9fa;
            }
        </style>

        <script>
            $(document).ready(function() {
                // Initialize the modal
                $('#invoiceInputModal').on('shown.bs.modal', function() {
                    calculateTotals();
                });

                // Add new ad spot row
                $('#addAdSpotRow').click(function() {
                    var newRow = `
        <tr>
            <td><input type="date" class="form-control" value="${new Date().toISOString().split('T')[0]}"></td>
            <td>
                <select class="form-select">
                    <option>Morning Show (08:00-10:00)</option>
                    <option>Afternoon Drive (15:00-18:00)</option>
                    <option>Evening Jazz (20:00-22:00)</option>
                </select>
            </td>
            <td><input type="text" class="form-control" placeholder="Ad Title"></td>
            <td><input type="text" class="form-control" placeholder="Duration"></td>
            <td><input type="number" class="form-control amount-input" placeholder="Amount" value="0"></td>
        </tr>`;
                    $('#adSpotsTable tbody').append(newRow);
                });

                // Clear all ad spots
                $('#clearAdSpots').click(function() {
                    if (confirm('Are you sure you want to clear all ad spots?')) {
                        $('#adSpotsTable tbody').html(`
                <tr>
                    <td><input type="date" class="form-control" value="${new Date().toISOString().split('T')[0]}"></td>
                    <td>
                        <select class="form-select">
                            <option>Morning Show (08:00-10:00)</option>
                            <option>Afternoon Drive (15:00-18:00)</option>
                            <option>Evening Jazz (20:00-22:00)</option>
                        </select>
                    </td>
                    <td><input type="text" class="form-control" placeholder="Ad Title"></td>
                    <td><input type="text" class="form-control" placeholder="Duration"></td>
                    <td><input type="number" class="form-control amount-input" placeholder="Amount" value="0"></td>
                </tr>
            `);
                        calculateTotals();
                    }
                });

                // Calculate totals when amount inputs change
                $(document).on('input', '.amount-input', function() {
                    calculateTotals();
                });

                // Calculate invoice totals
                function calculateTotals() {
                    let subtotal = 0;
                    $('.amount-input').each(function() {
                        subtotal += parseFloat($(this).val()) || 0;
                    });

                    const vatRate = 0.15; // 15% VAT
                    const vat = subtotal * vatRate;
                    const total = subtotal + vat;

                    $('#subtotalAmount').text(subtotal.toFixed(2));
                    $('#vatAmount').text(vat.toFixed(2));
                    $('#totalAmount').text(total.toFixed(2));
                }

                // Save draft invoice
                $('#saveDraftInvoice').click(function() {
                    // Here you would add AJAX call to save the draft
                    alert('Draft invoice saved successfully!');
                });

                // Generate final invoice
                $('#generateInvoice').click(function() {
                    if (confirm('Generate final invoice for TOP 5 SAI Ltd?')) {
                        // Here you would add AJAX call to generate the invoice
                        alert('Invoice generated successfully!');
                        $('#invoiceInputModal').modal('hide');
                    }
                });
            });
        </script>

    </div>
</div>