<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor - Patient Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<a style="padding-right:20px;text-align:left;color:black;" href="index.php">HOME</a>
<a style="padding-right:20px;text-align:left;color:black;" href="doctor.php">SEE A DOCTOR</a>
<a style="padding-right:20px;text-align:left;color:black;" href="Appointmentss.php">APPOINTMENTS</a>
<a style="padding-right:20px;text-align:left;color:black;" href="bills.php">ACCOUNTANT AND BILLS</a>

<div class="container mt-5">
    <h2>Patient Information</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize the input data
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        $gender = htmlspecialchars($_POST['gender']);
        $contact = htmlspecialchars($_POST['contact']);
        $address = htmlspecialchars($_POST['address']);
        $medical_history = htmlspecialchars($_POST['medical_history']);
        
        // Display the submitted data
        echo "<h4>Details Submitted:</h4>";
        echo "<p><strong>Full Name:</strong> $name</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Contact Number:</strong> $contact</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>Medical History:</strong> $medical_history</p>";
    } else {
        echo "<p>No data submitted. Please go back and fill out the form.</p>";
    }
    ?>
    
    <a href="index.php" class="btn btn-secondary mt-3">Go Back</a>
</div>

</body>
</html>
