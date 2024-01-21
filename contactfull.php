<?php
include "Session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <style>
  body {
    background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
  font-family: sans-serif;
}

header {
  background-color: #bdc9;
  padding: 20px;
}

h1 {
  margin: 0;
  text-align: center;
}

main {
  padding: 20px;
}

.contact-team {
  display: flex;
  justify-content: space-around;
}
.contact-team a:hover{
color: #1ef328;
}
.team-member {
  text-align: center;
  margin-bottom: 30px;
}
.team-member a{
  text-decoration: none;
}
.profile-image {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 10px;
}

.profile-info {
  font-weight: bold;
}

.contact-form {
  display: flex;
  flex-direction: column;
  width: 500px;
  margin: 0 auto;
}

label {
  margin-bottom: 5px;
  display: block;
}

input, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

button {
  background-color: #45a049;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
}

footer {
  background-color: #9ef59e;
}

.back a{
  text-decoration: none;
}
.back{
  float: right;
}
.back1 img{
  width: 70px;
  height: 120px;
}
  </style>
</head>
<body>
  <header><div class="back1">
    <img src="logo.jpeg" alt="PMS logo"><div class="back">
      <button onclick="message()"><a href="home.php"><ion-icon name="home-outline"></ion-icon>HOME</a></button>
    <a href="logout.php"><button id="logoutButton"><ion-icon name="log-out-outline"></ion-icon>Log Out</button></a>
    </div>
     </div>
  </div>
    <h1>Patient management</h1>
  </header>

  <main>
    <section class="contact-team">
      <h2>Our Team</h2>
      <p>Meet our dedicated team of experts who are always ready to assist you.</p>

      <div class="team-member">
        <a href="admincontact.php">
          <img src="d.png" class="profile-image" alt="Profile Image 1">
          <div class="profile-info">
            <h3>CEO</h3>
            <p>Andikira Muganga</p>
          </div>
        </a>
      </div>
    </section>

    <section class="contact-form">
      <h2>Get in Touch</h2>
      <p>We're here to help. Feel free to reach out to us with any questions or inquiries.</p>
      </form>
    </section>
  </main>
  <hr>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<center>
  <footer>
    <p>&copy; 2024 <I><b>Patient management</b></I></p>
  </footer></center>
</body>
</html>
