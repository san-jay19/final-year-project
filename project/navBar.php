

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
        a:hover ,a:focus {
  color: grey;
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
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
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
               
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php 
                if(isset($_SESSION['auth']))
                {
                    ?>
                    <li class="dropdown">
                    <a href="#" class="dropbtn"><?= $_SESSION['auth_user']['username'] ?></a>
                    <div class="dropdown-content">
                        <?php if(isset($_SESSION['auth_user']['category'])){?>
                            
                    <?php if($_SESSION['auth_user']['category']=='recruiter'){?>
                    <a href="recruiterProfileDetails.php">View Profile</a>
                    <a href="jobListing.php">Post Jobs</a>
                    <a href="viewUsers.php">Candidates Search</a>
                    <?php }?>

                    <?php if($_SESSION['auth_user']['category'] =='job_seeker'){?>
                    <a href="viewJobs.php">Jobs</a>
                    <a href="jobSeekerProfileDetails.php">View Profile</a>
                    <?php }?>
                    <?php }?>
                        <a href="userLogout.php">Logout</a>
                    </div>
                </li>
                <?php
                }
                else{
                    ?>
                     <li><a href="jobSeekers.php">Job Seekers</a></li>
                    <li><a href="employers.php">Recruiters</a></li>
                    <li><a href="userSignIn.php">Register</a></li>
                    <li><a href="userLogin.php">Login</a></li>
                    
                    <?php
                }
                    ?>
                    
                
            </ul>
        </nav>
    </header>
</body>

</html>

