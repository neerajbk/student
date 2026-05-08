<?php 
include 'database.php'; 

$message = ""; // मैसेज स्टोर करने के लिए वेरिएबल

if (isset($_POST['save_student'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // SQL Query
    $query = "INSERT INTO student (name, email, phone) VALUES ('$name', '$email', '$phone')";
    
    if (mysqli_query($conn, $query)) {
        $message = "<p class='success'>✅ Student Saved Successfully!</p>";
    } else {
        $message = "<p class='error'>❌ Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student | Management System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* आपकी वही स्कूल वाली बैकग्राउंड इमेज */
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('school.jpg.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .form-box {
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
            border-bottom: 3px solid #6c5ce7;
            display: inline-block;
            padding-bottom: 5px;
        }

        .input-group {
            text-align: left;
            margin-bottom: 15px;
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
        }

        input:focus {
            outline: none;
            border-color: #6c5ce7;
            background: #f9f9ff;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #6c5ce7;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background: #5649c1;
            transform: scale(1.02);
        }

        .success { color: #27ae60; font-weight: bold; margin-bottom: 15px; }
        .error { color: #e74c3c; font-weight: bold; margin-bottom: 15px; }

        .back-btn {
            display: block;
            margin-top: 20px;
            color: #6c5ce7;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        .back-btn:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <div class="form-box">
        <h2>Add Student</h2>
        
        <!-- यहाँ सफलता या एरर का मैसेज दिखेगा -->
        <?php echo $message; ?>

        <form method="POST" action="add_student.php">
            <div class="input-group">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Enter student name" required>
            </div>

            <div class="input-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="example@mail.com" required>
            </div>

            <div class="input-group">
                <label>Phone Number</label>
                <input type="text" name="phone" placeholder="Enter phone number" required>
            </div>

            <button type="submit" name="save_student">Save Student Data</button>
        </form>

        <a href="view_student.php" class="back-btn">← Back to Student List</a>
    </div>

</body>
</html>
