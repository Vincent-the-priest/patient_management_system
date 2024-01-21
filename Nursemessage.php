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

$status= "";
$event = "";
$phone = "";
$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$status = mysqli_real_escape_string($conn, $_POST['drop_up']);
$event = mysqli_real_escape_string($conn, $_POST['name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO Nurse_message VALUES(?,?,?,?)";
$stmt = mysqli_prepare($conn,$sql);

if (!$stmt) {
        die("SQL error: " . mysqli_error($conn));
    }
    else
    {
    mysqli_stmt_bind_param($stmt, "ssss", $status, $event, $phone, $message);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    if (!$result) {
        header("Location: home.php");
        exit();
    } else {
        
        $error="Something wrong try again!";
        exit();
    }
}
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
?>
