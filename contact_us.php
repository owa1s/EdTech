<?php
// contact_us.php

// 1. Database connection parameters
$servername = "localhost";
$username = "root";    // default XAMPP MySQL user:contentReference[oaicite:1]{index=1}
$password = "";
$dbname = "education_site";  // name of  the database

// 2. Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 3. Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 4. Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize the mobile number from POST data
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']); 
    // mysqli_real_escape_string() escapes special characters:contentReference[oaicite:2]{index=2}

    // 5. Insert into database
    $sql = "INSERT INTO contacts (mobile) VALUES ('$mobile')"; 
    // INSERT INTO adds a new record to the table:contentReference[oaicite:3]{index=3}
    
    if (mysqli_query($conn, $sql)) {
        echo "<p style='color: green;'>Thank you! Your number has been saved.</p>";
    } else {
        echo "<p style='color: red;'>Error: " . mysqli_error($conn) . "</p>";
    }
}

// 6. Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        h1 { color: #333; }
        form { max-width: 300px; }
        input[type="text"] { width: 100%; padding: 8px; margin: 8px 0; }
        input[type="submit"] { padding: 8px 16px; }
        a { text-decoration: none; color: blue; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Contact Us</h1>
    <p>Please enter your mobile number below:</p>
    <form method="POST" action="">
        <input type="text" name="mobile" placeholder="Mobile Number" required>
        <br>
        <input type="submit" value="Submit">
    </form>
    <p><a href="courses_offered.php">Back to Courses Offered</a></p>
</body>
</html>
