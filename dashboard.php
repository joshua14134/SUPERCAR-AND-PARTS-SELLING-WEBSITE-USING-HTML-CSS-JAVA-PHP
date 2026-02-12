<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'admin') {
    header("Location: login_form.php");
    exit();
}

/* ================= PART CRUD ================= */
if(isset($_POST['add_part'])){
    $imgName="default.png";
    if(!empty($_FILES['image']['name'])){
        $imgName=time().'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],"assets/img/".$imgName);
    }
    $stmt=$conn->prepare("INSERT INTO car_parts(name,image,price,description) VALUES(?,?,?,?)");
    $stmt->bind_param("ssds",$_POST['name'],$imgName,$_POST['price'],$_POST['description']);
    $stmt->execute();
}

if(isset($_POST['update_part'])){
    if(!empty($_FILES['image']['name'])){
        $imgName=time().'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],"assets/img/".$imgName);

        $stmt=$conn->prepare("UPDATE car_parts SET name=?,price=?,description=?,image=? WHERE id=?");
        $stmt->bind_param("sdssi",$_POST['name'],$_POST['price'],$_POST['description'],$imgName,$_POST['id']);
    }else{
        $stmt=$conn->prepare("UPDATE car_parts SET name=?,price=?,description=? WHERE id=?");
        $stmt->bind_param("sdsi",$_POST['name'],$_POST['price'],$_POST['description'],$_POST['id']);
    }
    $stmt->execute();
}

if(isset($_GET['delete_part'])) $conn->query("DELETE FROM car_parts WHERE id=".(int)$_GET['delete_part']);

/* ================= USER CRUD ================= */
if(isset($_POST['add_user'])){
    $pass=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $stmt=$conn->prepare("INSERT INTO user_form(name,email,password,user_type) VALUES(?,?,?,?)");
    $stmt->bind_param("ssss",$_POST['name'],$_POST['email'],$pass,$_POST['user_type']);
    $stmt->execute();
}

if(isset($_POST['update_user'])){
    $stmt=$conn->prepare("UPDATE user_form SET name=?,email=?,user_type=? WHERE id=?");
    $stmt->bind_param("sssi",$_POST['name'],$_POST['email'],$_POST['user_type'],$_POST['id']);
    $stmt->execute();
}

if(isset($_GET['delete_user'])) $conn->query("DELETE FROM user_form WHERE id=".(int)$_GET['delete_user']);

$parts=$conn->query("SELECT * FROM car_parts ORDER BY id DESC");
$users=$conn->query("SELECT * FROM user_form ORDER BY id DESC");
$sales=$conn->query("SELECT * FROM service_requests ORDER BY id DESC");

/* ================= SALES CHART DATA ================= */
$stats=$conn->query("SELECT service_type,COUNT(*) as total FROM service_requests GROUP BY service_type");
$labels=[];$data=[];
while($r=$stats->fetch_assoc()){ $labels[]=$r['service_type']; $data[]=$r['total']; }

include 'header.php';
?>

<style>
.admin-container{width:92%;margin:30px auto;}
.tabs{display:flex;gap:10px;margin-bottom:20px;}
.tab-btn{padding:10px 20px;background:#1f0033;color:#c084fc;border:none;border-radius:6px;cursor:pointer;}
.tab-btn.active{background:#a855f7;color:white;}
.section{display:none;background:#1f0033;padding:25px;border-radius:12px;border:1px solid #4c1d95;}
.section.active{display:block;}
table{width:100%;border-collapse:collapse;margin-top:10px;}
th,td{padding:12px;border-bottom:1px solid #3b0764;}
th{background:#0f001a;color:#c084fc;}
.btn{background:#a855f7;color:white;padding:8px 14px;border:none;border-radius:6px;cursor:pointer;}
.btn-danger{background:#ef4444;}
input,textarea,select{width:100%;padding:10px;margin:6px 0;background:#0f001a;border:1px solid #4c1d95;color:white;}
img{width:60px;border-radius:6px;}
.modal{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.7);justify-content:center;align-items:center;}
.modal-box{background:#1f0033;padding:25px;border-radius:12px;width:400px;}
</style>

<div class="admin-container">
<h2>🚗 Garage Admin Panel</h2>

<div class="tabs">
<button class="tab-btn active" onclick="showTab('parts',this)">Parts</button>
<button class="tab-btn" onclick="showTab('users',this)">Users</button>
<button class="tab-btn" onclick="showTab('sales',this)">Sales</button>
</div>

<!-- ================= PARTS ================= -->
<div id="parts" class="section active">
<button class="btn" onclick="toggleAddForm()">➕ Add New Part</button>

<div id="addPartForm" style="display:none;">
<form method="POST" enctype="multipart/form-data">
<input name="name" placeholder="Part Name" required>
<input name="price" type="number" placeholder="Price ₹" required>
<textarea name="description"></textarea>
<input type="file" name="image">
<button name="add_part" class="btn">Save</button>
</form>
</div>

<table>
<tr><th>Name</th><th>Image</th><th>Price</th><th>Action</th></tr>
<?php while($p=$parts->fetch_assoc()): ?>
<tr>
<td><?= htmlspecialchars($p['name']) ?></td>
<td><img src="assets/img/<?= $p['image'] ?>"></td>
<td>₹<?= $p['price'] ?></td>
<td>
<button class="btn" onclick="editPart('<?= $p['id'] ?>','<?= htmlspecialchars($p['name']) ?>','<?= $p['price'] ?>','<?= htmlspecialchars($p['description']) ?>')">Edit</button>
<a href="?delete_part=<?= $p['id'] ?>" class="btn btn-danger">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>
</div>

<!-- ================= USERS ================= -->
<div id="users" class="section">
<button class="btn" onclick="toggleUserForm()">➕ Add User</button>

<div id="addUserForm" style="display:none;">
<form method="POST">
<input name="name" placeholder="Name" required>
<input name="email" placeholder="Email" required>
<input name="password" placeholder="Password" required>
<select name="user_type">
<option value="user">User</option>
<option value="admin">Admin</option>
</select>
<button name="add_user" class="btn">Create</button>
</form>
</div>

<table>
<tr><th>Name</th><th>Email</th><th>Role</th><th>Delete</th></tr>
<?php while($u=$users->fetch_assoc()): ?>
<tr>
<td><?= htmlspecialchars($u['name']) ?></td>
<td><?= $u['email'] ?></td>
<td><?= $u['user_type'] ?></td>
<td>
<button class="btn" onclick="editUser('<?= $u['id'] ?>','<?= htmlspecialchars($u['name']) ?>','<?= $u['email'] ?>','<?= $u['user_type'] ?>')">Edit</button>
<a href="?delete_user=<?= $u['id'] ?>" class="btn btn-danger">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>
</div>

<!-- ================= SALES ================= -->
<div id="sales" class="section">
<h3>Service Requests</h3>
<table>
<tr><th>User</th><th>Car</th><th>Service</th></tr>
<?php while($s=$sales->fetch_assoc()): ?>
<tr>
<td><?= $s['user_id'] ?></td>
<td><?= $s['car_name'] ?></td>
<td><?= $s['service_type'] ?></td>
</tr>
<?php endwhile; ?>
</table>

<canvas id="chart"></canvas>
</div>
</div>

<!-- ================= MODALS ================= -->
<div class="modal" id="partModal">
<div class="modal-box">
<form method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" id="pid">
<input name="name" id="pname">
<input name="price" id="pprice">
<textarea name="description" id="pdesc"></textarea>
<input type="file" name="image">
<button name="update_part" class="btn">Update</button>
</form>
</div>
</div>

<div class="modal" id="userModal">
<div class="modal-box">
<form method="POST">
<input type="hidden" name="id" id="uid">
<input name="name" id="uname">
<input name="email" id="uemail">
<select name="user_type" id="urole">
<option value="user">User</option>
<option value="admin">Admin</option>
</select>
<button name="update_user" class="btn">Update</button>
</form>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
function showTab(tab,btn){
document.querySelectorAll('.section').forEach(s=>s.classList.remove('active'));
document.querySelectorAll('.tab-btn').forEach(b=>b.classList.remove('active'));
document.getElementById(tab).classList.add('active');
btn.classList.add('active');
}

function toggleAddForm(){addPartForm.style.display=(addPartForm.style.display==="block")?"none":"block";}
function toggleUserForm(){addUserForm.style.display=(addUserForm.style.display==="block")?"none":"block";}

function editPart(id,name,price,desc){
pid.value=id;pname.value=name;pprice.value=price;pdesc.value=desc;
partModal.style.display="flex";
}

function editUser(id,name,email,role){
uid.value=id;uname.value=name;uemail.value=email;urole.value=role;
userModal.style.display="flex";
}

new Chart(document.getElementById("chart"),{
type:"bar",
data:{labels: <?= json_encode($labels) ?>,
datasets:[{data: <?= json_encode($data) ?>}]}
});
</script>

<?php include 'footer.php'; ?>