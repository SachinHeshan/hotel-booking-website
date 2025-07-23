<?php
require('inc/db_config.php');
require('inc/essentials.php');

session_start();

// If already logged in, redirect
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    redirect('dashboard.php');
}

if (isset($_POST['login'])) {
    $adminName = trim($_POST['adminName']);
    $adminPassword = trim($_POST['adminPassword']);

    $query = "SELECT * FROM admin_cred WHERE admin_name = ? AND admin_pass = ?";
    $values = [$adminName, $adminPassword];

    $res = select($query, $values, "ss");

    if ($res && $res->num_rows === 1) {
        $row = mysqli_fetch_assoc($res);

        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_id'] = $row['sr_no'];

        
        header("Refresh: 2; url=dashboard.php");
        exit;
    } else {
        alert('danger', 'Invalid admin name or password!');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login Panel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    background-color: #f8f9fa;
}
.login-card {
    width: 100%;
    max-width: 400px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    background: #fff;
}
</style>
</head>
<body>

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
<div class="login-card">
    <h3 class="bg-dark text-white py-3 text-center rounded">Admin Login Panel</h3>
    <form method="post">
        <div class="mb-3">
            <label for="adminName" class="form-label">Admin Name</label>
            <input type="text" name="adminName" required class="form-control" id="adminName" placeholder="Enter admin name">
        </div>
        <div class="mb-3">
            <label for="adminPassword" class="form-label">Password</label>
            <input type="password" name="adminPassword" required class="form-control" id="adminPassword" placeholder="Enter password">
        </div>
        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
    </form>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
