<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login_form.php");
    exit();
}

$user_id = $_SESSION['user_id'];

/* ================= UPDATE PROFILE ================= */
if(isset($_POST['update_profile'])){

    $name = trim($_POST['name']);

    // Ensure avatar folder exists
    if(!is_dir("assets/avatars")){
        mkdir("assets/avatars",0777,true);
    }

    if(!empty($_FILES['avatar']['name'])){

        $avatar = time()."_".basename($_FILES['avatar']['name']);
        $target = "assets/avatars/".$avatar;

        if(move_uploaded_file($_FILES['avatar']['tmp_name'],$target)){
            $stmt = $conn->prepare("UPDATE user_form SET name=?, avatar=? WHERE id=?");
            $stmt->bind_param("ssi",$name,$avatar,$user_id);
        } else {
            $stmt = $conn->prepare("UPDATE user_form SET name=? WHERE id=?");
            $stmt->bind_param("si",$name,$user_id);
        }

    } else {
        $stmt = $conn->prepare("UPDATE user_form SET name=? WHERE id=?");
        $stmt->bind_param("si",$name,$user_id);
    }

    $stmt->execute();
    $_SESSION['user_name'] = $name;

    header("Location: profile.php?success=profile");
    exit();
}

/* ================= CHANGE PASSWORD ================= */
if(isset($_POST['change_password'])){

    $current = $_POST['current_password'];
    $new = $_POST['new_password'];

    $stmt = $conn->prepare("SELECT password FROM user_form WHERE id=?");
    $stmt->bind_param("i",$user_id);
    $stmt->execute();
    $data = $stmt->get_result()->fetch_assoc();

    if(password_verify($current,$data['password'])){
        $newHash = password_hash($new,PASSWORD_DEFAULT);

        $stmt = $conn->prepare("UPDATE user_form SET password=? WHERE id=?");
        $stmt->bind_param("si",$newHash,$user_id);
        $stmt->execute();

        header("Location: profile.php?success=password");
        exit();
    } else {
        header("Location: profile.php?error=wrongpass");
        exit();
    }
}

/* ================= FETCH USER ================= */
$stmt = $conn->prepare("SELECT name,email,avatar FROM user_form WHERE id=?");
$stmt->bind_param("i",$user_id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

$avatarPath = "assets/avatars/default.png";
if(!empty($user['avatar']) && file_exists("assets/avatars/".$user['avatar'])){
    $avatarPath = "assets/avatars/".$user['avatar'];
}
?>

<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>

<style>

/* ===== Background Image ===== */
body{
    margin:0;
    font-family:Arial;
    color:white;
    min-height:100vh;

    background:
        linear-gradient(rgba(15,0,26,0.85), rgba(31,0,51,0.85)),
        url('assets/img/profile-bg.jpg') no-repeat center center/cover;

    background-attachment: fixed;
}

/* ===== Topbar ===== */
.topbar{
    background:#000;
    padding:15px;
    text-align:right;
}

.topbar a{
    color:white;
    text-decoration:none;
    margin-left:15px;
    padding:8px 15px;
    background:#a855f7;
    border-radius:20px;
    transition:0.3s;
}

.topbar a:hover{
    background:#9333ea;
}

/* ===== Profile Card ===== */
.container{
    max-width:500px;
    margin:80px auto;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(15px);
    padding:35px;
    border-radius:20px;
    box-shadow:0 0 50px rgba(168,85,247,0.5);
    text-align:center;
}

img{
    width:140px;
    height:140px;
    border-radius:50%;
    object-fit:cover;
    border:4px solid #a855f7;
    margin-bottom:15px;
}

input{
    width:100%;
    padding:12px;
    margin:12px 0;
    border:none;
    border-radius:10px;
    background:#1f0033;
    color:white;
}

.btn{
    background:#a855f7;
    color:white;
    padding:12px;
    border:none;
    border-radius:30px;
    cursor:pointer;
    width:100%;
    transition:0.3s;
    font-weight:bold;
}

.btn:hover{
    background:#9333ea;
    transform:scale(1.05);
}

.success{color:#4CAF50;}
.error{color:#ff4d4d;}

hr{
    border:1px solid #4c1d95;
    margin:30px 0;
}

</style>
</head>

<body>

<div class="topbar">
<a href="index.php">🏠 Home</a>
<a href="logout.php">Logout</a>
</div>

<div class="container">

<h2>My Profile</h2>

<?php if(isset($_GET['success']) && $_GET['success']=="profile"): ?>
<p class="success">Profile Updated Successfully ✅</p>
<?php endif; ?>

<?php if(isset($_GET['success']) && $_GET['success']=="password"): ?>
<p class="success">Password Changed Successfully 🔐</p>
<?php endif; ?>

<?php if(isset($_GET['error'])): ?>
<p class="error">Wrong Current Password ❌</p>
<?php endif; ?>

<!-- PROFILE UPDATE -->
<form method="post" enctype="multipart/form-data">

<img src="<?php echo $avatarPath; ?>?v=<?php echo time(); ?>" id="preview">

<input type="file" name="avatar" accept="image/*" onchange="previewImage(event)">

<input type="text" name="name"
value="<?php echo htmlspecialchars($user['name']); ?>"
required>

<input type="email"
value="<?php echo htmlspecialchars($user['email']); ?>"
readonly>

<button name="update_profile" class="btn">Update Profile</button>

</form>

<hr>

<!-- CHANGE PASSWORD -->
<h3>Change Password</h3>

<form method="post">

<input type="password" name="current_password" placeholder="Current Password" required>
<input type="password" name="new_password" placeholder="New Password" required>

<button name="change_password" class="btn">Change Password</button>

</form>

</div>

<script>
function previewImage(event){
    const reader = new FileReader();
    reader.onload = function(){
        document.getElementById('preview').src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>

</body>
</html>