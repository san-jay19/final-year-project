<?php
include "auth.php";
if(isset($_SESSION['auth'])){
    if($_SESSION['auth_user']['category'] <> "recruiter"){
        $_SESSION['message'] = "Access Denied, You are not allowed to access this page!";
        header('Location: index.php');
        exit();
    }
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
    <title>Job Seeker Registration</title>
    <style>
        body,
        h1,
        h2,
        h3,
        p,
        ul {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #fff;
        }

        .logo img {
            width: 50px;
            height: 50px;
            border-radius: 5px;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
        }

        section {
            padding: 60px 0;
            border-bottom: 1px solid #ddd;
        }

        .container {
            width: 80%;
            margin: 0 auto;
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
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        form h2 {
            text-align: center;
            color: #333;
            width: 100%;
            margin-bottom: 20px;
        }

        .form-group {
            width: 48%;
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
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

        @media (max-width: 768px) {
            form {
                width: 100%;
            }

            .form-group {
                width: 100%;
            }
        }

        span {
            color: #45a049;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php require "navBar.php"; ?>

    <br>
    <center><h2>Update Company's Profile</h2></center>
    <br>
    
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="profilePicture">Profile Picture:</label>
            <input type="file" id="profilePicture" name="profilePicture" accept="image/*">
        </div>

        <div class="form-group">
            <label for="fullName">Company Name:</label>
            <input type="text" id="fullName" name="fullName" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="8" required></textarea>
        </div>

        <div class="form-group">
            <label for="education">About the Company:</label>
            <textarea id="education" name="education" rows="8" required></textarea>
        </div>

        <div class="form-group">
            <label for="workExperience">Company's Culture and Values:</label>
            <textarea id="workExperience" name="workExperience" rows="8" required></textarea>
        </div>

       

        <div class="form-group">
            <label for="skills">Roles currently offering</label>
            <textarea id="skills" name="skills" rows="8" required></textarea>
        </div>
        
        <div class="form-group">
            <button type="r_submit">Submit</button>
        </div>
   
    </form>
    <br>
    <br>
    <br>
    <br>
    <?php include "footer.php"; ?>
</body>
</html>