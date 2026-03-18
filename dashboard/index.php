<?php
session_start();

if(!isset($_SESSION['user_id'])){
header("Location: ../auth/login.php");
exit();
}

$fullname = $_SESSION['fullname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>IDA Academy Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>

body{
background:#f5f7fb;
font-family:'Segoe UI',sans-serif;
}

.sidebar{
height:100vh;
background:#1e3c72;
color:#fff;
padding-top:20px;
}

.sidebar a{
color:#cfd8ff;
text-decoration:none;
display:block;
padding:12px 20px;
border-radius:6px;
margin:5px 10px;
}

.sidebar a:hover{
background:#2a5298;
color:#fff;
}
@media(max-width:768px){
.sidebar{
height:auto;
}
}

.sidebar a.active{
background:#2a5298;
color:#fff;
}
.logo{
font-size:22px;
font-weight:700;
padding:0 20px;
margin-bottom:20px;
}

.topbar{
background:#fff;
padding:15px 25px;
box-shadow:0 3px 10px rgba(0,0,0,0.05);
}

.card-box{
border:none;
border-radius:12px;
box-shadow:0 6px 20px rgba(0,0,0,0.05);
}

.stat-icon{
font-size:26px;
}

</style>

</head>

<body>

<div class="container-fluid">

<div class="row">

<!-- Sidebar -->

<div class="col-md-2 sidebar">

<div class="logo">IDA Academy</div>

<a href="#"><i class="fa fa-home"></i> Dashboard</a>
<a href="#"><i class="fa fa-book"></i> Courses</a>
<a href="#"><i class="fa fa-user"></i> Profile</a>
<a href="#"><i class="fa fa-cog"></i> Settings</a>
<a href="../auth/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>

</div>


<!-- Main Content -->

<div class="col-md-10">

<!-- Topbar -->

<div class="topbar d-flex justify-content-between align-items-center">

<h5 class="mb-0">Dashboard</h5>

<div>
Welcome, <strong><?php echo $fullname; ?></strong>
</div>

</div>

<!-- Content -->

<div class="p-4">

<div class="row mb-4">

<div class="col-md-4">

<div class="card card-box p-3">

<div class="d-flex justify-content-between">

<div>
<h6>Total Students</h6>
<h3>120</h3>
</div>

<div class="stat-icon text-primary">
<i class="fa fa-users"></i>
</div>

</div>

</div>

</div>


<div class="col-md-4">

<div class="card card-box p-3">

<div class="d-flex justify-content-between">

<div>
<h6>Courses</h6>
<h3>8</h3>
</div>

<div class="stat-icon text-success">
<i class="fa fa-book"></i>
</div>

</div>

</div>

</div>


<div class="col-md-4">

<div class="card card-box p-3">

<div class="d-flex justify-content-between">

<div>
<h6>Active Sessions</h6>
<h3>3</h3>
</div>

<div class="stat-icon text-warning">
<i class="fa fa-cloud"></i>
</div>

</div>

</div>

</div>

</div>


<!-- Welcome Card -->

<div class="card card-box p-4">

<h4>Welcome to IDA Academy</h4>

<p class="text-muted">
This platform demonstrates how a real-world web application is deployed to the cloud.
Students will learn how authentication systems work and how applications run on cloud infrastructure.
</p>

<p>
This project will later be deployed on cloud servers from 
<strong>AWS Cloud using EC2 and RDS.</strong>
</p>

</div>


</div>

</div>

</div>

</div>

</body>
</html>