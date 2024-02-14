<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .profile-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }

        .profile-card img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .profile-info {
            text-align: left;
            color: #333;
        }

        .profile-info p {
            margin-bottom: 10px;
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
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo">
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

    <section>
        <div class="container">
            <div class="profile-card">
                <img src="user-avatar.jpg" alt="User Avatar">
                <div class="profile-info">
                    <h2>User Name</h2>
                    <p>Email: user@example.com</p>
                    <p>User Category: Job Seeker</p>
                    <!-- Add more user profile information as needed -->
                </div>
            </div>
        </div>
    </section>

    <footer>
        &copy; 2024 JobSeeker. All rights reserved.
    </footer>
</body>

</html>