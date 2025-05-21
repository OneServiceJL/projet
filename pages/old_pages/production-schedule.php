<?php include 'includes/header.php'; ?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Production Schedule</h4>
                <h6>Dashboard/Production Schedule</h6>
            </div>
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addScheduleModal" class="btn btn-primary">
                Add Production Schedule
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
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print">
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
                                <th>Project</th>
                                <th>Studio</th>
                                <th>Client</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Time Slot</th>
                                <th>Production Type</th>
                                <th>Team</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Album Production -->
                            <tr>
                                <td>
                                    <a href="javascript:void(0);">Midnight Album</a>
                                </td>
                                <td>Studio A</td>
                                <td>Universal Music</td>
                                <td>15-Nov-2023</td>
                                <td>20-Nov-2023</td>
                                <td>10:00 - 18:00</td>
                                <td>Album Recording</td>
                                <td>
                                    <div class="avatar-group">
                                        <span class="avatar" data-bs-toggle="tooltip" title="Producer">
                                            <img src="../assets/img/profiles/avatar-02.jpg" alt="img">
                                        </span>
                                        <span class="avatar" data-bs-toggle="tooltip" title="Engineer">
                                            <img src="../assets/img/profiles/avatar-03.jpg" alt="img">
                                        </span>
                                        <span class="avatar" data-bs-toggle="tooltip" title="Artist">
                                            <img src="../assets/img/profiles/avatar-04.jpg" alt="img">
                                        </span>
                                    </div>
                                </td>
                                <td><span class="badge bg-success">In Progress</span></td>
                                <td>
                                    <a class="me-3" href="edit-schedule.html">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                    <a class="delete-set" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="Delete">
                                    </a>
                                </td>
                            </tr>

                            <!-- Radio Show Production -->
                            <tr>
                                <td>
                                    <a href="javascript:void(0);">Morning Show</a>
                                </td>
                                <td>Energy Radio Booth</td>
                                <td>Hit FM</td>
                                <td>16-Nov-2023</td>
                                <td>16-Nov-2023</td>
                                <td>06:00 - 10:00</td>
                                <td>Live Broadcast</td>
                                <td>
                                    <div class="avatar-group">
                                        <span class="avatar" data-bs-toggle="tooltip" title="Host">
                                            <img src="../assets/img/profiles/avatar-05.jpg" alt="img">
                                        </span>
                                        <span class="avatar" data-bs-toggle="tooltip" title="Technician">
                                            <img src="../assets/img/profiles/avatar-06.jpg" alt="img">
                                        </span>
                                    </div>
                                </td>
                                <td><span class="badge bg-info">Scheduled</span></td>
                                <td>
                                    <a class="me-3" href="edit-schedule.html">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                    <a class="delete-set" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="Delete">
                                    </a>
                                </td>
                            </tr>

                            <!-- Podcast Production -->
                            <tr>
                                <td>
                                    <a href="javascript:void(0);">Tech Today</a>
                                </td>
                                <td>Podcast Suite B</td>
                                <td>Tech Talk Media</td>
                                <td>17-Nov-2023</td>
                                <td>17-Nov-2023</td>
                                <td>14:00 - 16:00</td>
                                <td>Video Podcast</td>
                                <td>
                                    <div class="avatar-group">
                                        <span class="avatar" data-bs-toggle="tooltip" title="Host">
                                            <img src="../assets/img/profiles/avatar-07.jpg" alt="img">
                                        </span>
                                        <span class="avatar" data-bs-toggle="tooltip" title="Guest">
                                            <img src="../assets/img/profiles/avatar-08.jpg" alt="img">
                                        </span>
                                    </div>
                                </td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <a class="me-3" href="edit-schedule.html">
                                        <img src="../assets/img/icons/edit.svg" alt="Edit">
                                    </a>
                                    <a class="delete-set" href="javascript:void(0);">
                                        <img src="../assets/img/icons/delete.svg" alt="Delete">
                                    </a>
                                </td>
                            </tr>

                            <!-- Band Rehearsal -->
                            <tr>
                                <td>
                                    <a href="javascript:void(0);">Tour Prep</a>
                                </td>
                                <td>Rehearsal Space 1</td>
                                <td>Midnight Band</td>
                                <td>18-Nov-2023</td>
                                <td>22-Nov-2023</td>
                                <td>19:00 - 22:00</td>
                                <td>Band Rehearsal</td>
                                <td>
                                    <div class="avatar-group">
                                        <span class="avatar" data-bs-toggle="tooltip" title="Vocalist">
                                            <img src="../assets/img/profiles/avatar-09.jpg" alt="img">
                                        </span>
                                        <span class="avatar" data-bs-toggle="tooltip" title="Guitarist">
                                            <img src="../assets/img/profiles/avatar-10.jpg" alt="img">
                                        </span>
                                        <span class="avatar" data-bs-toggle="tooltip" title="Drummer">
                                            <img src="../assets/img/profiles/avatar-11.jpg" alt="img">
                                        </span>
                                    </div>
                                </td>
                                <td><span class="badge bg-primary">Confirmed</span></td>
                                <td>
                                    <a class="me-3" href="edit-schedule.html">
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
        </div>
    </div>
</div>

<!-- Add Schedule Modal -->
<div class="modal fade" id="addScheduleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Production Schedule</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input type="text" class="form-control" placeholder="Project Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Studio</label>
                                <select class="form-control">
                                    <option>Select Studio</option>
                                    <option>Studio A</option>
                                    <option>Studio B</option>
                                    <option>Energy Radio Booth</option>
                                    <option>Podcast Suite B</option>
                                </select>
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
                                    <option>Hit FM</option>
                                    <option>Tech Talk Media</option>
                                    <option>Midnight Band</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Production Type</label>
                                <select class="form-control">
                                    <option>Select Type</option>
                                    <option>Album Recording</option>
                                    <option>Live Broadcast</option>
                                    <option>Video Podcast</option>
                                    <option>Band Rehearsal</option>
                                    <option>Voice Over</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>End Date</label>
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
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Team Members</label>
                                <form action="javascript:void(0)" method="post" class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Role</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center mt-3">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                                <div class="input-group">
                                    <select class="form-control select2" multiple="multiple">
                                        <option>John Smith (Producer)</option>
                                        <option>Sarah Johnson (Engineer)</option>
                                        <option>Mike Brown (Artist)</option>
                                        <option>Lisa Wong (Technician)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Notes</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save Schedule</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>



<?php include 'includes/footer.php'; ?>