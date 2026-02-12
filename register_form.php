<?php
require 'config.php';
include 'header.php';

$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass  = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    if (strlen($name) < 3) $error[] = "Name must be at least 3 characters!";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $error[] = "Invalid email format!";
    if (strlen($pass) < 6) $error[] = "Password must be at least 6 characters!";
    if ($pass !== $cpass) $error[] = "Passwords do not match!";

    if (empty($error)) {
        $stmt = $conn->prepare("SELECT id FROM user_form WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) $error[] = "User already exists!";
        $stmt->close();
    }

    if (empty($error)) {
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO user_form (name,email,password,user_type) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $name, $email, $hashed_password, $user_type);
        $stmt->execute();
        $stmt->close();

        echo json_encode(['success' => true]);
        exit();
    }

    echo json_encode(['error' => implode("<br>", $error)]);
    exit();
}
?>

<style>
body {
    font-family: Arial, sans-serif;
    background: url('assets/img/re.jpg') no-repeat center center fixed;
    background-size: cover;
    color: white;
    margin: 0;
    padding: 0;
}

body::before{
    content:"";
    position:fixed;
    top:0; left:0;
    width:100%; height:100%;
    background: rgba(0,0,0,0.6);
    z-index:-1;
}

.form-container {
    text-align: center;
    padding: 30px;
    background: rgba(255, 255, 255, 0);
    border-radius: 8px;
    margin: 100px auto;
    width: 90%;
    max-width: 400px;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0);
}

.form-container input,
.form-container select {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: none;
}

.form-btn {
    background: #4CAF50;
    color: white;
    cursor: pointer;
}

.form-btn:hover {
    background: #45a049;
}

.error-msg { color:red; margin-top:10px; }
.success-msg { color:#4CAF50; }
</style>

<div class="form-container">
<form id="register-form">
    <h3>Register Now</h3>

    <input type="text" name="name" required placeholder="Enter your name">
    <input type="email" name="email" required placeholder="Enter your email">
    <input type="password" name="password" required placeholder="Enter your password">
    <input type="password" name="cpassword" required placeholder="Confirm password">

    <select name="user_type">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>

    <input type="submit" value="Register Now" class="form-btn">

    <p>Already have account? <a href="login_form.php">Login</a></p>
    <div id="message"></div>
</form>
</div>

<script>
$('#register-form').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        url:'',
        type:'POST',
        data:$(this).serialize(),
        dataType:'json',
        success:function(res){
            if(res.error){
                $('#message').html('<p class="error-msg">'+res.error+'</p>');
            } else {
                $('#message').html('<p class="success-msg">Registered Successfully!</p>');
                setTimeout(()=>window.location='login_form.php',1500);
            }
        }
    });
});
</script>