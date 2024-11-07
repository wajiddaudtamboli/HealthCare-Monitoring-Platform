<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light background */
        }
        .confirmation-container {
            background-color: #fff; /* White background for the container */
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }
        .success-message {
            color: #28a745; /* Bootstrap success color */
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container mt-5 d-flex justify-content-center">
    <div class="confirmation-container text-center">
        <h1 class="success-message">Success!</h1>
        <p style="font-size: 18px;">Your message has been sent successfully!</p>
        <div>
            <a href="index.html" class="btn btn-primary">Go Back to Form</a>
        </div>
    </div>
</div>

</body>
</html>
