<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // डेटा डिलीट करने की क्वेरी
    $sql = "DELETE FROM student WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        // डिलीट होने के बाद वापस लिस्ट पर भेज देगा
        header("Location: view_student.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
