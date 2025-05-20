<?php include 'includes/header.php'; ?>


<section class="page-wrapper">
    <!-- Dashboard: Event Management -->

    <div class="container-fluid mt-4">
        <!-- Quick Stats Overview -->
        <div class="row mb-4">
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title text-muted">Upcoming Events (Next 7–30 days)</h6>
                        <h2 class="mb-1">12</h2>
                        <span class="badge bg-danger">High-Priority: 3</span>
                        <p class="mt-2 mb-0 text-success">Revenue Forecast: <strong>$85,000</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title text-muted">Completed Events (This Month)</h6>
                        <h2 class="mb-1">8</h2>
                        <p class="mb-0">Client Satisfaction: <span class="text-success">94%</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title text-muted">Active Bookings</h6>
                        <p class="mb-1">Corporate: <strong>5</strong></p>
                        <p class="mb-0">Private (Weddings/Parties): <strong>7</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Calendar (Timeline View) -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Event Calendar</h5>
                        <!-- Placeholder for interactive calendar -->
                        <div id="event-calendar" style="height: 400px;">
                            <!-- Integrate FullCalendar JS or similar here -->
                            <p class="text-center text-muted">[Interactive calendar will be displayed here]</p>
                        </div>
                        <!-- Example Table View as fallback -->
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>Event Name</th>
                                        <th>Venue</th>
                                        <th>Client</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2025-05-22</td>
                                        <td>Spring Gala</td>
                                        <td>Grand Hall</td>
                                        <td>Acme Corp</td>
                                        <td><span class="badge bg-warning text-dark">Planning</span></td>
                                    </tr>
                                    <tr>
                                        <td>2025-05-25</td>
                                        <td>Wedding – Smith/Lee</td>
                                        <td>Lakeview Gardens</td>
                                        <td>Jane Smith</td>
                                        <td><span class="badge bg-success">Confirmed</span></td>
                                    </tr>
                                    <tr>
                                        <td>2025-05-28</td>
                                        <td>Summer Concert</td>
                                        <td>City Park</td>
                                        <td>LiveEvents</td>
                                        <td><span class="badge bg-info text-dark">Completed</span></td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Financial Summary -->
        <div class="row mb-4">
            <div class="col-lg-6 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Financial Summary</h5>
                        <p>Revenue This Month: <span class="fw-bold text-success">$62,000</span></p>
                        <ul class="list-group mb-2">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Concerts
                                <span class="badge bg-primary rounded-pill">$28,000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Corporate Events
                                <span class="badge bg-secondary rounded-pill">$20,000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Weddings
                                <span class="badge bg-warning text-dark rounded-pill">$14,000</span>
                            </li>
                        </ul>
                        <p class="mb-0">Pending Payments: <span class="fw-bold text-danger">$12,500</span></p>
                    </div>
                </div>
            </div>
            <!-- You can add charts or more financial widgets here -->
        </div>
    </div>
</section>




<?php include 'includes/footer.php'; ?>