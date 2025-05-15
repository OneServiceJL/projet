<?php include 'includes/header.php'; ?>


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Recording Sessions</h4>
                <h6>Dashboard/Recording Sessions</h6>
            </div>
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addSessionModal" class="btn btn-primary">
                <img src="../assets/img/icons/plus.svg" alt="img" class="me-2">New Session
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
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Export to PDF">
                                    <img src="../assets/img/icons/pdf.svg" alt="img">
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Export to Excel">
                                    <img src="../assets/img/icons/excel.svg" alt="img">
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Print">
                                    <img src="../assets/img/icons/printer.svg" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>Session ID</th>
                                <th>Project</th>
                                <th>Studio</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Engineer</th>
                                <th>Artist</th>
                                <th>Tracks</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Album Recording Session -->
                            <tr>
                                <td>RS-2023-001</td>
                                <td class="productimgname">
                                    Midnight Memories
                                </td>
                                <td>Studio A</td>
                                <td>15-Nov-2023</td>
                                <td>10:00 - 18:00</td>
                                <td>
                                    <div class="userimg">
                                        <span>Sarah Johnson</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="userimg">
                                        <span>Midnight Band</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-success" style="width: 75%">12/16</div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success">In Progress</span></td>
                                <td>
                                    <a class="me-3" href="session-details.html">
                                        <img src="../assets/img/icons/eye.svg" alt="View">
                                    </a>
                                    <a class="me-3" href="edit-session.html">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="Delete">
                                    </a>
                                </td>
                            </tr>

                            <!-- Vocal Recording Session -->
                            <tr>
                                <td>RS-2023-002</td>
                                <td class="productimgname">
                                    Summer Nights
                                </td>
                                <td>Studio B</td>
                                <td>16-Nov-2023</td>
                                <td>14:00 - 17:00</td>
                                <td>
                                    <div class="userimg">
                                        <span>Mike Brown</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="userimg">
                                        <span>Lisa Ray</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-warning" style="width: 25%">1/4</div>
                                    </div>
                                </td>
                                <td><span class="badge bg-info">Scheduled</span></td>
                                <td>
                                    <a class="me-3" href="session-details.html">
                                        <img src="../assets/img/icons/eye.svg" alt="View">
                                    </a>
                                    <a class="me-3" href="edit-session.html">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="Delete">
                                    </a>
                                </td>
                            </tr>

                            <!-- Mixing Session -->
                            <tr>
                                <td>RS-2023-003</td>
                                <td class="productimgname">
                                    Urban Dreams
                                </td>
                                <td>Mix Room 1</td>
                                <td>17-Nov-2023</td>
                                <td>09:00 - 13:00</td>
                                <td>
                                    <div class="userimg">
                                        <span>David Wilson</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="userimg">
                                        <span>DJ Metro</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-success" style="width: 90%">9/10</div>
                                    </div>
                                </td>
                                <td><span class="badge bg-primary">Completed</span></td>
                                <td>
                                    <a class="me-3" href="session-details.html">
                                        <img src="../assets/img/icons/eye.svg" alt="View">
                                    </a>
                                    <a class="me-3" href="edit-session.html">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="Delete">
                                    </a>
                                </td>
                            </tr>

                            <!-- Voice Over Session -->
                            <tr>
                                <td>RS-2023-004</td>
                                <td class="productimgname">
                                    Ad Campaign VO
                                </td>
                                <td>Booth 3</td>
                                <td>18-Nov-2023</td>
                                <td>11:00 - 12:30</td>
                                <td>
                                    <div class="userimg">
                                        
                                        <span>Emma Stone</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="userimg">
                                        
                                        <span>John Parker</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-danger" style="width: 0%">0/3</div>
                                    </div>
                                </td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <a class="me-3" href="session-details.html">
                                        <img src="../assets/img/icons/eye.svg" alt="View">
                                    </a>
                                    <a class="me-3" href="edit-session.html">
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

<!-- Add Session Modal -->
<div class="modal fade" id="addSessionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Recording Session</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Project</label>
                                <input type="text" class="form-control" placeholder="Enter Project Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Session Type</label>
                                <select class="form-control">
                                    <option>Recording</option>
                                    <option>Mixing</option>
                                    <option>Mastering</option>
                                    <option>Voice Over</option>
                                    <option>ADR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Studio</label>
                                <select class="form-control">
                                    <option>Studio A</option>
                                    <option>Studio B</option>
                                    <option>Mix Room 1</option>
                                    <option>Booth 3</option>
                                    <option>Live Room</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Session Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Start Time</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>End Time</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Engineer</label>
                                <select class="form-control">
                                    <option>Sarah Johnson</option>
                                    <option>Mike Brown</option>
                                    <option>David Wilson</option>
                                    <option>Emma Stone</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Artist</label>
                                <select class="form-control">
                                    <option>Midnight Band</option>
                                    <option>Lisa Ray</option>
                                    <option>DJ Metro</option>
                                    <option>John Parker</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Target Tracks</label>
                                <input type="number" class="form-control" placeholder="8">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control">
                                    <option>Scheduled</option>
                                    <option>Confirmed</option>
                                    <option>In Progress</option>
                                    <option>Completed</option>
                                    <option>Cancelled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Session Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Any special requirements..."></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save Session</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>




<?php include 'includes/footer.php'; ?>