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
$code = "";
$TitleName = "";
$Description = "";
$Start = "";
$End = "";
$errors=array();
$error="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $code = mysqli_real_escape_string($conn, $_POST['title']);
    $TitleName = mysqli_real_escape_string($conn, $_POST['event-title']);
    $Description = mysqli_real_escape_string($conn, $_POST['event-description']);
    $Start = mysqli_real_escape_string($conn, $_POST['event-start-date']);
    $End = mysqli_real_escape_string($conn, $_POST['event-end-date']);

    
    $sql = "INSERT INTO Exam_Patient  VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn,$sql);

    if (!$stmt) {
        die("SQL error: " . mysqli_error($conn));
    }
    else
    {
    mysqli_stmt_bind_param($stmt, "sssss", $code, $TitleName, $Description, $Start, $End);
    $stmt = mysqli_prepare($conn, $sql);
    $result=mysqli_stmt_get_result($stmt);
    if (!$result) {
        header("Location: dashboard1.php");
        exit();
    } else {
        
        $error="Exam failed";
        exit();
    }
}
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
