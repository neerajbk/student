<?php 
include 'database.php'; // सुनिश्चित करें कि इस फाइल का नाम database.php ही है

if (isset($_POST['save_student'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // SQL Query
    $query = "INSERT INTO student (name, email, phone) VALUES ('$name', '$email', '$phone')";
    
    if (mysqli_query($conn, $query)) {
        echo "<p style='color:green; font-weight:bold;'>Student Saved Successfully!</p>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management</title>
</head>
<body>
    <h2>Add New Student</h2>
    
    <!-- Form tag यहाँ शुरू हो रहा है -->
    <form method="POST" action="add_student.php">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required><br><br>

        <button type="submit" name="save_student">Save Student</button>
    </form> <!-- Form को यहाँ बंद करना ज़रूरी था -->

    <br>
    <!-- सुनिश्चित करें कि view_students.php नाम की फाइल इसी फोल्डर में है -->
    <a href="view_student.php">Back to List</a>
</body>
</html>
