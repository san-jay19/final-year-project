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

if(isset($_POST['loginBtn'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
   
    $login_query_1 = "SELECT * FROM jobseeker WHERE username ='$username' AND password='$password'";
    $login_query_2 = "SELECT * FROM recruiter WHERE username ='$username' AND password='$password'";

    $details_query_1 = "SELECT * FROM jobseekerdetails WHERE username='$username' ";
    $details_query_2 = "SELECT * FROM recruiterdetails WHERE username='$username' ";
    $details_query_3 = "SELECT name,phoneno,email,address,experience,education,certifications,skills FROM jobseekerdetails WHERE username='$username'";

    $login_query_1_run = mysqli_query($conn , $login_query_1);
    $login_query_2_run = mysqli_query($conn , $login_query_2);

    $details_query_1_run = mysqli_query($conn, $details_query_1);
    $details_query_2_run = mysqli_query($conn, $details_query_2);
    $details_query_3_run = mysqli_query($conn, $details_query_3);

    if(mysqli_num_rows($login_query_1_run) > 0) {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_1_run);

        $userdetails = mysqli_fetch_array($details_query_1_run);

        $username = $userdata['username'];
        $useremail = $userdata['email'];
        $usercategory = $userdata['category'];

        $details_username = $userdetails['username'];
        $details_name = $userdetails['name'];
        $details_phoneno = $userdetails['phoneno'];
        $details_email = $userdetails['email'];
        $details_address = $userdetails['address'];
        $details_experience = $userdetails['experience'];
        $details_education = $userdetails['education'];
        $details_certifications = $userdetails['certifications'];
        $details_skills = $userdetails['skills'];

        $_SESSION['auth_user'] = [
            'username' => $username,
            'email' => $useremail,
            'category' =>$usercategory
        ];

        $_SESSION['user_details'] = [
            'username' => $details_username,
            'name' => $details_name,
            'phoneno' => $details_phoneno,
            'email' => $details_email,
            'address' => $details_address,
            'experience' => $details_experience,
            'education' => $details_education,
            'certifications' => $details_certifications,
            'skills' => $details_skills
        ];

        $_SESSION['message'] = "Logged In Successfully";
        if(mysqli_num_rows($details_query_3_run) > 0){
            header('Location: index.php');
        }
        else{
            header('Location: jobSeekerProfileDetailsForm.php');
        }
       
    }

    elseif (mysqli_num_rows($login_query_2_run) > 0) {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_2_run);

        $username = $userdata['username'];
        $useremail = $user['email'];
        $usercategory = $userdata['category'];

        $_SESSION['auth_user'] = [
            'username' => $username,
            'email' => $useremail,
            'category' =>$usercategory
        ];


        $_SESSION['message'] = "Logged In Successfully";
        header('Location: index.php');
    }

    else{
        $_SESSION['message'] = "Invalid Credentials";
        header('Location: userLogin.php');
    }

}
?>