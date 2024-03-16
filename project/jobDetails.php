<?php
include "auth.php";
error_reporting(E_ERROR | E_PARSE);
if(isset($_SESSION['auth'])){
    
}
else{
    $_SESSION['message'] = "Access Denied, Please Login!";
    header('Location: userLogin.php');
    exit();
}

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
            background-image: url("img.jpg");
            background-size: cover;
        }
        
        form h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-container h2 {
            text-align: center;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
        .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
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
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            border-top: 2px solid #fff;
        }
    </style>
</head>
<body>
    <?php include('navBar.php'); ?>
   <?php
require "connection.php";
$row=[];


if(isset($_GET['id'])){
$id=$_GET['id'];
$sql = "SELECT * FROM jobdetails WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
}
$conn->close();
?>

    <h2>Job Details</h2>

    <div class="container">
        <div class="column">
            <div class="details">
                <h3>Job Information</h3>
                <p><strong>Job Name:</strong> <?php echo $row['name'] ?></p>
                <p><strong>Description</strong> <?php echo $row['description']; ?></p>
                <p><strong>Location:</strong> <?php echo $row['location']; ?></p>
                <p><strong>Requirements:</strong> <?php echo $row['requirements'];?></p>
                <p><strong>Salary:</strong> <?php echo $row['salary'];?></p>
                <p><strong>Contact Details:</strong> <?php echo $row['email'];?></p>
            </div>
        </div>
    </div>

    


    
    <?php require "footer.php"; ?>
</body>
</html>
