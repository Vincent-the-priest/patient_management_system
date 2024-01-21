<?php
include 'Session.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient registration - Patient management</title>
    
    <style>
        body {
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: sans-serif;
            margin: 40px;
            background-image: url('background.jpg')
}

.container {
    border: 1px solid #1c94b3;
    padding: 5px;
    border-radius: 5px;
    width: 55%;
    margin: 5px auto;
    border: 1px solid #045372;
    box-shadow: 5px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="tel"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #04205c;
    border-radius: 3px;
    box-sizing: border-box;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: rgb(7, 55, 110);
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.header-navigation a:hover{
background-color: #0056b3;
padding: 5px;
color: #77fa0c;
text-decoration: double;
animation: infinite;
}
header {
  padding: 20px;
  background-image: url(logo.png);
  background-repeat: no-repeat;
  background-size: cover;
}
.header-navigation {
  float: right;
  background-image: url(logo.png);
  background-repeat: no-repeat;
  background-size: cover;
  
}

.header-navigation ul {
  list-style: none;
  padding: 5px;
  margin: 0;
}

.header-navigation li {
  display: inline-block;
  margin-right: 20px;
  font-size: large;
}

.header-navigation a {
  color: #3a08ad;
  text-decoration: none;
  font-weight: bold;

}
.footer {
    bottom: 0;
    text-align: center;
}
.links a {
    margin-left: 15px;
    color: #326f7e;
    text-decoration: none;
}
    </style>
</head><div>

<body>
    <header><h1>PATIENT MANAGEMENT SYSTEM</h1><hr>
    <nav class="header-navigation">
        <ul>
          <li><a href="patient.php"><ion-icon name="people-circle-outline"></ion-icon>Patient</a></li>
          <li><a href="patientcontact.php"><ion-icon name="call-outline"></ion-icon>Contact </a></li>
        <li><a href="logout.php"><button id="logoutButton"><ion-icon name="log-out-outline"></ion-icon>Log Out</button></a></li>
    
        </ul>
      </nav></header><hr><div class="container1">
        <div class="left">
        </div>
    <div class="container">
        <h1>Patient Registration </h1>
        <div>
        <form id="registrationForm" action="connectpatient.php" method="POST">
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="patientId">Patient ID(Nationality):</label>
                <input type="text" id="patientId" name="patientId" required>
            </div>
            <div class="form-group">
                <label for="sector">Sector:</label>
                <input type="text" id="sector" name="sector" required>
            </div>
            <div class="form-group">
                <label for="district">District:</label>
                <input type="text" id="district"name="district" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone"  name="phone" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">custom</option>
                </select>
            </div>
            <button type="submit" ><ion-icon name="save-outline"></ion-icon><b>Save</b></button>
            
        </form>
    </div></div>
<div class="right">

</div>
</div>
    
    <hr>
    <script src="script.js"></script>
    <footer class="footer">
        <div class="container">
            <div class="copyright">
                &copy; <span id="currentYear"></span> patient management.All right reserved!
            </div><hr>
            <div class="links">
                <a href="contactfull.php"><ion-icon name="logo-whatsapp"></ion-icon></a>
                <a href="telto:0789368709"><ion-icon name="call-outline"></ion-icon></ion-icon></a>
                <a href="https://dl.ucsc.cmb.ac.lk/jspui/bitstream/123456789/4487/1/2017%20MIT%20019.pdf"><ion-icon name="business-outline"></ion-icon>About us</a>
            </div>
        </div>
    </footer>
    <script>
        const currentYear = new Date().getFullYear();
document.getElementById('currentYear').textContent = currentYear;
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
