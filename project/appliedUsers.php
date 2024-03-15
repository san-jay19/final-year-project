<?php 
include "auth.php";

if(isset($_SESSION['auth'])){
    if($_SESSION['auth_user']['category'] <> "recruiter"){
        $_SESSION['message'] = "Access Denied, You are not allowed to access this page!";
        header('Location: index.php');
        exit();
    }
}
else{
    $_SESSION['message'] = "Access Denied, Please Login!";
    header('Location: userLogin.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Search</title>
    <style>

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
        body{
            background-image: url("img.jpg");
        }
    </style>
</head>
<body><?php include "navBar.php"; ?><center>

<br>
<h2>Search for Seekers</h2>
<br>
<input type="text" id="searchInput" placeholder="Search...">
<br><br>
<form action="seekerDetails.php" method="get">
<table id="myTable">
    <thead>
        <tr>
            <th>Job Seekers</th>
            <th>View</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $sql = "SELECT username FROM applied_jobs WHERE job_id='$id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            }

        if ($result->num_rows > 0) {
            foreach($result as $username) {
                echo "<tr>";
                $name = implode(" ",$username);
                echo "<td>" . implode(" ",$username) . "</td>";
                echo '<td><div><center>'?><a href="seekerDetails.php?id=<?=$name?>".<?='>click here to view details</a></div><center></td><tr>'?>
                <?php //echo "</tr>";?>
                <?php
            }
        } 
        $conn->close();
        ?>
    </tbody>
</table>
</form>
<script>
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0]; 
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    document.getElementById("searchInput").addEventListener("input", searchTable);
</script>
</center>
<?php include "footer.php"; ?>
</body>
</html>