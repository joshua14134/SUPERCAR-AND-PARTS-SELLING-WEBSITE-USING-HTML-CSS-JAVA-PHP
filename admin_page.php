<?php
session_start();
require 'config.php';

/* ---------- ADMIN PROTECTION ---------- */
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'admin') {
    header("Location: login_form.php");
    exit();
}

/* ---------- FETCH USERS ---------- */
$stmt = $conn->prepare("SELECT id, name, email, user_type FROM user_form ORDER BY id DESC");
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin - Manage Users</title>

<style>
body {
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    background:hsl(279,89%,7%);
    margin:0;
    font-family:Arial, sans-serif;
    color:white;
}

.container {
    background:hsl(219,4%,7%);
    padding:25px;
    border-radius:10px;
    width:90%;
    max-width:900px;
    box-shadow:0 0 15px rgba(0,0,0,0.6);
}

h1,h2{margin:10px 0;}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

table th, table td{
    padding:12px;
    border-bottom:1px solid #444;
}

table th{
    background:#111;
}

.btn{
    padding:8px 14px;
    background:#4CAF50;
    color:white;
    text-decoration:none;
    border-radius:5px;
    margin:3px;
    display:inline-block;
}

.btn:hover{background:#45a049;}

.danger{
    background:#e74c3c;
}

.danger:hover{
    background:#c0392b;
}

.topbar{
    text-align:right;
    margin-bottom:10px;
}
</style>
</head>

<body>

<div class="container">

<div class="topbar">
    <a href="dashboard.php" class="btn">Parts Dashboard</a>
    <a href="logout.php" class="btn danger">Logout</a>
</div>

<h1>Welcome Admin: <?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
<p>Manage Registered Users</p>

<h2>User Data</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>User Type</th>
    <th>Actions</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo htmlspecialchars($row['name']); ?></td>
    <td><?php echo htmlspecialchars($row['email']); ?></td>
    <td><?php echo $row['user_type']; ?></td>
    <td>
        <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="btn">Edit</a>
        <a href="delete_user.php?id=<?php echo $row['id']; ?>"
           class="btn danger"
           onclick="return confirm('Delete this user?')">Delete</a>
    </td>
</tr>
<?php endwhile; ?>

</table>

</div>

</body>
</html>