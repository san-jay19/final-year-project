<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>
    <style>
        body, h1, h2, h3, p, ul {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-image: url("img.jpg");
            background-size: cover;
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
            width: 60%;
            margin: 0 auto;
        }

        .profile-card img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .profile-info {
            text-align: left;
            color: #333;
        }

        .profile-info h2 {
            color: #555;
            margin-bottom: 10px;
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
        .editable {
            border: 1px solid #ddd;
            padding: 8px;
            border-radius: 4px;
            margin-bottom: 10px;
            width: 100%;
        }

        .edit-button {
            background-color: #333;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .edit-button:hover {
            background-color: #555;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 60%;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
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
    </style>
</head>
<body>
<?php include('navBar.php')?>

    <section>
        <div class="container">
            <div class="form-container">
                <h2>Create Your Profile</h2>
               <div class="profile-card">
                <img src="user-avatar.jpg" alt="User Avatar">
                <div class="profile-info">
                    <h2 contenteditable="true">User Name</h2>
                    <p>Email: <span class="editable" contenteditable="true">user@jobwalla.com</span></p>
                    <p>User Category: <span class="editable" contenteditable="true">Job Seeker</span></p>
                    <h2>Education</h2>
                    <p>Degree: <span class="editable" contenteditable="true">Bachelor of Science in Computer Science</span></p>
                    <p>School: <span class="editable" contenteditable="true">University of Example</span></p>
                    <p>Graduation Year: <span class="editable" contenteditable="true">2022</span></p>
                    <h2>Work Experience</h2>
                    <p>Job Title: <span class="editable" contenteditable="true">Software Developer</span></p>
                    <p>Company: <span class="editable" contenteditable="true">Boomer Tech</span></p>
                    <p>Duration: <span class="editable" contenteditable="true">2019 - Present</span></p>
                </div>
                <button class="edit-button" onclick="enableEditing()">Edit</button>
            </div>

                    <div class="form-group">
                        <button type="submit">Create Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>
</body>
</html>