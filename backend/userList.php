<?php
session_start();
if (!isset($_SESSION['admin'])) {
    die("Access denied. Please login as admin.");
}
include 'db.php';
$result = $conn->query("SELECT id, name, email, role FROM users");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registered Users</title>
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background:linear-gradient( to right, #87d3f4ff, #c8f0f4ff) ;
      padding: 40px;
    }
    h2 {
      text-align: center;
      color: #333;
    }
    table {
      border-collapse: collapse;
      width: 80%;
      margin: 20px auto;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px 18px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #007bff;
      color: white;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
  </style>
</head>
<body>

<h2>Registered Users</h2>
<table border="1">
  <tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th></tr>

<?php
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['role']}</td>
          </tr>";
}
?>
</table>

</body>
</html>
