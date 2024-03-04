<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>


.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 0.5px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
 
  margin-top: 0.5px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

    </style>
   
</head>
<body>
<div class="topnav">
<div class="search-container">

    <form action="post.php">
      <input type="text" placeholder="Search.." name="searchBox">
      <button type="submit" name="search" value="search">Search</button>
    </form>
  </div>
</div>
</body>
</html>