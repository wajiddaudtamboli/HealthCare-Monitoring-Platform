<?php
// Database connection details
$conn = new mysqli("localhost", "root", "", "contact_form");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $your_name = $_POST['your_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Handle file upload
    $file_name = '';
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $upload_dir = 'uploads/';
        $file_name = basename($_FILES['file']['name']);
        $target_file = $upload_dir . $file_name;

        // Move the uploaded file to the desired directory
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
            // File uploaded successfully
        } else {
            echo "Error uploading file.";
        }
    }

    // SQL query to insert form data
    $sql = "INSERT INTO messages (your_name, email, subject, message, file) 
            VALUES ('$your_name', '$email', '$subject', '$message', '$file_name')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to confirmation page
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
