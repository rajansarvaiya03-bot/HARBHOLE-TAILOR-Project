<?php
 include('db.php');
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $con->real_escape_string($_POST['name']);
    $email   = $con->real_escape_string($_POST['email']);
    $message = $con->real_escape_string($_POST['message']);

    $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name','$email','$message')";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Thank you for your feedback!');window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
