<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-4">

<div class="card register-card">

<div class="card-header text-center">
Admin Login
</div>

<div class="card-body">

<form method="POST" action="authenticate.php">

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<div class="mb-3 text-center">

<img src="captcha.php?rand=<?php echo rand(); ?>" id="captcha_image">

<br><br>

<input type="text" name="captcha" class="form-control" placeholder="Enter Captcha" required>

<br>

<button type="button" class="btn btn-sm btn-secondary"
onclick="document.getElementById('captcha_image').src='captcha.php?'+Math.random();">

Refresh Captcha

</button>

</div>

<button type="submit" class="btn btn-primary w-100">
Login
</button>

</form>

</div>
</div>

</div>
</div>
</div>

</body>
</html>