<?php
session_start();

if(!isset($_SESSION['admin_id'])){
header("Location: login.php");
exit;
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<nav class="navbar navbar-dark bg-dark">
<div class="container-fluid">

<span class="navbar-brand">
Super Admin Dashboard
</span>

<a href="logout.php" class="btn btn-danger">
Logout
</a>

</div>
</nav>

<div class="container mt-5">

<div class="card register-card">

<div class="card-header">
Welcome Admin
</div>

<div class="card-body">

<h4>Hello, <?php echo $_SESSION['username']; ?></h4>

<p>Admin Control Panel</p>

<ul>

<li>Manage Candidates</li>
<li>View Applications</li>
<li>Verify Documents</li>

</ul>

</div>
</div>

</div>

</body>
</html>
