<?php
// Database connection details
$conn = new mysqli("localhost", "root", "", "online_consultation");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $company_name = $_POST['company_name'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $business = $_POST['business'];
    $remarks = $_POST['remarks'];

    // SQL query to insert form data
    $sql = "INSERT INTO consultations (name, company_name, designation, email, mobile_no, city, country, business, remarks)
            VALUES ('$name', '$company_name', '$designation', '$email', '$mobile_no', '$city', '$country', '$business', '$remarks')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to success page
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
