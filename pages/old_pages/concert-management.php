<?php include 'includes/header.php'; ?>


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Concert Management</h4>
                <h6>Organize and manage concert events</h6>
            </div>
        </div>

        <!-- Concert Event Form -->
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Concert Name</label>
                                <input type="text" class="form-control" placeholder="e.g. Summer Beats Festival">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Start Time</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" placeholder="e.g. City Stadium">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Ticket Price</label>
                                <input type="number" class="form-control" placeholder="e.g. 50">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Available Seats</label>
                                <input type="number" class="form-control" placeholder="e.g. 5000">
                            </div>
                        </div>
                    </div>

                    <!-- Assign Performers -->
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Assigned Artists/Performers</label>
                            <div class="card">
                                <div class="card-header">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#assignJournalierModal">
                                        <i class="fa fa-plus"></i> Assign Day Worker
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Artist Name</th>
                                                    <th>Genre</th>
                                                    <th>Performance Time</th>
                                                    <th>Fee</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>DJ Nova</td>
                                                    <td>EDM</td>
                                                    <td>20:00 - 21:00</td>
                                                    <td>$1,000</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Moonlight Band</td>
                                                    <td>Rock</td>
                                                    <td>21:30 - 23:00</td>
                                                    <td>$2,500</td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3" class="text-end"><strong>Total Artist Cost:</strong></td>
                                                    <td colspan="2"><strong>$3,500</strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="row">
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-primary me-2">Save Concert</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Existing Concerts Table -->
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="card-title">Scheduled Concerts</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Concert Name</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Ticket</th>
                                <th>Seats</th>
                                <th>Artists</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>City Vibes</td>
                                <td>2025-06-10</td>
                                <td>Main Arena</td>
                                <td>$45</td>
                                <td>3000</td>
                                <td>3</td>
                                <td>
                                    <a href="#" class="me-2 text-primary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Midnight Jam</td>
                                <td>2025-07-01</td>
                                <td>Open Air Park</td>
                                <td>$60</td>
                                <td>5000</td>
                                <td>5</td>
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

<!-- Assign Journalier Modal -->
<div class="modal fade" id="assignJournalierModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign Day Worker</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>               
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="dayworkername" class="form-label">Day Worker Name</label>
                        <input type="text" class="form-control" id="dayworkername" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="dayworkerphone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="dayworkerphone">
                    </div>
                    <div class="mb-3">
                        <label for="dayworkeraddress" class="form-label">Address</label>
                        <textarea class="form-control" id="dayworkeraddress" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="dayworkeravailableslot" class="form-label">Available Slot</label>
                        <input type="text" class="form-control" id="dayworkeravailableslot">
                    </div>
                    <div class="mb-3">
                        <label for="dayworkerrate" class="form-label">Rate ($/h)</label>
                        <input type="number" class="form-control" id="dayworkerrate">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Day Worker Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Available Slot</th>
                                <th>Rate ($/h)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td>Jean Pierre</td>
                                <td>514-123-4567</td>
                                <td>123 rue Ste-Catherine, Montr al, QC H2X 2H4</td>
                                <td>14h - 18h</td>
                                <td>$20</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td>Marc-Andr  L veill </td>
                                <td>514-987-6543</td>
                                <td>456 rue Sainte-Catherine O, Montr al, QC H3G 1P1</td>
                                <td>10h - 14h</td>
                                <td>$20</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td>Marie-Claude Tremblay</td>
                                <td>438-111-2222</td>
                                <td>789 rue Saint-Laurent, Montr al, QC H2Y 3Y9</td>
                                <td>8h - 12h</td>
                                <td>$20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">Add Selected</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<?php include 'includes/footer.php'; ?>