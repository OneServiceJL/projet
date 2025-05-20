<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include your database connection
    require_once 'config/config.php';

    // Get and sanitize POST data
    $name = trim($_POST['name']);
    $post_name = trim($_POST['post_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $id_number = trim($_POST['id_number']);
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $confirm_password = $_POST['password']; // If you use a different name for confirm, change this

    // Validate password match
    if ($password !== $confirm_password) {
        die('Passwords do not match.');
    }

    // Generate username
    $username = strtolower($name . '.' . $post_name);

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Handle image upload
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_folder = 'uploads/';
    if (!file_exists($image_folder)) {
        mkdir($image_folder, 0777, true);
    }
    $image_path = $image_folder . basename($image_name);
    move_uploaded_file($image_tmp, $image_path);

    // Prepare SQL
    $sql = "INSERT INTO users (username, password, name, post_name, email, phone, address, id_number, image, dob)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssssssss",
        $username,
        $hashed_password,
        $name,
        $post_name,
        $email,
        $phone,
        $address,
        $id_number,
        $image_path,
        $dob
    );

    if ($stmt->execute()) {
        echo "Registration successful!";
        // Redirect or show success message
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>TOP 5 SAI MANAGMENT SYSTEM</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fevicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <section class="vh-100" style="background-color:rgb(61, 225, 236);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-12 col-lg-12 d-flex align-items-center">
                                <div class="card-body p-2 p-lg-3 text-black">

                                    <form action="register.php" method="post" enctype="multipart/form-data">

                                        <div class="d-flex align-items-center mb-2 pb-1">
                                            <img src="assets/images/fevicon.png" class="img-fluid" width="100" alt="POS - Bootstrap Admin Template">
                                            <span class="h3 fw-bold mb-0">TOP 5 SAI</br>MANAGMENT SYSTEM</span>
                                        </div>

                                        <h5 class="fw-normal mb-2 pb-2" style="letter-spacing: 1px;">Register for an account</h5>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="text" name="name" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">Name</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="text" name="post_name" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">Post Name</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="text" id="username_display" class="form-control form-control-sm" disabled />
                                            <label class="form-label" for="username_display">Username (auto-generated)</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="password" name="password" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="password" name="password" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">Confirm Password</label>
                                        </div>


                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="email" name="email" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">Email</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="tel" name="phone" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">Phone</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="text" name="address" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">Address</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="text" name="id_number" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">ID Number</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="file" name="image" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">Upload Photo</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="date" name="dob" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">Date of Birth</label>
                                        </div>
                                        
                                        <div class="pt-1 mb-4">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm btn-block" type="submit" onclick="this.form.action='login.php';">Register</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/script.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    function updateUsername() {
        var name = document.querySelector('input[name="name"]').value.trim().toLowerCase();
        var postName = document.querySelector('input[name="post_name"]').value.trim().toLowerCase();
        var username = name && postName ? name + '.' + postName : '';
        document.getElementById('username_display').value = username;
    }
    document.querySelector('input[name="name"]').addEventListener('input', updateUsername);
    document.querySelector('input[name="post_name"]').addEventListener('input', updateUsername);
});
</script>
</body>

</html>