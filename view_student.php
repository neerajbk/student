<?php
include 'database.php';
$query = "SELECT * FROM student";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; text-align: center; }
        table { width: 80%; margin: 30px auto; border-collapse: collapse; background: white; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        th { background-color: #28a745; color: white; padding: 12px; }
        td { padding: 10px; border-bottom: 1px solid #ddd; }
        tr:hover { background-color: #f1f1f1; }
        .btn-edit { color: #007bff; text-decoration: none; font-weight: bold; }
        .btn-delete { color: #dc3545; text-decoration: none; font-weight: bold; margin-left: 10px; }
        .btn-add { display: inline-block; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>

    <h2>📋 Student List</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn-edit">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Pakka delete karna hai?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <a href="add_student.php" class="btn-add">➕ Add New Student</a>
    <br><br>
    <a href="index.php" style="text-decoration:none; color:grey;">Back to Home</a>

</body>
</html>
