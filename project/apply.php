<?php
session_start();
include "connection.php";

if($_GET['id']){
    $id=$_GET['id'];
    $username = $_SESSION['auth_user']['username'];
    $insert_query = "INSERT INTO applied_jobs(job_id,username) VALUES('$id','$username')";
        $insert_query_run = mysqli_query($conn,$insert_query);

        if($insert_query_run){
            $_SESSION['message'] = "Applied Successfully Successfully";
            header('Location: jobSeekerProfileDetails.php');
        }
        else{
            $_SESSION['message'] = "Application Denied";
            header('Location: viewJobs.php');
        }

    }

?>