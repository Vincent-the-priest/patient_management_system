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
$firstName = "";
$lastName = "";
$patientId = "";
$sector = "";
$district = "";
$phone = "";
$dob = "";
$gender = "";
$errors=array();
$error="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $patientId = mysqli_real_escape_string($conn, $_POST['patientId']);
    $sector = mysqli_real_escape_string($conn, $_POST['sector']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    
$sql = "INSERT INTO Patient VALUES(?, ?, ?, ?, ?,?,?,?)";
$stmt = mysqli_prepare($conn,$sql);

if(!$stmt){
die("SQL error: " . mysql_error($conn));
}


else 
{
    mysqli_stmt_bind_param($stmt, "ssssssss", $firstName, $lastName, $patientId, $sector, $district, $phone, $dob, $gender);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    if (!$result) {
        header("Location: dptinside.php");
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
