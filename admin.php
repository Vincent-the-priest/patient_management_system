<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin login pm</title>
  <script>
  function message(){
   alert("welcome boss to your responsibility of your institution account system!!!!!");
  }
  </script>
  <style>
  body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  background-color: #1f4d5f;
}

.login-container {
  width: 400px;
  margin: 50px auto;
  padding: 20px;
  border: 1px solid #ccc;
  background-image: url(patie.png);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"], input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
}

a {
  color: #007bff;
  text-decoration: none;
}
.footer {
    background-color: #f8f9fa;
    padding: 20px;
    text-align: center;
    background-image: url(doctor.webp);
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

.footer-item li {
    margin-bottom: 5px;
}

.footer-item a {
    color: #333;
    text-decoration: none;
}

.footer-copyright {
    margin-top: 20px;
    text-align: center;
    font-size: 12px;
}

.social-media {
    display: flex;
    justify-content: space-between;
    margin: 0;
    padding: 0;
}

.social-media li {
    margin: 0 5px;
}

.social-media a {
    color: #333;
    font-size: 20px;
}
img{
  width: 81px;
  height: 139px;
  position: fixed;
}
  </style>
</head>
<body>
  <img src="logo.png" alt="PMS Logo">

  <div class="login-container">
    <h1>Admin Login</h1>

    <form action="login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
<label for="code">code:</label>
      <input type="text" id="code" name="code" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Login">
    </form>

    <p onclick="message()"> <a href="home.php">Open</a></p>
  </div>
  <hr>
	<footer class="footer">
        <div class="footer-content">
            <div class="footer-item">
                <h2>Contact us</h2>
                <ul>
                    <li><a href="#">Email:</a></li>
                    <li><a href="#">Phone: +250789368709</a></li>
                    <li><a href="#">Address:</a></li>
                </ul>
            </div>

            <div class="footer-item">
                <h2>About us</h2>
                <p>e-Healthly management Diabettes hypertensions and AIDS</p>
            </div>

            <div class="footer-item">
                <h2>Social media</h2>
                <ul
 
class="social-media">

                    
<li><a
 
href="#"><img src="face.png"><br>Facebook<i
 
class="fa-brands fa-facebook"></i></a></li>

                    
<li><a
 
href="#"><img src="x1.png"><br>X<i
 
class="fa-brands fa-twitter"></i></a></li>

                    
<li><a
 
href="#"><img src="link1.png">LinkedIn<i
 
class="fa-brands fa-linkedin"></i></a></li>

                
</ul>

            
</div>

        
</div>


        
<div
 
class="footer-copyright">
            <p>&copy; 2023 Medical System. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
