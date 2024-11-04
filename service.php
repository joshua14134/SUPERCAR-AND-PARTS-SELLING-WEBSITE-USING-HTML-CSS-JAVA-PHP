<?php
include 'header.php'; // Include the header
include 'config.php'; // Include the database connection

// Initialize variables
$carName = $carType = $carModel = $carNumber = $serviceType = $pickupDropoff = $serviceLocation = $additionalInfo = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve form data
    $carName = htmlspecialchars($_POST['car_name']);
    $carType = htmlspecialchars($_POST['car_type']);
    $carModel = htmlspecialchars($_POST['car_model']);
    $carNumber = htmlspecialchars($_POST['car_number']);
    $serviceType = htmlspecialchars($_POST['service_type']);
    $pickupDropoff = htmlspecialchars($_POST['pickup_dropoff']);
    $serviceLocation = htmlspecialchars($_POST['service_location']);
    $additionalInfo = htmlspecialchars($_POST['additional_info']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO service_requests (car_name, car_type, car_model, car_number, service_type, pickup_dropoff, service_location, additional_info) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $carName, $carType, $carModel, $carNumber, $serviceType, $pickupDropoff, $serviceLocation, $additionalInfo);

    // Execute the statement
    if ($stmt->execute()) {
        echo '<h2>Form Submitted Successfully!</h2>';
        echo '<p><strong>Car Name:</strong> ' . $carName . '</p>';
        echo '<p><strong>Car Type:</strong> ' . $carType . '</p>';
        echo '<p><strong>Model Number:</strong> ' . $carModel . '</p>';
        echo '<p><strong>Car Number Plate:</strong> ' . $carNumber . '</p>';
        echo '<p><strong>Service Type:</strong> ' . $serviceType . '</p>';
        echo '<p><strong>Pickup and Drop-off:</strong> ' . $pickupDropoff . '</p>';
        echo '<p><strong>Service Location:</strong> ' . $serviceLocation . '</p>';
        echo '<p><strong>Additional Information:</strong> ' . $additionalInfo . '</p>';
    } else {
        echo 'Error: ' . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* General container styling */
        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Header styling */
        .header {
            padding: 20px;
            text-align: center;
            background-color: transparent; /* Removed background color */
            box-shadow: none; /* Removed box-shadow */
        }

        .header__title {
            font-size: 32px;
            color: #333;
        }

        /* Center the heading */
        .section__title {
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Grey box styling for the form */
        .service-form__box {
            background-color: #e0e0e0; /* Light grey background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Title styling */
        .service-form__title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #000; /* Set text color to black */
            text-align: center; /* Center the text */
        }

        /* Form group styling */
        .form-group {
            margin-bottom: 15px;
        }

        /* Label styling */
        .service-form__label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        /* Input and select styling */
        .service-form__input, .service-form__select, .service-form__textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Textarea styling */
        .service-form__textarea {
            height: 100px;
            resize: vertical;
        }

        /* Button styling */
        .service-form__button {
            background-color: #007bff; /* Blue button color */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .service-form__button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <main>
        <section class="service-form section">
            <div class="service-form__container container">
                <div class="service-form__box">
                    <h2 class="service-form__title">Book a Service</h2>
                    <form action="" method="post" class="service-form__form">
                        <div class="form-group">
                            <label for="car-name" class="service-form__label">Car Name:</label>
                            <input type="text" id="car-name" name="car_name" class="service-form__input" required>
                        </div>

                        <div class="form-group">
                            <label for="car-type" class="service-form__label">Car Type:</label>
                            <input type="text" id="car-type" name="car_type" class="service-form__input" required>
                        </div>

                        <div class="form-group">
                            <label for="car-model" class="service-form__label">Model Number:</label>
                            <input type="text" id="car-model" name="car_model" class="service-form__input" required>
                        </div>

                        <div class="form-group">
                            <label for="car-number" class="service-form__label">Car Number Plate:</label>
                            <input type="text" id="car-number" name="car_number" class="service-form__input" required>
                        </div>

                        <div class="form-group">
                            <label for="service-type" class="service-form__label">Service Type:</label>
                            <select id="service-type" name="service_type" class="service-form__select" required>
                                <option value="">Select Service Type</option>
                                <option value="maintenance">Maintenance</option>
                                <option value="repair">Repair</option>
                                <!-- Add more options if needed -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pickup-dropoff" class="service-form__label">Pickup and Drop-off:</label>
                            <select id="pickup-dropoff" name="pickup_dropoff" class="service-form__select" required>
                                <option value="">Select Option</option>
                                <option value="pickup">Pickup</option>
                                <option value="dropoff">Drop-off</option>
                                <option value="both">Both</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="service-location" class="service-form__label">Service Location:</label>
                            <input type="text" id="service-location" name="service_location" class="service-form__input" required>
                        </div>

                        <div class="form-group">
                            <label for="additional-info" class="service-form__label">Additional Information:</label>
                            <textarea id="additional-info" name="additional_info" class="service-form__textarea"></textarea>
                        </div>

                        <button type="submit" class="service-form__button">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    
    <?php include 'footer.php'; // Include the footer ?>
</body>
</html>
