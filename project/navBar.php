<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
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

        body,
        h1,
        h2,
        h3,
        p,
        ul {
            margin: 0;
            padding: 0;
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
                <li><a href="userLogin.php">Login</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>

