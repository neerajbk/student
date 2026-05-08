<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    
    $sql = "DELETE FROM student WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        
        header("Location: view_student.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
