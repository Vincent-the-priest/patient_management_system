<?php
$error="";
include('connect.php');
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{

$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$sql = "SELECT * FROM Registration WHERE Username=? AND Password=?";
$stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"ss",$email,$password);
mysqli_stmt_execute($stmt);
$result=mysqli_stmt_get_result($stmt);
$row=mysqli_fetch_row($result);
$r=mysqli_query($conn,"SELECT Status from Registration where Username='$email' AND Password='$password'");
$roww=mysqli_fetch_row($r);
if ($row>=1)
 {
   if($roww[0]=='user')
    {
    $_SESSION['login_user']=$email;
    header("location:patient.php");
    exit();
    }
    else if($roww[0]=='admin')
    {
        $_SESSION['login_user']=$email;
    header("location:dashboard1.php");
    exit();
    }
    else
    {
        $_SESSION['login_user']=$email;
    header("location:home.php");
    exit();
    }
    
} else {

    $error="Invalid credentials. Please try again.";
}
}
$conn->close();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login pm</title>
    <script>
  function message1(){
   alert("YOU ARE ADMIN?? If yes, Click on OK button OR If no click on cancell");
  }
  function message(){
   alert("Welcome to our system, your institution us welcome to here. Help all patient using this system!!!!");
  }
  </script>
    
    <style>
        body{
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        @media (max-width:300px){
		.header-box {
    width: 70%;
    height: 110px;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgb(19, 19, 26);
    text-shadow: 0 0 2px rgba(16, 240, 8, 0.5);
}
        }
.header-box h1 {
    font-size: 2rem;
    text-transform: uppercase;
}
		.container {
    width: 350px;
    margin: 60px auto;
    padding: 20px;
    border: 1.5px solid #ccc;
    box-shadow: 5px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
	border: blue;
}

.form-group {
    margin-bottom: 10px;
    text-decoration: none;
}
.form-group a{
    text-decoration: none;
    padding: 2px;
}
.form-group a::after{
    color: black;
}
label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 10px;
    border: 0.5px solid #aca;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #6595c9;
    color: #fff;
    padding: 10px;
    border: none;
    cursor: pointer;
}
		.register-btn {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    cursor: pointer;
    text-decoration: none;
}
img{
    height: 180px;
    width: 100px;
    cursor: pointer;
}
.alltime{
        display: flex;
        float: right;
    }
    #hours,#minute,#format,#second{
        padding: 30px;
        margin: 10px;
        background-color: rgb(105, 243, 220);
        font-size: 50px;
    }
    .space{
        padding-top: 20px;
        font-size: 40px;
    }
    .container{
        background-color: rgb(154, 196, 143);
    }

    .toggle-password {
            position: absolute;
            margin-top:5px;
            transform: translatex(-130%);
            cursor: pointer;
        }
        .image-row {
            display: flex;
        }
        .image-row img {
            width: 7.33%; 
            height: auto; 
        }
	</style>
</head>
<body>
    
    <div class="alltime">
        <div id="hours"></div>
        <div class="space">:</div>
        <div id="minute"></div> 
        <div class="space">:</div>
        <div id="second"></div>
        <div id="format"></div>
    </div> 
    <script>
        function time(){
            let t=new Date();
            var a=t.getHours();
            var b=t.getMinutes();
            var c=t.getSeconds();
            var name="vinner";
        document.getElementById('hours').innerHTML= (a>9)?a:'0'+a;
        document.getElementById('minute').innerHTML= (b>9)?b:'0'+b;
        document.getElementById('second').innerHTML= (c>9)?c:'0'+c;
        document.getElementById('format').innerHTML= (a>12)?'PM':'AM';
        }
        setInterval(time,1000);
        time();
        
    </script>
    
	<header class="header-box">
        <img src="logo.jpeg" alt="Logo">
         <h1>Patient management system</h1> 
    </header>
    <hr>
    <div class="container">
        <h1>Log In </h1>
        <form action="" method="post">
         <p>  <?php echo $error;?></p>

            <div class="form-group">
                <label for="email">Username:</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
                <span class="toggle-password" onclick="togglePassword('password')">&#x1F441;</span>
            </div>

            <div class="form-group">
                <input type="submit" value="Login">
            </div> 
        <center><div class="form-group">
            <div>
			You have no account?<a href="registration1.php">Register</a></div>
			</div></center>
        </form>
    </div>
    <script>
        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
        }
    </script>
    <script
 
src="script1.js"></script>

<div class="image-row"><center>
        <img src="health.png" alt="Image 1">
        <img src="rbc.png" alt="Image 2">
        <img src="babyl.png" alt="Image 3">
        <img src="rssb.png" alt="Image 3">
        <img src="unicef.png" alt="Image 3"></center>
    </div>

    
	<hr>
	<footer>
<div class="footer-copyright">
            <center>&copy; 2024 Patient Management. All rights reserved.</center><br>
            <div class="image-row"><br><center>
        <i>In association with:</i><br>
        <img src="holit.png" alt="Image 1">
        <img src="rr.png" alt="Image 2">
        <img src="fda.png" alt="Image 3"></center>
    </div>
        </div>
    </footer>
</body>
</html>
