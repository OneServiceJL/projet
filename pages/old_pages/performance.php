<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h4>Agent Performance</h4>
                <h6>Monitor and evaluate agent performance</h6>
            </div>
            <div class="page-btn">
                <a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#addPerformanceModal">
                    <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Performance Note
                </a>
            </div>
        </div>

        <!-- Performance Table -->
        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-search"><img src="../assets/img/icons/search.svg" alt="img"></a>
                            <input type="text" class="form-control search-box" placeholder="Search agent performance">
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>Agent ID</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Performance Area</th>
                                <th>Rating</th>
                                <th>Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AG003</td>
                                <td>Alice Jones</td>
                                <td>2025-05-10</td>
                                <td>Customer Service</td>
                                <td><span class="badge bg-success">Excellent</span></td>
                                <td>Handled client escalation effectively.</td>
                            </tr>
                            <tr>
                                <td>AG007</td>
                                <td>Mark Lee</td>
                                <td>2025-05-09</td>
                                <td>Punctuality</td>
                                <td><span class="badge bg-warning">Average</span></td>
                                <td>Late on 2 occasions this month.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal: Add Performance Note -->
        <div class="modal fade" id="addPerformanceModal" tabindex="-1" aria-labelledby="addPerformanceModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addPerformanceModalLabel">Add Performance Note</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Agent ID</label>
                                    <input type="text" class="form-control" name="agent_id" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Agent Name</label>
                                    <input type="text" class="form-control" name="agent_name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Performance Area</label>
                                    <select class="form-control" name="area" required>
                                        <option value="">Select Area</option>
                                        <option value="Customer Service">Customer Service</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Punctuality">Punctuality</option>
                                        <option value="Teamwork">Teamwork</option>
                                        <option value="Productivity">Productivity</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Rating</label>
                                    <select class="form-control" name="rating" required>
                                        <option value="">Select</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Good">Good</option>
                                        <option value="Average">Average</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Performance Note</label>
                                    <textarea class="form-control" name="note" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save Note</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>




<?php include 'includes/footer.php'; ?>