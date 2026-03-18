<?php
include 'database.php';

// 1. पुराने डेटा को बॉक्स में दिखाने के लिए
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM student WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
}

// 2. नया डेटा अपडेट करने के लिए
if (isset($_POST['update_student'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE student SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: view_student.php"); // वापस लिस्ट पर भेजें
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Edit Student Details</h2>
    <form method="POST">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required><br><br>
        <button type="submit" name="update_student">Update Student</button>
        <a href="view_student.php">Cancel</a>
    </form>
</body>
</html>
