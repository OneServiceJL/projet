
<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Invoice #1645</h4>
                <h6>Issued: May 10, 2025</h6>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#additem" onclick="document.getElementById('itemCode').focus()">
                        <i class="fa fa-plus"></i> Add Item
                    </button>

                    <!-- Add Item Modal -->
                    <div class="modal fade" id="additem" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Item</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Item Code</label>
                                            <input type="text" class="form-control" id="itemCode" placeholder="Item Code">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Item Description</label>
                                            <input type="text" class="form-control" id="itemDescription" placeholder="Item Description">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Qty</label>
                                            <input type="number" class="form-control" id="itemQty" placeholder="Qty">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tax (%)</label>
                                            <input type="number" class="form-control" id="itemTax" placeholder="Tax (%)">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Unit Price</label>
                                            <input type="number" class="form-control" id="itemUnitPrice" placeholder="Unit Price">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Total Price</label>
                                            <input type="number" class="form-control" id="itemTotalPrice" placeholder="Total Price" readonly>
                                        </div>
                                        <script>
                                            const qty = document.getElementById('itemQty');
                                            const unitPrice = document.getElementById('itemUnitPrice');
                                            const totalPrice = document.getElementById('itemTotalPrice');

                                            qty.addEventListener('input', calculateTotalPrice);
                                            unitPrice.addEventListener('input', calculateTotalPrice);

                                            function calculateTotalPrice() {
                                                totalPrice.value = parseInt(qty.value) * parseFloat(unitPrice.value);
                                            }
                                        </script>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" onclick="addItemToInvoice()">Save</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-btn">
                <button class="btn btn-primary" onclick="window.print()">
                    <i class="fa fa-print"></i> Print Invoice
                </button>
                <button class="btn btn-success ms-2">
                    <i class="fa fa-envelope"></i> Email Invoice
                </button>
            </div>
        </div>




        <!-- Invoice Content -->
        <div class="card invoice-card">
            <div class="card-body">
                <div class="invoice-header">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="invoice-logo">
                                <h3>TOP 5 SAI LTD</h3>
                                <p>KIGALI-MUSANZE-RWANDA</p>
                                <p>TEL: +250788698123</p>
                                <p>EMAIL: top5saimanagement@gmail.com</p>
                                <p>TIN: 103413892</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-end">
                            <h4>INVOICE TO</h4>
                            <p>TIN: 782954256</p>
                            <p>Name: MUKANDOTIVE Julienne</p>
                        </div>
                    </div>
                </div>

                <div class="invoice-meta mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>INVOICE N°:</strong> 1645</p>
                        </div>
                        <div class="col-md-6 text-end">
                            <p><strong>Date:</strong> 10/05/2025</p>
                        </div>
                    </div>
                </div>

                <div class="invoice-table mt-4">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Item Code</th>
                                    <th>Item Description</th>
                                    <th>Qty</th>
                                    <th>Tax</th>
                                    <th>Unit Price</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RM3NTXN0X0000002</td>
                                    <td>Announcement AND press release</td>
                                    <td>1</td>
                                    <td>B</td>
                                    <td>5,900.00</td>
                                    <td>5,900.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="invoice-divider mt-4 mb-4">
                    <hr>
                    <div class="divider-text">SDC INFORMATION</div>
                    <hr>
                </div>
                <div class="invoice-totals mt-4">
                    <div class="row justify-content-end">
                        <div class="col-md-4">
                            <table class="table table-bordered">
                                <tr>
                                    <td><strong>Total Rwf</strong></td>
                                    <td>5,900.00</td>
                                </tr>
                                <tr>
                                    <td><strong>Total A-EX Rwf</strong></td>
                                    <td>0.00</td>
                                </tr>
                                <tr>
                                    <td><strong>Total B-18% Rwf</strong></td>
                                    <td>5,900.00</td>
                                </tr>
                                <tr>
                                    <td><strong>Total Tax B Rwf</strong></td>
                                    <td>900.00</td>
                                </tr>
                                <tr>
                                    <td><strong>Total Tax Rwf</strong></td>
                                    <td>900.00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="invoice-sdc-info">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Date:</strong> 10/05/2025 13:16:06</p>
                            <p><strong>SDC ID:</strong> SDC007007273</p>
                            <p><strong>RECEIPT NUMBER:</strong> 1623/1623 NS</p>
                            <p><strong>Internal Data:</strong> USVR-AWVG-CFOX-DBMW-ZZIC-CAUT-BU</p>
                            <p><strong>Receipt Signature:</strong> DRHB-ZWQ3-ZVSI-3LQ3</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>RECEIPT NUMBER:</strong> 1645</p>
                            <p><strong>Date:</strong> 10/05/2025 13:16:06</p>
                            <p><strong>MRC:</strong> WIS01007063</p>
                        </div>
                    </div>
                </div>

                <div class="invoice-footer mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Payment Terms:</strong> Due upon receipt</p>
                            <p><strong>Bank Details:</strong></p>
                            <p>Bank of Kigali</p>
                            <p>Account Name: ENERGY RADIO</p>
                            <p>Account Number: 00040-06935933-07</p>
                        </div>
                        <div class="col-md-6 text-end">
                            <div class="signature-box">
                                <p>Authorized Signature</p>
                                <div class="signature-line"></div>
                                <p>ENERGY RADIO Management</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .invoice-card {
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .invoice-header {
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }
    .invoice-logo h3 {
        color: #2b2b2b;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .invoice-divider {
        position: relative;
        text-align: center;
    }
    .divider-text {
        position: absolute;
        top: -10px;
        left: 50%;
        transform: translateX(-50%);
        background: #fff;
        padding: 0 15px;
        font-weight: bold;
        color: #555;
    }
    .invoice-sdc-info {
        background: #f9f9f9;
        padding: 15px;
        border-radius: 5px;
    }
    .signature-box {
        margin-top: 50px;
        display: inline-block;
        text-align: center;
    }
    .signature-line {
        width: 200px;
        height: 1px;
        background: #000;
        margin: 10px auto;
    }
    @media print {
        .page-header, .page-btn {
            display: none;
        }
        .invoice-card {
            border: none;
            box-shadow: none;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>
