<?php
session_start();

if(isset($_SESSION['auth'])){
    $_SESSION['message'] = "You are already logged in!!";
    header('Location: index.php');
    exit();
}

require "connection.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker Signup</title>
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
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


        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
                padding-bottom: 10px;
            }

            .logo img {
                width: 70%;
                margin-bottom: 10px;
            }

            nav {
                margin-top: 10px;
            }

            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin: 0;
                margin-bottom: 10px;
            }

            section {
                padding: 40px 0;
            }

            form {
                width: 80%;
            }
        }
        span{
            color: #45a049;
            cursor: pointer;
        }
    </style>
</head>

<body>
  <?php include('navBar.php'); ?>
  <?php if(isset($_SESSION['message'])){
    ?>
<div class="alert">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<strong>Hey!</strong> <?=$_SESSION['message'] ?>
</div>
<?php
unset($_SESSION['message']);
}
?>
    <section>
        <div class="container">
            <center>
                <h2>Log In</h2>
            </center><br>
            <form action="auth.php" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="form-group">
                    <button type="submit" name="loginBtn">Login</button>
                </div>
                
                <center>
                <div class="form-group">
                    For First Time Users,<span onclick="location.href='userSignIn.php'"> Signup</span>
                </div>
                </center>
            </form>
        </div>
    </section>

    <?php include "footer.php"; ?>
</body>

</html>