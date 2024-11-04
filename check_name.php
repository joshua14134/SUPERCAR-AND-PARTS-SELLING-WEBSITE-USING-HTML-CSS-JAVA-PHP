<?php
@include 'config.php';

if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $select = "SELECT * FROM user_form WHERE name = '$name'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        echo 'exists'; // Name already exists
    } else {
        echo 'available'; // Name is available
    }
}
?>
