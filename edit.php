<?php
include 'db.php';
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM employees WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head><title>Edit Employee</title></head>
<body>
  <h2>Edit Employee</h2>
  <form method="post">
    Department: <input type="text" name="department" value="<?= $row['department'] ?>"><br>
    Salary: <input type="text" name="salary" value="<?= $row['salary'] ?>"><br>
    <input type="submit" name="update" value="Update">
  </form>

  <?php
  if(isset($_POST['update'])){
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    $conn->query("UPDATE employees SET department='$department', salary='$salary' WHERE id=$id");
    echo "Employee updated!";
  }
  ?>
</body>
</html>
