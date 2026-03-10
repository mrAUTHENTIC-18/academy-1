<?php
include "../config/db.php";

$error = "";
$success = "";

if(isset($_POST['register'])){

$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];

if($password !== $confirm){
$error = "Passwords do not match";
}
else{

$stmt = $conn->prepare("SELECT id FROM users WHERE email=?");
$stmt->bind_param("s",$email);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){

$error = "Email already registered";

}else{

$hashed = password_hash($password,PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users(fullname,email,password) VALUES(?,?,?)");
$stmt->bind_param("sss",$fullname,$email,$hashed);

if($stmt->execute()){
$success = "Registration successful. You can now login.";
}else{
$error = "Something went wrong. Try again.";
}

}

}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>IDA Academy Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
height:100vh;
background:linear-gradient(135deg,#1e3c72,#2a5298);
display:flex;
align-items:center;
justify-content:center;
font-family:'Segoe UI',sans-serif;
}

.register-card{
width:450px;
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

.btn-register{
background:#2a5298;
color:#fff;
height:45px;
border-radius:8px;
font-weight:600;
}

.btn-register:hover{
background:#1e3c72;
}

.footer-text{
font-size:13px;
color:#888;
}

</style>

</head>

<body>

<div class="card register-card p-4">

<div class="text-center mb-4">
<div class="logo">IDA Academy</div>
<p class="text-muted">Create your account</p>
</div>

<?php if($error!=""){ ?>
<div class="alert alert-danger"><?php echo $error; ?></div>
<?php } ?>

<?php if($success!=""){ ?>
<div class="alert alert-success"><?php echo $success; ?></div>
<?php } ?>

<form method="POST">

<div class="mb-3">
<label class="form-label">Full Name</label>
<input type="text" name="fullname" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Email Address</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Confirm Password</label>
<input type="password" name="confirm_password" class="form-control" required>
</div>

<div class="d-grid mb-3">
<button name="register" class="btn btn-register">Create Account</button>
</div>

<div class="text-center">
Already have an account? <a href="login.php">Login</a>
</div>

</form>

<hr>

<div class="text-center footer-text">
IDA Academy • AWS Cloud Demo Application
</div>

</div>

</body>
</html>