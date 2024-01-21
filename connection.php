<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
$server = "localhost";
$users = "root";
$pass ="";
$db= "website";
$conn = mysqli_connect($server, $users, $pass, $db);
if (!$conn) {
    die("Connection failed: ");
}
$educationTitle = "";
$status = "";
$firstName = "";
$lastName = "";
$institutionEmail = "";
$institutionFullName = "";
$institutionLocation = "";
$email = "";
$password = "";
$confirmPassword = "";
$errors=array();
$error="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $educationTitle = mysqli_real_escape_string($conn, $_POST['educationtitle']);
    $status = mysqli_real_escape_string($conn, $_POST['drop_up']);
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $institutionEmail = mysqli_real_escape_string($conn, $_POST['institutionEmail']);
    $institutionFullName = mysqli_real_escape_string($conn, $_POST['institutionFullName']);
    $institutionLocation = mysqli_real_escape_string($conn, $_POST['institutionLocation']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

    
    $sql = "INSERT INTO Registration  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn,$sql);

    if (!$stmt) {
        die("SQL error: " . mysqli_error($conn));
    }
    else
    {
    mysqli_stmt_bind_param($stmt, "sssssssss", $educationTitle, $status, $firstName, $lastName, $institutionEmail, $institutionFullName, $institutionLocation, $email, $password);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    if (!$result) {
        header("Location: login.php");
        exit();
    } else {
        
        $error="Registiration failed";
        exit();
    }
}
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
