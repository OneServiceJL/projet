<?php include 'includes/header.php'; ?>




<div class="main-wrapper">
  <div class="header">
    <div class="header-left active">
      <a href="index.php" class="logo">
        <img src="assets/images/TOP 5 SAI logo OG.jpg" alt="" />
      </a>
      <a href="index.php" class="logo-small">
        <img src="assets/images/TOP 5 SAI logo OG.jpg" alt="" />
      </a>
      <a id="toggle_btn" href="javascript:void(0);"> </a>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
      <span class="bar-icon">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </a>

    <?php include 'includes/navbar.php'; ?>
  </div>

  <?php include 'includes/sidebar.php'; ?>

  <div class="page-wrapper">
    <div class="content">

      <!-- Page Header -->
      <div class="page-header">
        <div class="page-title">
          <a href="index.php" class="btn btn-primary">
            <i class="fas fa-arrow-left"></i>
            Retour
          </a>
          <h4>Dashboard</h4>
          <h6>Company Overview and Department Metrics</h6>
        </div>
      </div>

      <!-- Metrics Summary -->
      <div class="row">
        <!-- Total Agents -->
        <div class="col-md-3">
          <div class="card bg-info text-white">
            <div class="card-body">
              <h6>Total Agents</h6>
              <h3>128</h3>
              <p>Across all departments</p>
            </div>
          </div>
        </div>

        <!-- Pending Leave Requests -->
        <div class="col-md-3">
          <div class="card bg-warning text-dark">
            <div class="card-body">
              <h6>Pending Leaves</h6>
              <h3>6</h3>
              <p>Awaiting approval</p>
            </div>
          </div>
        </div>

        <!-- Active Incidents -->
        <div class="col-md-3">
          <div class="card bg-danger text-white">
            <div class="card-body">
              <h6>Open Incidents</h6>
              <h3>3</h3>
              <p>Under resolution</p>
            </div>
          </div>
        </div>

        <!-- Attendance Today -->
        <div class="col-md-3">
          <div class="card bg-success text-white">
            <div class="card-body">
              <h6>Attendance Today</h6>
              <h3>117</h3>
              <p>Present / Total</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Department Table -->
      <div class="card mt-4">
        <div class="card-header">
          <h4 class="card-title">Department Overview</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered align-middle">
              <thead class="table-light">
                <tr>
                  <th>Department</th>
                  <th>Agents</th>
                  <th>On Leave</th>
                  <th>Attendance %</th>
                  <th>Performance Rating</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Top 5 Sai Studio</td>
                  <td>35</td>
                  <td>2</td>
                  <td>94%</td>
                  <td><span class="badge bg-success">Excellent</span></td>
                  <td><span class="badge bg-success">Operational</span></td>
                </tr>
                <tr>
                  <td>5 Star Event</td>
                  <td>25</td>
                  <td>1</td>
                  <td>92%</td>
                  <td><span class="badge bg-warning text-dark">Good</span></td>
                  <td><span class="badge bg-success">Operational</span></td>
                </tr>
                <tr>
                  <td>Energy Radio</td>
                  <td>38</td>
                  <td>3</td>
                  <td>89%</td>
                  <td><span class="badge bg-info text-dark">Average</span></td>
                  <td><span class="badge bg-warning text-dark">Monitoring</span></td>
                </tr>
                <tr>
                  <td>Store Management</td>
                  <td>30</td>
                  <td>0</td>
                  <td>98%</td>
                  <td><span class="badge bg-success">Excellent</span></td>
                  <td><span class="badge bg-success">Operational</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <div class="content">
      <div class="card mb-0">
        <div class="card-body">
          <h5 class="card-title">Music Equipment Inventory</h5>
          <div class="table-responsive dataview">
            <table class="table datatable">
              <thead>
                <tr>
                  <th>Asset ID</th>
                  <th>Equipment</th>
                  <th>Category</th>
                  <th>Brand/Model</th>
                  <th>Serial No.</th>
                  <th>Condition</th>
                  <th>Status</th>
                  <th>Last Maintenance</th>
                  <th>Location</th>
                  <th>Rental Rate</th>
                </tr>
              </thead>
              <tbody>
                <!-- PA System -->
                <tr>
                  <td>ME-1001</td>
                  <td class="productimgname">
                    <a href="equipment-details.html">PA System (Full)</a>
                  </td>
                  <td>Sound System</td>
                  <td>JBL EON712</td>
                  <td>JBL712X-54879</td>
                  <td><span class="badge bg-success">Excellent</span></td>
                  <td><span class="badge bg-success">Available</span></td>
                  <td>15-10-2023</td>
                  <td>Warehouse A</td>
                  <td>$200/day</td>
                </tr>

                <!-- Mixing Console -->
                <tr>
                  <td>ME-1002</td>
                  <td class="productimgname">
                    
                    <a href="equipment-details.html">Mixing Console</a>
                  </td>
                  <td>Sound System</td>
                  <td>Behringer X32</td>
                  <td>X32-BH-87451</td>
                  <td><span class="badge bg-warning">Good</span></td>
                  <td><span class="badge bg-info">Reserved</span></td>
                  <td>01-11-2023</td>
                  <td>Main Stage</td>
                  <td>$150/day</td>
                </tr>

                <!-- LED Moving Head -->
                <tr>
                  <td>ME-1003</td>
                  <td class="productimgname">
                    
                    <a href="equipment-details.html">Moving Head (LED)</a>
                  </td>
                  <td>Lighting</td>
                  <td>Chauvet R2X</td>
                  <td>CH-R2X-32547</td>
                  <td><span class="badge bg-success">Excellent</span></td>
                  <td><span class="badge bg-danger">In Use</span></td>
                  <td>20-10-2023</td>
                  <td>On Tour</td>
                  <td>$75/day</td>
                </tr>

                <!-- Drum Kit -->
                <tr>
                  <td>ME-1004</td>
                  <td class="productimgname">
                   
                    <a href="equipment-details.html">Drum Kit (Full)</a>
                  </td>
                  <td>Backline</td>
                  <td>Pearl Export</td>
                  <td>PE-EX-98745</td>
                  <td><span class="badge bg-warning">Good</span></td>
                  <td><span class="badge bg-success">Available</span></td>
                  <td>05-11-2023</td>
                  <td>Rehearsal Room</td>
                  <td>$120/day</td>
                </tr>

                <!-- Wireless Mic Set -->
                <tr>
                  <td>ME-1005</td>
                  <td class="productimgname">
                    
                    <a href="equipment-details.html">Wireless Mic Set</a>
                  </td>
                  <td>Audio</td>
                  <td>Shure BLX24R</td>
                  <td>SH-BLX-54218</td>
                  <td><span class="badge bg-danger">Needs Repair</span></td>
                  <td><span class="badge bg-dark">Unavailable</span></td>
                  <td>12-09-2023</td>
                  <td>Service Dept</td>
                  <td>$50/day</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>