<?php 
?>

<!--Starting registration form.html-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PM-Registration</title>
    <style>
        body{
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
		.container {
    width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 0 5px rgba(100, 230, 40, 0.2);
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.container a{
    text-decoration: none;
    color: rgb(234, 0, 255);
    
}
.container{
    background-color: #b3d3f5;
}
.container a:hover{
    color: #1f7fe6;
    padding: 15px;
    background-color: rgb(247, 13, 13);
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.containe img {
    width: 70px;
    height: 132px;
}
h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input, textarea {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

textarea {
    height: 70px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff
		}
		.footer {
    background-color: #f8f9fa;
    padding: 20px;
    text-align: center;
}
.footer{
    background-color: #274f5c;
}
.footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-item {
    margin: 0 20px;
}

.footer-item h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

.footer-item ul {
    list-style: none;
    padding: 0;
    margin: 0;
}


.social-media a {
    color: #333;
    font-size: 20px;
}

#header {
  animation: vibrate 2s linear infinite;
  color: #007bff;
}

@keyframes vibrate {
  0% { transform: translateX(0); }
  50% { transform: translateX(5px); }
  100% { transform: translateX(0); }
}
.toggle-password {
            position: absolute;
            margin-top:5px;
            transform: translatex(-130%);
            cursor: pointer;
        }
	</style>
</head>
<body><header id="header">
    <h1>PATIENT MANAGEMENT</h1>
  </header>
  
    <div class="containe"> <img src="logo.jpeg" alt="PMS logo"></div>
    <div class="container">
        <h1>Registration room</h1>
        <form action="connection.php" method='POST'>

            <div class="form-group">
                <label for="educationTitle">ID:</label>
                <input type="text" id="educationtitle" name="educationtitle" placeholder="Enter your Nationality">
            </div>

            <div class="form-group">
                <label for="selection">Status:</label>
                <select name="drop_up">
                    <option value="">--select--</option>
                <option value="admin"><b>ADMIN</b></option>
                <option value="user">NURSE</option>
                <option value="public">PATIENT</option>
                </select>
            </div>

            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" placeholder="Enter First Name">
            </div>

            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName"  placeholder="Enter Last Name">
            </div>

            <div class="form-group">
                <label for="institutionEmail">Institution Email:</label>
                <input type="email" id="institutionEmail" name="institutionEmail" placeholder="Enter Institution Email">
            </div>

            <div class="form-group">
                <label for="institutionFullName">Full Name of Institution:</label>
                <input type="text" id="institutionFullName" name="institutionFullName" <?php echo $lstname;?> placeholder="Enter Full Name of Institution">
            </div>

            <div class="form-group">
                <label for="institutionLocation">Location:</label>
                <input type="text" id="institutionLocation" name="institutionLocation" <?php echo $location;?> placeholder="Enter Institution Location">
            </div>

            <div class="form-group">
                <label for="institutionEmail">Username:</label>
                <input type="email" name="Email" placeholder="Enter your Email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"<?php echo $password;?> placeholder="Enter Password">
                <span class="toggle-password" onclick="togglePassword('password')">&#x1F441;</span>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                <span class="toggle-password" onclick="togglePassword('confirmPassword')">&#x1F441;</span>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Register">
            </div>

            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
    <script>
        function togglePassword(inputId) {
            var x = document.getElementById(inputId);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
			<hr>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-item">
                <h2>Contact Us</h2>
                <ul>
                    <li><img src=""></a></li>
                    <li><a href="telto:+250789368709">Phone: +250789368709</a></li>
                    <li><img src=""><a href="mailto:vincentpriest8@gmail.com">E-mail</a></li>
                </ul>
            </div>
            <div class="footer-item">
                <h2>About Us</h2>
                <p>e-Healthly management Diabettes hypertensions and AIDS</p>
            <p>&copy; Patient management. All rights reserved.</p>
    </footer>
</body>
</html>
