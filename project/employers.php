<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobWalla!</title>
    <style>
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
            border-radius: 5px;/
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
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="JobWalla!">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="jobSeekers.php">Job Seekers</a></li>
                <li><a href="employers.php">Employers</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <section id="job-seekers">
        <div class="container">
            <h2>For Employers</h2>
            <p>Are you ready to build a powerhouse team that drives your company's success? Look no further than our Employers Section – the hub of top-tier talent acquisition and recruitment tools. Whether you're a startup, small business, or a multinational corporation, we provide the resources and solutions to streamline your hiring process and attract the best candidates.
            <p>
        </div>
    </section>

    <section id="job-seekers">
        <div class="container">
            <p>Effortlessly find the right candidates for your team. Our advanced search functionalities allow you to specify skills, experience, and qualifications to identify candidates who perfectly match your job requirements. Save time and resources by focusing on the most relevant talent.
            <p>
        </div>
    </section>


    <section id="job-seekers">
        <div class="container">
            <p>Make a lasting impression with a polished and professional company profile. Showcase your company culture, values, and achievements to attract top talent. A well-crafted company profile helps candidates understand why your organization is the perfect fit for their career aspirations.</p>
            <a href="userSignIn.php" class="cta-button">Get Started</a>
        </div>
    </section>
    <footer>
        &copy; 2024 JobWalla!. All rights reserved.
    </footer>
</body>

</html>