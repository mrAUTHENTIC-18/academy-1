<?php
session_start();
include "../config/db.php";

$error = "";

if(isset($_POST['login'])){

$email = trim($_POST['email']);
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE email=?");
$stmt->bind_param("s",$email);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){

$user = $result->fetch_assoc();

if(password_verify($password,$user['password'])){

$_SESSION['user_id'] = $user['id'];
$_SESSION['fullname'] = $user['fullname'];

header("Location: ../dashboard/index.php");
exit();

}else{
$error = "Incorrect password";
}

}else{
$error = "Account not found";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>IDA Academy Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
height:100vh;
background:linear-gradient(135deg,#1e3c72,#2a5298);
display:flex;
align-items:center;
justify-content:center;
font-family: 'Segoe UI', sans-serif;
}

.login-card{
width:420px;
border-radius:15px;
box-shadow:0 15px 40px rgba(0,0,0,0.25);
}

.logo{
font-size:28px;
font-weight:700;
color:#2a5298;
}

.form-control{
height:45px;
border-radius:8px;
}

.btn-login{
background:#2a5298;
color:#fff;
height:45px;
border-radius:8px;
font-weight:600;
}

.btn-login:hover{
background:#1e3c72;
}

.footer-text{
font-size:13px;
color:#888;
}

</style>

</head>

<body>

<div class="card login-card p-4">

<div class="text-center mb-4">
<div class="logo">IDA Academy</div>
<p class="text-muted">Cloud Training Portal</p>
</div>

<?php if($error != ""){ ?>

<div class="alert alert-danger">
<?php echo $error; ?>
</div>

<?php } ?>

<form method="POST">

<div class="mb-3">
<label class="form-label">Email Address</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<div class="d-grid mb-3">
<button name="login" class="btn btn-login">Login</button>
</div>

<div class="text-center">
<a href="register.php">Create an account</a>
</div>

</form>

<hr>

<div class="text-center footer-text">
IDA Academy • AWS Cloud Demo Application
</div>

</div>

</body>
</html>