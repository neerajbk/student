 <?php
session_start();
if(!isset($_SESSION['user'])){
header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student System</title>
    <style>
    
    body { 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        
        background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('school.jpg.jpg') no-repeat center center fixed;
        background-size: cover;
        text-align: center; 
        margin: 0; 
        padding-top: 100px;
        height: 100vh;
        box-sizing: border-box;
    }

    h1 { 
        color: #ffffff; 
        text-shadow: 2px 2px 8px rgba(0,0,0,0.8); 
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px; 
        font-size: 40px;
    }

    p { 
        color: #ffffff; 
        font-size: 22px; 
        font-weight: 500; 
        text-shadow: 1px 1px 4px rgba(0,0,0,0.7);
        margin-bottom: 30px;
    }

    .btn { 
        padding: 15px 30px; 
        color: white; 
        text-decoration: none; 
        border-radius: 8px; 
        margin: 10px; 
        display: inline-block;
        font-weight: bold;
        font-size: 18px;
        transition: 0.3s;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    .btn:hover {
        transform: translateY(-3px); 
        box-shadow: 0 6px 20px rgba(0,0,0,0.4);
    }

    .btn-add { background: #007bff; }
    .btn-add:hover { background: #0056b3; }

    .btn-view { background: #28a745; }
    .btn-view:hover { background: #218838; }


  
    </style>
</head>
<body>
    <h1>🎓 Student Management System</h1>
    <p>Welcome! What would you like to do today?</p>
    
    <a href="add_student.php" class="btn btn-add">Add New Student</a>
    <a href="view_student.php" class="btn btn-view">View Student List</a>
</body>
</html>
