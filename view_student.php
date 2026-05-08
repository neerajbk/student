<?php
include 'database.php';
$query = "SELECT * FROM student";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List | Management System</title>
    <style>
        body { 
            font-family: 'Segoe UI', Arial, sans-serif; 
            /* आपकी स्कूल वाली इमेज यहाँ लगा दी है */
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('school.jpg.jpg') no-repeat center center fixed;
            background-size: cover;
            text-align: center; 
            margin: 0;
            padding: 20px;
        }
        .main-container {
            background: rgba(255, 255, 255, 0.95);
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        }
        table { 
            width: 100%; 
            margin: 20px auto; 
            border-collapse: collapse; 
            background: white; 
        }
        th { background-color: #28a745; color: white; padding: 15px; font-size: 16px; }
        td { padding: 12px; border-bottom: 1px solid #ddd; color: #333; }
        tr:hover { background-color: #f8f9fa; }
        
        .btn-edit { color: #007bff; text-decoration: none; font-weight: bold; }
        .btn-delete { color: #dc3545; text-decoration: none; font-weight: bold; margin-left: 10px; }
        
        .btn-add { 
            display: inline-block; 
            padding: 12px 25px; 
            background: #007bff; 
            color: white; 
            text-decoration: none; 
            border-radius: 8px; 
            margin-top: 10px;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-add:hover { background: #0056b3; transform: translateY(-2px); }
        
        h2 { color: #2c3e50; margin-top: 0; }
    </style>
</head>
<body>

<div class="main-container">
    <h2>📋 Student List</h2>

    <table>
        <tr>
            <th>S.No</th> <!-- ID की जगह S.No लिखा -->
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php 
        $serial = 1; // 1. यहाँ एक गिनती शुरू करने वाला वेरिएबल बनाया
        while($row = mysqli_fetch_assoc($result)) { 
        ?>
        <tr>
            <!-- 2. यहाँ डेटाबेस की ID की जगह हमारा $serial नंबर दिखेगा -->
            <td><strong><?php echo $serial++; ?></strong></td> 
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td>
                <!-- यहाँ ध्यान दें: लिंक में ID ही जाएगी ताकि सही रिकॉर्ड खुले -->
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn-edit">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Do you really want to delete this student?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <a href="add_student.php" class="btn-add">➕ Add New Student</a>
    <br><br>
    <a href="index.php" style="text-decoration:none; color:#7f8c8d; font-weight:bold;">← Back to Home</a>
</div>

</body>
</html>
