<<?php
// Retrieve form data
$email = $_POST['Username'];
$password = $_POST['password'];

// Perform SQL query (replace 'users' with your actual table name)
$sql = "SELECT * FROM Registration WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

// Check if the user exists
if ($result->num_rows > 0) {
    // User found, perform login logic
    echo "Login successful!";
    // You can redirect the user to a different page or perform other actions here
} else {
    // User not found, display an error message
    echo "Invalid credentials. Please try again.";
}

// Close the database connection
$conn->close();
?>
