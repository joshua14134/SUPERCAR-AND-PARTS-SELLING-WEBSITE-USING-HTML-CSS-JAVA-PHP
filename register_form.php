<?php
@include 'config.php';

$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    // Basic validation
    if (empty($name)) {
        $error[] = 'Name is required!';
    } elseif (strlen($name) < 3) {
        $error[] = 'Name must be at least 3 characters long!';
    }
    
    if (empty($email)) {
        $error[] = 'Email is required!';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/@.*\..*com$/', $email)) {
        $error[] = 'Invalid email format! Email must contain "@" and end with ".com".';
    }
    
    if (empty($pass)) {
        $error[] = 'Password is required!';
    } elseif (strlen($pass) < 6) {
        $error[] = 'Password must be at least 6 characters long!';
    }
    
    if (empty($cpass)) {
        $error[] = 'Confirm password is required!';
    } elseif ($pass !== $cpass) {
        $error[] = 'Passwords do not match!';
    }

    if (empty($error)) {
        // Hash the password for security
        $pass = password_hash($cpass, PASSWORD_DEFAULT);
        
        $select = "SELECT * FROM user_form WHERE email = '$email'";
        $result = mysqli_query($conn, $select);

        if (mysqli_num_rows($result) > 0) {
            $error[] = 'User already exists!';
        } else {
            $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$cpass','$user_type')";
            if (mysqli_query($conn, $insert)) {
                echo json_encode(['success' => true]); // Send success response
                exit; // Ensure no further processing
            } else {
                $error[] = 'Registration failed. Please try again.';
            }
        }
    }

    // Return error messages if present
    echo json_encode(['error' => implode("\n", $error)]);
    exit;
}

@include 'header.php'; // Include header
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>     
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('assets/img/background.jpg'); /* Background image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent image repetition */
        }
        .form-container {
            background: rgba(35, 35, 35, 0.8); /* Semi-transparent background */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25); /* Slightly more pronounced shadow */
        }
        .error-msg {
            color: #dc3545; /* Bootstrap danger color for error messages */
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border: 1px solid #ced4da; /* Light gray border */
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        select:focus {
            border-color: #80bdff; /* Light blue border on focus */
            outline: none;
        }
        .form-btn {
            background: #007bff; /* Primary blue color */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .form-btn:hover {
            background: #0056b3; /* Darker blue on hover */
        }
        p {
            color: white; /* Change text color to white */
        }
    </style>
</head>
<body>

<div class="form-container">
    <form id="register-form">
        <h3>Register Now</h3>
        <input type="text" id="name" name="name" required placeholder="Enter your name">
        <span id="name-error" class="error-msg"></span>
        <input type="email" name="email" required placeholder="Enter your email">
        <input type="password" name="password" required placeholder="Enter your password">
        <input type="password" name="cpassword" required placeholder="Confirm your password">
        <select name="user_type">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <input type="submit" id="submit-btn" value="Register Now" class="form-btn">
        <p>Already have an account? <a href="login_form.php">Login now</a></p>
    </form>
</div>

<!-- Modal for displaying error messages -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="error-message" class="error-msg"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#register-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        $.ajax({
            url: '', // The same page for processing
            type: 'POST',
            data: $(this).serialize(), // Serialize form data
            dataType: 'json',
            success: function(response) {
                if (response.error) {
                    $('#error-message').text(response.error); // Set error message
                    $('#errorModal').modal('show'); // Show the modal
                } else {
                    window.location.href = 'login_form.php'; // Redirect after successful registration
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    $('#name').on('input', function() {
        var name = $(this).val();
        $.ajax({
            url: 'check_name.php',
            type: 'POST',
            data: { name: name },
            success: function(response) {
                if (response === 'exists') {
                    $('#name-error').text('This name is already taken.');
                } else {
                    $('#name-error').text('');
                }
            }
        });
    });
});
</script>
</body>
</html>
