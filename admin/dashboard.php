<?php

require('inc/essentials.php');
adminLogin(); // make sure this function is defined to check session/login

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container-fluid bg-dark text-light p-3">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="m-0">Admin Dashboard</h1>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</div>

<div class="container mt-4">
    <p>Welcome to the admin dashboard. Add your content here!</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
