<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
       
    </style>
</head>
<body>
    <center>
<h2>Your Jobs</h2>

<input type="text" id="searchInput" placeholder="Search...">


<table id="myTable">
    <thead>
        <tr>
            <th>Company Name</th>
            <th>Jobs Currently Offering</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require "connection.php";
        $username = $_SESSION['auth_user']['username'];
        $sql = "SELECT username, job FROM job_listings WHERE username='$username'";
        $result = $conn->query($sql);
        
    if (!($result)) {
        echo("Error description: " . mysqli_error($conn));
      }
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["job"] . "</td>";
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

</body>
</html>