<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phoneNumber'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$address = $_POST['address'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="day 8 style.css">
    
</head>

<body>

<div class="container">

    <div class="card shadow-lg confirm-card">

        <div class="card-header bg-success text-white">
            <i class="fa-solid fa-circle-check"></i>
            Registration Successful
        </div>

        <div class="card-body">

            <div class="text-center mb-3">
                <span class="badge bg-success">
                    Registration Complete
                </span>
            </div>

            <p><strong>Name :</strong> <?php echo $name; ?></p>

            <p><strong>Email :</strong> <?php echo $email; ?></p>

            <p><strong>Phone Number :</strong> <?php echo $phone; ?></p>

            <p><strong>Gender :</strong> <?php echo $gender; ?></p>

            <p><strong>Course :</strong> <?php echo $course; ?></p>

            <p><strong>Address :</strong> <?php echo $address; ?></p>

            <div class="text-center mt-4">
                <a href="
                index.html" class="btn btn-primary">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to Registration Form
                </a>
            </div>

        </div>

    </div>

</div>

</body>
</html>