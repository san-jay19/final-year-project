<?php
session_start();
include('connection.php');

if(isset($_POST['register_btn'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $cpassword = mysqli_real_escape_string($conn,$_POST['password']);
    $usercategory = mysqli_real_escape_string($conn,$_POST['user_category']);

    if(($password == $cpassword) && ($usercategory == "job_seeker")){
        $insert_query = "INSERT INTO jobseeker(name,username,email,password,category) VALUES('$name','$username','$email','$password','$usercategory')";
        $insert_query_run = mysqli_query($conn,$insert_query);

        if($insert_query_run){
            $_SESSION['message'] = "Registered Successfully";
            header('Location: userLogin.php');
       }
        else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: userSignIn.php');
        }

    }


    if(($password == $cpassword) && ($usercategory == "recruiter")){
        $insert_query = "INSERT INTO recruiter(name,username,email,password,category) VALUES('$name','$username','$email','$password','$usercategory')";
        $insert_query_run = mysqli_query($conn,$insert_query);

        if($insert_query_run){
            $_SESSION['message'] = "Registered Successfully";
            header('Location: userLogin.php');
        }
        else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: userSignIn.php');
        }

    }
}

?>