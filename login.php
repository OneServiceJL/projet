<?php
session_start();

// Database connection
try {
    $pdo = new PDO("mysql:host=localhost;dbname=top5sai_management", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password_hash'] ?? '';  // Note: Changed from password_hash to password

    if (empty($username) || empty($password)) {
        $error = 'Username and password are required.';
    } else {
        try {
            // Get user by username only
            $stmt = $pdo->prepare('SELECT * FROM top_user WHERE username = :username LIMIT 1');
            $stmt->execute(['username' => $username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password_hash'])) {
                // Password is correct, start session
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Regenerate session ID to prevent fixation
                session_regenerate_id(true);

                header('Location: modules/index.php');
                exit;
            } else {
                $error = 'Invalid username or password.';
            }
        } catch (PDOException $e) {
            $error = 'Database error: ' . $e->getMessage();
        }
    }
}

// Redirect if already logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']) {
    header('Location: modules/index.php');
    exit;
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
    <title>TOP 5 SAI TIMS</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/Fevicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->`
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="account-page">

    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="container container-fluid mt-5 p-5">
        <div class="row">
            <section class="vh-100">
                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                            <img src="assets/images/TOP5SAI_LOGO_2.png"
                                class="img-fluid" alt="Sample image">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                            <form method="post">
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" name="u_email" id="form2Example1" class="form-control" />
                                    <label class="form-label" for="form2Example1">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" name="u_pass" id="form2Example2" class="form-control" />
                                    <label class="form-label" for="form2Example2">Password</label>
                                </div>

                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <!-- Simple link -->
                                        <a href="#!">Forgot password?</a>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <input type="submit" name="login" value="Login" class="btn btn-primary btn-block mb-4">
                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Not a member? <a href="">Register</a></p>

                                </div>
                            </form>
                            <?php
                            if (isset($_POST['login'])) {
                                $u_email =  $_POST['u_email'];
                                $u_pass =  $_POST['u_pass'];
                                $query = "select * from all_users where u_email = '$u_email' and u_pass='$u_pass'";
                                $user_obj = mysqli_query($con, $query);
                                $row = mysqli_fetch_array($user_obj);
                                $id = $row['u_id'];
                                $num_of_row = mysqli_num_rows($user_obj);

                                if ($num_of_row == 1) {
                                    $_SESSION['u_id'] = $id;
                                    echo "<script>window.open('index.php','_self');</script>";
                                } else {
                                    echo "<script>alert('Your email or passowrd is incorrect, try again...');</script>";
                                }
                            }


                            ?>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5" style="background-color: #052867">
                    <!-- Copyright -->
                    <div class="text-white mb-3 mb-md-0 align-items-center">
                        Copyrights © 2025 All Rights Reserved by TOP 5 SAI TIMS.
                    </div>
                    <!-- Copyright -->
                </div>
            </section>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/theme-script.js"></script>
    <script src="assets/js/script.js"></script>


</body>

</html>