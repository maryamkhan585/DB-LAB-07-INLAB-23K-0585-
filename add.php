<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head><title>Add Employee</title></head>
<body>
  <h2>Add New Employee</h2>
  <form method="post">
    Email: <input type="text" name="email"><br>
    Name: <input type="text" name="name"><br>
    Department: <input type="text" name="department"><br>
    Designation: <input type="text" name="designation"><br>
    Salary: <input type="text" name="salary"><br>
    <input type="submit" name="submit" value="Add Employee">
  </form>

  <?php
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employees (email, name, department, designation, salary)
            VALUES ('$email', '$name', '$department', '$designation', '$salary')";
    if($conn->query($sql)){
      echo "Employee added successfully!";
    } else {
      echo "Error: " . $conn->error;
    }
  }
  ?>
</body>
</html>
