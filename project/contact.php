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
            font-size: 18px;
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

        li {
            list-style: none;
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
    <center>
        <section id="job-seekers">
            <div class="container">
                <h2>Contact</h2>
                <ul>
                    <li>Email: <a href="mailto:YourEmail@example.com">jobwalla@example.com</a></li>
                    <li>Phone: 9192939495</li>
                    <li>LinkedIn: <a href="https://www.linkedin.com/in/yourlinkedinprofile/" target="_blank">LinkedIn Profile</a></li>
                    <li>Twitter: <a href="https://twitter.com/yourtwitterhandle" target="_blank">Twitter Profile</a></li>
                    <li>Personal Website: <a href="http://www.yourwebsite.com" target="_blank">YourWebsite.com</a></li>
                    <li>Address: Vivekanadhan Street, Adambakkam, Chennai, 600088</li>
                </ul>
            </div>
        </section>
    </center>
    <footer>
        &copy; 2024 JobWalla!. All rights reserved.
    </footer>
</body>

</html>