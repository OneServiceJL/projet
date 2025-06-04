<?php
 include 'db_connect.php'; 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Daily Radio Program Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">
<div class="container">
  <h2 class="mb-4 text-center">📋 Daily Radio Program Report</h2>
  <form method="POST" action="submit_report.php" class="card p-4 shadow">

    <!-- A. Program Info -->
    <h5 class="mb-3">Program Info</h5>
    <div class="row mb-3">
      <div class="col-md-6">
        <label class="form-label">Date</label>
        <input type="date" name="date" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">Station Name</label>
        <input type="text" name="station_name" class="form-control" required>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label class="form-label">Program Name</label>
        <input type="text" name="program_name" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">Host / Presenter</label>
        <input type="text" name="host" class="form-control" required>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label class="form-label">Start Time</label>
        <input type="time" name="start_time" class="form-control" placeholder="Enter start_time" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">End time</label>
        <input type="time" name="time_end" class="form-control" placeholder="Enter end_time" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">Category</label>
        <select name="category" class="form-select" required>
          <option value="">-- Select --</option>
          <option>Entertainment/Culture/Music Program</option>
          <option>Educative Programs</option>
          <option>News/Announcements Program</option>
          <option>Sport Programs</option>
          <option>Theatre/Drama</option>
          <option>Special Talk Show</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
        <label class="form-label">Co-Host</label>
        <input type="text" name="Co-Host" class="form-control" >
      </div>
    

    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" class="form-control" rows="2"></textarea>
    </div>

    <!-- B. Performance -->
   
    
      <div class="col-md-6">
        <label class="form-label">Duration</label>
        <input type="text" name="duration" class="form-control" placeholder="e.g. 2 hours">
      </div>
  

    <!-- D. Admin -->
    <h5 class="mt-4 mb-3">Administrative</h5>
    <div class="mb-3">
      <label class="form-label">Prepared By</label>
      <input type="text" name="prepared_by" class="form-control" required>
    </div>

    <div class="mb-3 text-center">
      <button type="submit" class="btn btn-primary">Submit Report</button>
    </div>
  </form>
</div>
</body>
</html>
