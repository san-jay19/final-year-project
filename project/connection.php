 <?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "jobportal";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "error";
}
else{
    echo "connected";
}
?>


