<?php
include "auth.php";

if(isset($_SESSION['auth'])){
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

        body{
            background-image: url("img.jpg");
        }
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
    </style>
</head>
<body>
<?php include "navBar.php"; ?>
    <center>
<br>
<h2>Search for Jobs</h2>
<br>
<input type="text" id="searchInput" placeholder="Search...">
<br><br>

<table id="myTable">
    <thead>
        <tr>
            <th>Company Name</th>
            <th>Jobs Currently Offering</th>
            <th>View Details</th>
            <th>Apply</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require "connection.php";
        $sql = "SELECT username,companyname, job,job_id FROM job_listings";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["companyname"] . "</td>";
                echo "<td>" . $row["job"] . "</td>";
                echo '<td><div>'?><a href="jobDetails.php?id=<?=$row["job_id"]?>".<?='>click here to view details</a></div><center></td>'?>
                <?php echo '<td><div>'?><a href="apply.php?id=<?=$row["job_id"]?>".<?php echo '>Apply</a></div><center></td>'?>
                <?php
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No records found</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>

<script>
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1]; 
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
<?php include "footer.php";?>
</body>
</html>