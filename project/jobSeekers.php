<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobWalla!</title>
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
            line-height: 1.6;   background-image: url("Animated Shape.svg");
            background-size: cover;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        p {
            color: #666;
            font-size: 23px;
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

        h2 {
            color: #333;
        }
    </style>
</head>

<body>
    <?php include('navBar.php');?>
    <br>
    <br>
    <section id="job-seekers">
        <div class="container">
            <h2>For Job Seekers</h2>
            <p>Are you ready to embark on a journey towards your dream career? Look no further than our Job Seekers Section – your gateway to a world of opportunities, growth, and success. Whether you're a seasoned professional looking to advance your career or a recent graduate eager to kickstart your professional journey.</p>
        </div>
    </section>

    <section id="job-seekers">
        <div class="container">
            <p>Say goodbye to endless scrolling through irrelevant job postings! Our advanced algorithm analyzes your skills, experience, and preferences to provide you with personalized job matches. Spend more time focusing on the opportunities that truly align with your career goals.</p>
        </div>
    </section>


    <section id="job-seekers">
        <div class="container">
            <p>Stay ahead of the competition by setting up customized job alerts. Receive notifications for new job opportunities that match your criteria, ensuring you never miss out on a potential career-defining opportunity.
                Embark on your job search journey with confidence and let our Job Seekers Section be your guiding light. Your dream job is just a click away!</p>
            <a href="#signup" class="cta-button">Get Started</a>
        </div>
    </section>
   <?php include "footer.php"; ?>
</body>

</html>