<?php
session_start();
require 'config.php';
include 'header.php';   // HEADER (contains layout)
?>

<?php
/* ---------- LOGIN REQUIRED ---------- */
if (!isset($_SESSION['user_id'])) {
    header("Location: login_form.php");
    exit();
}

$success = "";
$error = "";

/* ---------- FORM SUBMIT ---------- */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $carName  = trim($_POST['car_name']);
    $carType  = trim($_POST['car_type']);
    $carModel = trim($_POST['car_model']);
    $carNumber = trim($_POST['car_number']);
    $serviceType = $_POST['service_type'];
    $pickupDropoff = $_POST['pickup_dropoff'];
    $serviceLocation = trim($_POST['service_location']);
    $additionalInfo = trim($_POST['additional_info']);

    if ($carName == "" || $carNumber == "") {
        $error = "Please fill all required fields!";
    } else {

        $stmt = $conn->prepare("INSERT INTO service_requests
        (user_id, car_name, car_type, car_model, car_number, service_type, pickup_dropoff, service_location, additional_info)
        VALUES (?,?,?,?,?,?,?,?,?)");

        $stmt->bind_param(
            "issssssss",
            $_SESSION['user_id'],
            $carName,
            $carType,
            $carModel,
            $carNumber,
            $serviceType,
            $pickupDropoff,
            $serviceLocation,
            $additionalInfo
        );

        if ($stmt->execute()) {
            $success = "✅ Service booked successfully!";
        } else {
            $error = "❌ Something went wrong!";
        }

        $stmt->close();
    }
}
?>

<!-- PAGE STYLE (only for this page) -->
<style>
.container{
    width:80%;
    margin:40px auto;
}

/* Background Image */
body {
    font-family: Arial, sans-serif;
    background: url('assets/img/home4.jpg') no-repeat center center fixed;
    background-size: cover;
    color: white;
}

/* Transparent Glass Box */
.service-box{
    background: rgba(0,0,0,0.45);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    padding:25px;
    border-radius:12px;
    border:1px solid rgba(255,255,255,0.2);
    box-shadow:0 0 30px rgba(0,0,0,0.6);
}

/* Heading */
h2{
    text-align:center;
    margin-bottom:20px;
}

/* Inputs */
input,select,textarea{
    width:100%;
    padding:10px;
    margin:10px 0;
    border:none;
    border-radius:5px;
    background: rgba(255,255,255,0.15);
    color:#fff;
}

input::placeholder,
textarea::placeholder{
    color:#ddd;
}

/* Button */
button{
    background:#a855f7;
    color:white;
    padding:10px 20px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:#9333ea;
}

/* Messages */
.success{color:#00ffae;text-align:center;font-weight:bold;}
.error{color:#ff4d4d;text-align:center;font-weight:bold;}
</style>

<div class="container">
<div class="service-box">

<h2>Book a Service</h2>

<?php if($success): ?>
<p class="success"><?php echo $success; ?></p>
<?php endif; ?>

<?php if($error): ?>
<p class="error"><?php echo $error; ?></p>
<?php endif; ?>

<form method="post">

<label>Car Name</label>
<input type="text" name="car_name" required>

<label>Car Type</label>
<input type="text" name="car_type" required>

<label>Model Number</label>
<input type="text" name="car_model" required>

<label>Car Number Plate</label>
<input type="text" name="car_number" required>

<label>Service Type</label>
<select name="service_type" required>
<option value="">Select</option>
<option value="maintenance">Maintenance</option>
<option value="repair">Repair</option>
</select>

<label>Pickup / Drop</label>
<select name="pickup_dropoff" required>
<option value="">Select</option>
<option value="pickup">Pickup</option>
<option value="dropoff">Drop-off</option>
<option value="both">Both</option>
</select>

<label>Service Location</label>
<input type="text" name="service_location" required>

<label>Additional Info</label>
<textarea name="additional_info"></textarea>

<button type="submit">Submit Service Request</button>

</form>

</div>
</div>

<?php include 'footer.php'; ?>