<?php
session_start();
require 'config.php';
include 'header.php';

/* ---------- FETCH CAR PARTS ---------- */
$stmt = $conn->prepare("SELECT * FROM car_parts ORDER BY id DESC");
$stmt->execute();
$result = $stmt->get_result();
?>

<style>
.parts__list{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.part-container{
    background:rgba(255,255,255,.08);
    padding:15px;
    border-radius:10px;
    text-align:center;
    transition:.3s;
}

.part-container:hover{
    transform:translateY(-5px);
    box-shadow:0 0 20px rgba(0,255,150,.3);
}

.part-container img{
    width:150px;
    height:150px;
    object-fit:contain;
}

.btn{
    padding:10px 18px;
    background:#4CAF50;
    color:white;
    border-radius:5px;
    text-decoration:none;
    display:inline-block;
    margin-top:10px;
}

.btn:hover{background:#45a049;}

.topbar{
    text-align:right;
    margin-bottom:10px;
}
</style>

<div class="container">

<div class="topbar">
<?php if(isset($_SESSION['user_type']) && $_SESSION['user_type']=='admin'): ?>
    <a href="dashboard.php" class="btn">Admin Dashboard</a>
<?php endif; ?>
</div>

<h2>Available Car Parts</h2>

<div class="parts__list">

<?php while($row = $result->fetch_assoc()): ?>

<div class="part-container">
    <img src="assets/img/<?php echo htmlspecialchars($row['image']); ?>">
    <h3><?php echo htmlspecialchars($row['name']); ?></h3>

    <p><strong>₹<?php echo number_format($row['price'],2); ?></strong></p>

    <p><?php echo htmlspecialchars($row['description']); ?></p>

    <?php if(isset($_SESSION['user_id'])): ?>
        <a href="c_add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn">
            Add to Cart
        </a>
    <?php else: ?>
        <a href="login_form.php" class="btn">
            Login to Buy
        </a>
    <?php endif; ?>
</div>

<?php endwhile; ?>

</div>
</div>

<?php include 'footer.php'; ?>