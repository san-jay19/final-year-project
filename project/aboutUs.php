<?php session_start()?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
        body{
    background-color: lightgray;
}
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-image: url("img.jpg"); background-size: cover;
        }

        .container {
            width: 80%;
            margin: 0 auto;

        }

        p {
            color: #666;
            font-size: 25px;
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

        #job-seekers {
            font-size: 25px;
        }
    </style>
</head>

<body>
<?php include('navBar.php') ?>
    <br>
    <br>

    <section id="job-seekers">
        <div class="container">
            <p>JobWalla! is created by a group of people who were saddened by the students struggle to find job for their career growth so they developed a system to easily connect recuriters with students and help them carve the path to their succesful future and make them champions .</p>
        </div>
    </section>
    <?php include "footer.php"; ?>
</body>

</html>