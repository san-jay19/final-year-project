<?php
include "auth.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            padding: 20px;
            box-sizing: border-box;
        }

        .column {
            width: 48%;
        }

        .details {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .details img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        h2 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <?php require "navBar.php"; ?>
    <h2>Your Details</h2>
    <div class="container">
        <div class="column">
            <div class="details">
                <h3>Personal Information</h3>
                <p><strong>Full Name:</strong> <?php echo $_SESSION['user_details']['username']; ?></p>
                <p><strong>Phone Number:</strong> <?php echo $_SESSION['user_details']['name']; ?></p>
                <p><strong>Email Address:</strong> <?php echo$_SESSION['user_details']['name']; ?></p>
                <p><strong>Address:</strong> <?php echo $_SESSION['user_details']['name'];?></p>
                <p><strong>Profile Picture:</strong> <img src="<?php echo $_SESSION['user_details']['name']; ?>" alt="Profile Picture"></p>
            </div>
        </div>

        <div class="column">
            <div class="details">
                <h3>Professional Information</h3>
                <p><strong>Resume/CV:</strong> <?php echo $_SESSION['user_details']['name']; ?></p>
                <p><strong>Work Experience:</strong> <?php echo nl2br($_SESSION['user_details']['name']); ?></p>
                <p><strong>Education:</strong> <?php echo nl2br($_SESSION['user_details']['name']); ?></p>
                <p><strong>Skills:</strong> <?php echo $_SESSION['user_details']['name']; ?></p>
                <p><strong>Certifications/Licenses:</strong> <?php echo $_SESSION['user_details']['name']; ?></p>
                <p><strong>Username:</strong> <?php echo $_SESSION['user_details']['name']; ?></p>
            </div>
        </div>
    </div>
    
</body>
</html>