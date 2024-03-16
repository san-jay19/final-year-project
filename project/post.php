<?php 
require "connection.php";
require "auth.php";

if(isset($_POST['submit'])){
    $username = $_SESSION['auth_user']['username'];
    $cname = $_SESSION['user_details']['name'];
    $job = $_POST['job'];
    $location = $_POST['location'];
    $insert_query = "INSERT INTO job_listings(username,companyname,job,location) VALUES('$username','$cname','$job','$location')";
    $insert_query_run = mysqli_query($conn,$insert_query);
    header('Location: jobDetailsForm.php');
}

if(isset($_POST['jb_submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['fullName']);
    $username = mysqli_real_escape_string($conn,$_SESSION['auth_user']['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $workExperience = mysqli_real_escape_string($conn,$_POST['workExperience']);
    $certification = mysqli_real_escape_string($conn,$_POST['certifications']);
    $education = mysqli_real_escape_string($conn,$_POST['education']);
    $skills =  mysqli_real_escape_string($conn,$_POST['skills']);
    $pic= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $insert_query = "INSERT INTO jobseekerdetails (username, name, phoneno, email, address, experience, education, certifications, skills,pic) VALUES ('$username','$name','$phone','$email','$address','$workExperience','$education','$certification','$skills','$pic')";
    $insert_query_run = mysqli_query($conn,$insert_query);

    if (!($insert_query_run)) {
        echo("Error description: " . mysqli_error($conn));
        header('Location: index.php');
      }
      else{
        header('Location: jobSeekerProfileDetails.php');
      }
}

if(isset($_POST['r_submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['fullName']);
    $username = mysqli_real_escape_string($conn,$_SESSION['auth_user']['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $about = mysqli_real_escape_string($conn,$_POST['about']);
    $ccv = mysqli_real_escape_string($conn,$_POST['ccv']);
    $pic= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $insert_query = "INSERT INTO recruiterdetails(name,username,email,phoneno,address,about,ccv,pic) VALUES('$name','$username','$email','$phone','$address','$about','$ccv','$pic')";
    $insert_query_run = mysqli_query($conn,$insert_query);

    if (!($insert_query_run)) {
        echo("Error description: " . mysqli_error($conn));
      }
      header('Location: recruiterProfileDetails.php');
}



if(isset($_POST['jd_submit'])){
    $roleName = mysqli_real_escape_string($conn,$_POST['roleName']);
    $jd = mysqli_real_escape_string($conn,$_POST['jd']);
    $requirements = mysqli_real_escape_string($conn,$_POST['requirements']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $location = mysqli_real_escape_string($conn,$_POST['location']);
    $salary = mysqli_real_escape_string($conn,$_POST['salary']);
    
    $insert_query = "INSERT INTO jobdetails(name,description,location,requirements,salary,email) VALUES('$roleName','$jd','$location','$requirements','$salary','$email')";
    $insert_query_run = mysqli_query($conn,$insert_query);

    if (!($insert_query_run)) {
        echo("Error description: " . mysqli_error($conn));
      }

}

?>