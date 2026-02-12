<?php
session_start();
require 'config.php';
include 'header.php';   // Use shared header

$error = "";

/* ---------- LOGIN PROCESS ---------- */
if(isset($_POST['login'])){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if($email=="" || $password==""){
        $error = "Please fill all fields!";
    }else{

        $stmt = $conn->prepare("SELECT * FROM user_form WHERE email=?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){

            $user = $result->fetch_assoc();

            /* Works for both hashed + old plain passwords */
            if(password_verify($password,$user['password']) || $password === $user['password']){

                $_SESSION['user_id']   = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_type'] = $user['user_type'];

                /* Redirect Based on Role */
                if($user['user_type'] === 'admin'){
                    header("Location: dashboard.php");
                }else{
                    header("Location: profile.php");
                }
                exit();

            }else{
                $error = "Wrong Password!";
            }

        }else{
            $error = "User Not Found!";
        }
    }
}
?>

<!-- Page-specific CSS (kept in main page, not header) -->
<style>
body{
    background: url('assets/img/in.jpg') no-repeat center center fixed;
    background-size: cover;
}

/* Overlay */
body::before{
    content:"";
    position:fixed;
    top:0; left:0;
    width:100%; height:100%;
    background: rgba(0,0,0,0.6);
    z-index:-1;
}

.login-wrapper{
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:80vh;
}

.login-box{
    width:350px;
    background:rgba(255, 255, 255, 0);
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 25px rgba(0, 0, 0, 0);
    text-align:center;
}

h2{margin-bottom:20px;}

input{
    width:100%;
    padding:10px;
    margin:10px 0;
    border:none;
    border-radius:5px;
}

.btn{
    width:100%;
    padding:10px;
    background:#4CAF50;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
    font-size:16px;
}

.btn:hover{background:#45a049;}

.error{
    color:#ff4d4d;
    margin-bottom:10px;
}

a{
    color:#4CAF50;
    text-decoration:none;
}
</style>

<div class="login-wrapper">
<div class="login-box">

<h2>Login</h2>

<?php if($error): ?>
<div class="error"><?php echo $error; ?></div>
<?php endif; ?>

<form method="post">

<input type="email" name="email" placeholder="Enter Email" required>
<input type="password" name="password" placeholder="Enter Password" required>

<button name="login" class="btn">Login</button>

</form>

<br>
<p>Don't have an account?</p>
<a href="register_form.php">Register Here</a>

</div>
</div>
