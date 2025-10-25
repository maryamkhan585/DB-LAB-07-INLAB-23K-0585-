<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Employee Payroll System</title>
</head>
<body>
  <h2>Employee Payroll</h2>
  <a href="add.php">Add New Employee</a>
  <br><br>

  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Email</th>
      <th>Name</th>
      <th>Department</th>
      <th>Designation</th>
      <th>Salary</th>
      <th>Actions</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM employees");
    while($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['email']}</td>
        <td>{$row['name']}</td>
        <td>{$row['department']}</td>
        <td>{$row['designation']}</td>
        <td>{$row['salary']}</td>
        <td>
          <a href='edit.php?id={$row['id']}'>Edit</a> |
          <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
      </tr>";
    }
    ?>
  </table>
</body>
</html>
