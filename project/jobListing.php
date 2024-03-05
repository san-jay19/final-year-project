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
    <title>Job Listing Form</title>
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 40%;
            margin: 0 auto;
            
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
    </style>
</head>
<body>
    <?php include "navBar.php"; ?>
    <br>
    <center>
    <form action="post.php" method="post" enctype="multipart/form-data">
        <h2>Job Listing Form</h2>
        <div class="form-group">
            <label for="username">Comapany Name</label>
            <input type="text" id="cname" name="cname" required>
        </div>
      
        <div class="form-group">
            <label for="job">Job</label>
            <input type="text" id="job" name="job" required>
        </div>
        <div class="form-group">
            <label for="username">Location</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
    </center>
    <?php include "footer.php"; ?>
</body>
</html>