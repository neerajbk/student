<?php
include 'database.php';

// डेटा लाने के लिए
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM student WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
}

// अपडेट करने के लिए
if (isset($_POST['update_student'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE student SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: view_student.php"); 
    } else {
        echo "<p style='color:red;'>Error updating record: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student | Management System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* बैकग्राउंड वही स्कूल वाली इमेज */
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('school.jpg.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .edit-box {
            background: rgba(255, 255, 255, 0.95);
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            width: 380px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 25px;
            font-weight: 600;
            border-bottom: 3px solid #f39c12; /* Edit के लिए ऑरेंज बॉर्डर */
            display: inline-block;
            padding-bottom: 5px;
        }

        .input-group {
            text-align: left;
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 14px;
            transition: 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #f39c12;
            background: #fffdf9;
        }

        .btn-update {
            width: 100%;
            padding: 12px;
            background: #f39c12; /* सुंदर ऑरेंज कलर */
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        .btn-update:hover {
            background: #e67e22;
            transform: scale(1.02);
        }

        .cancel-link {
            display: block;
            margin-top: 20px;
            color: #7f8c8d;
            text-decoration: none;
            font-size: 14px;
        }

        .cancel-link:hover {
            color: #e74c3c;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="edit-box">
        <h2>Edit Student</h2>
        
        <form method="POST">
            <div class="input-group">
                <label>Full Name</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
            </div>

            <div class="input-group">
                <label>Email Address</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>

            <div class="input-group">
                <label>Phone Number</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required>
            </div>

            <button type="submit" name="update_student" class="btn-update">Update Details</button>
        </form>

        <a href="view_student.php" class="cancel-link">Cancel and Go Back</a>
    </div>

</body>
</html>
