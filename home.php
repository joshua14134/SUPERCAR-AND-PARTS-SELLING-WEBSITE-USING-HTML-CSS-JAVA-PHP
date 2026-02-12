<?php /* Home Page */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Showroom</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial, Helvetica, sans-serif;
    background:#000;
}

/* EACH IMAGE SECTION */
.section-image{
    position:relative;
    width:100%;
    height:100vh; /* full screen height */
    overflow:hidden;
}

/* IMAGE */
.section-image img{
    width:100%;
    height:100%;
    object-fit:cover;
}

/* CENTER BUTTON */
.overlay-btn{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%);
    background:rgba(255,255,255,0.85);
    color:#1a40ff;
    font-size:1.5rem;
    padding:14px 28px;
    border-radius:10px;
    text-decoration:none;
    font-weight:bold;
    transition:0.3s;
}

.overlay-btn:hover{
    background:#1a40ff;
    color:#fff;
}
</style>
</head>

<body>

<!-- HOME -->
<div class="section-image">
    <img src="assets/img/home1.jpg" alt="Home">
    <a href="index.php" class="overlay-btn">HOME</a>
</div>

<!-- LOGIN -->
<div class="section-image">
    <img src="assets/img/home2.jpg" alt="Login">
    <a href="login_form.php" class="overlay-btn">LOGIN</a>
</div>

<!-- SEE CARS -->
<div class="section-image">
    <img src="assets/img/home3.jpg" alt="Cars">
    <a href="popular.php" class="overlay-btn">SEE THE NEW CARS</a>
</div>

</body>
</html>  