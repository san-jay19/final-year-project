<?php
include "auth.php";
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobWalla!</title>
    <style>
        body, h1, h2, h3, p, ul {
    margin: 0;
    padding: 0;
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


body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-image: url("Animated Shape.svg");
    background-size: cover;
}

section {
    padding: 60px 0;
 
}

.hero {
    text-align: center;
}

.container {
    width: 80%;
    margin: 0 auto;
}

h2 {
    color: #333;
}

p {
    color: #666;
    font-size: 20px;
    font-weight: bold;
}

.cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
    font-weight: bold;
    border: 2px solid #fff; 
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

/* Responsive Styles */
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
    <section id="home">
        <div class="hero">
            <h1>Welcome to JobWalla!</h1>
            <p>Where Opportunities Meet Talents</p>
        </div>
    </section>

    <section id="job-seekers">
        <div class="container">
            <h2>For Job Seekers</h2>
            <p>Explore limitless opportunities, build your professional profile, receive personalized job alerts, and access professional development resources to enhance your skills and advance your career.</p>
           
            <?php
            if($_SESSION['auth']){?>
            <a href="viewJobs.php" class="cta-button">Get Started</a>
            <?php } else{?>
                <a href="userSignIn.php" class="cta-button">Get Started</a>
            <?php } ?>

        </div>
    </section>

    <section id="employers">
        <div class="container">
            <h2>For Recruiters</h2>
            <p>Efficiently post job openings, streamline your recruitment workflow, build your employer brand, and connect with a diverse talent pool to make the best hiring decisions.</p>
            
            <?php
            if($_SESSION['auth']){?>
            <a href="jobListing.php" class="cta-button">Start Hiring</a>
            <?php } else{?>
                <a href="userSignIn.php" class="cta-button">Start Hiring</a>
            <?php } ?>
        </div>
    </section>

    <section id="about-us">
        <div class="container">
            <h2>About Us</h2>
            <p>Learn more about our mission, and our commitment to connecting talented individuals with exciting career opportunities.</p>
            <a href="aboutUs.php" class="cta-button">Learn More</a>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have questions or need assistance? Reach out to our dedicated support team. We're here to help!</p>
            <a href="mailto:info@yourjobportal.com" class="cta-button">Email Us</a>
        </div>
    </section>
    <?php include "footer.php"; ?>

</body>

</html>