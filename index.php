 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student System</title>
    <style>
        /* CSS कोड यहाँ से शुरू */
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            text-align: center; 
            margin-top: 100px; 
            background-color: #f4f7f6;
        }
        h1 { color: #333; }
        .btn { 
            padding: 15px 25px; 
            color: white; 
            text-decoration: none; 
            border-radius: 8px; 
            margin: 10px; 
            display: inline-block;
            font-weight: bold;
        }
        .btn-add { background: #007bff; }
        .btn-view { background: #28a745; }
        /* CSS कोड यहाँ खत्म */
    </style>
</head>
<body>
    <h1>🎓 Student Management System</h1>
    <p>Welcome! What would you like to do today?</p>
    
    <a href="add_student.php" class="btn btn-add">Add New Student</a>
    <a href="view_student.php" class="btn btn-view">View Student List</a>
</body>
</html>
