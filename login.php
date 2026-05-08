<?php
session_start();
include "database.php"; 

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username == 'admin' && $password == '4567') {
        $_SESSION['user'] = $username;

        
        echo "<script>
                alert('Login Successful.......');
                window.location.href = 'index.php';
              </script>";
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management - Login</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('school.jpg.jpg') no-repeat center center fixed; 
        background-size: cover; 
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
    }

    .login-box {
        
        background: rgba(255, 255, 255, 0.9); 
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        width: 380px;
        text-align: center;
    }

    .login-box img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 20px;
        object-fit: cover;
    }

    h2 { color: #333; margin-bottom: 25px; font-weight: 600; }

    input {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
    }

    .btn-login {
        background: #6c5ce7;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-login:hover { background: #a29bfe; }

    .error { color: #e74c3c; font-size: 14px; margin-bottom: 10px; }
</style>


</head>
<body>

<div class="login-box">
    
    <img src="school.jpg.jpg" alt="Admin Logo">
    
    <h2>Student Portal</h2>

    <?php if(isset($error)) { echo "<p class='error'>$error</p>"; } ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type="submit" name="login" value="LOGIN" class="btn-login">
    </form>
</div>
    

</body>
</html>
