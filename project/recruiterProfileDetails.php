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
    <h2>Your Details</h2>
    <div class="container">
        <div class="column">
            <div class="details">
                <h3>Company Information</h3>
                <p><strong>Company Name:</strong> <?php echo $_SESSION['user_details']['username']; ?></p>
                <p><strong>Phone Number:</strong> <?php echo $_SESSION['user_details']['phoneno']; ?></p>
                <p><strong>Email Address:</strong> <?php echo$_SESSION['user_details']['email']; ?></p>
                <p><strong>Address:</strong> <?php echo $_SESSION['user_details']['address'];?></p>
                <p><strong>Profile Picture:</strong> <img src="<?php echo $_SESSION['user_details']['name']; ?>" alt="Profile Picture"></p>
            </div>
        </div>

        <div class="column">
            <div class="details">
                <h3>General Information</h3>
                <p><strong>About the Company</strong> <?php echo $_SESSION['user_details']['about']; ?></p>
                <p><strong>Comapny's Culture and Values</strong> <?php echo nl2br($_SESSION['user_details']['ccv']); ?></p>
                <p><strong>Roles currently Offering</strong> <?php echo nl2br($_SESSION['user_details']['name']); ?></p>
            </div>
        </div>

        
    </div>
    <?php require "footer.php"; ?>
</body>
</html>
