<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Register - Pos admin template</title>

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

                                    <form action="register_process.php" method="post" enctype="multipart/form-data">

                                        <div class="d-flex align-items-center mb-2 pb-1">
                                            <img src="assets/images/fevicon.png" class="img-fluid" width="100" alt="POS - Bootstrap Admin Template">
                                            <span class="h3 fw-bold mb-0">TOP 5 SAI</br>MANAGMENT SYSTEM</span>
                                        </div>

                                        <h5 class="fw-normal mb-2 pb-2" style="letter-spacing: 1px;">Register for an account</h5>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="text" name="username" id="form2Example17" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example17">Username</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="password" name="password" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="text" name="full_name" id="form2Example27" class="form-control form-control-sm" />
                                            <label class="form-label" for="form2Example27">Full Name</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="text" name="name" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">Name</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input type="text" name="post_name" id="form2Example27" class="form-control form-control-sm" required />
                                            <label class="form-label" for="form2Example27">Post Name</label>
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
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm btn-block" type="submit">Register</button>
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

</body>

</html>