<?php
include "Session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME-Patient management</title>
    
      <script>
  function message(){
   confirm("Gangira kwivuza, Andikira muganga. Aragufasha kugihe!");
  }
  function message1(){
   confirm("Byinshi kuri iyi ndwara!");
  }
  </script>
    <style>
		.hero-section {
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
}

.hero-image {
    opacity: 0.5;
}

.hero-text {
    text-align: center;
	color: green;
}

.hero-text h1 {
    font-size: 3rem;
    text-transform: uppercase;
	color: blue;
}

.services-section {
    padding: 20px;
    font-family: 'Times New Roman', Times, serif;
    background-color: #9c8adf;
}

.services-section h2 {
    text-align: center;
    margin-bottom: 20px;
}

.service-card {
    display: flex;
    align-items: center;
    padding: 20px;
    border: 1px solid #ffe3e3;
    margin-bottom: 20px;
    background-image: url('background.jpg');
        background-repeat: no-repeat;
        background-size: cover;
}
.service-card a{
  text-decoration: none;
}
.service-card a:hover{
  color: #f59330;
  background-color: #007bff;
  padding: 10px;
}
.service-card img {
    width: 100px;
    margin-right: 20px;
}

.service-card h3 {
    font-size: 18px;
}

.call-to-action-section {
    background-color: #318ff3;
    padding: 20px;
    text-align: center;
}

.call-to-action-text {
    margin-bottom: 20px;
}

.cta-btn {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}
.cta-btn a:hover{
  color: #c6fa0c;
}
.cta-btn a{
  text-decoration: navajowhite;
}
header {
  padding: 20px;
}
.header-navigation {
  float: left;
  background-image: blue;
  
}

.header-navigation ul {
  list-style: none;
  padding: 5px;
  margin: 0;
  position: fixed;
}

.header-navigation li {
  display: inline-block;
  margin-right: 20px;
  font-size: large;
}

.header-navigation a {
  color: #512b6d;
  text-decoration: none;
  font-weight: bold;
}

.start-to-heal-button {
  background-color: #007bff;
  color: #2055c9;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  font-size: 16px;
  font-weight: bold;
  margin-top: 20px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.start-to-heal-button:hover {
  background-color: #0056b3;
}

img{
  cursor: pointer;
}

.header-navigation img{
  width: 70px;
  height: 120px;
  float: right;
  position: fixed;
}

.header-navigation a:hover{
background-color: #0316b3;
padding: 5px;
color: #77fa0c;
text-decoration: double;
animation: infinite;
}
.logo{
  float: right;
  position: relative;
}
.logo img{
  width: 70px;
  height: 148px;
}
	</style>
</head>
<body><header class="header">
  <div class="logo"><img src="logo.jpeg" alt="PM logo"></div>
<nav class="header-navigation">
  

      <ul>
        <li><a href="home.php"><ion-icon name="home-outline"></ion-icon>Home</a></li>
        <li><a href="contactfull.php"><ion-icon name="call-outline"></ion-icon>Contact </a></li>
        
      <li><a href="logout.php"><button id="logoutButton"><ion-icon name="log-out-outline"></ion-icon>Log Out</button></a></li>

      </ul>
    </nav>
	</div></header>
    <div class="hero-section">
        <div class="hero-image">
            <img src="40.jpeg" alt="Hero Image">
        </div>
        <div class="hero-text">
          <h1>Patient Management</h1>
            <h2>Your Health is Our Priority</h2>
            <p>We are committed to providing you with the highest quality care.</p>
        </div>
    </div>
    <div class="services-section">
        <h2>Managed Services!</h2>
        <?php echo $login_session;?>
        <div class="service-card">
            <img src="42.jpg" alt="Service Card Image">
            <h3><a href="diabetes.php">Diabettes</a></h3>
            <p>Describution to diseases</p><a href="https://barc.gov.in/bmg/md/web/html/faq/diabetes.pdf">ABOUT ON IT</a>
           </div>
          
        </div>
        <div class="service-card">
            <img src="41.jpeg" alt="diabettes">
            <a href="aids.php">
           <h3>AIDS</h3></a>
            <p onclick="message1()">Describution to diseases</p><div onclick="message()">
              <a href="https://data.unaids.org/publications/irc-pub01/jc306-un-staff-rev1_en.pdf">ABOUT ON IT</a>
            </div>
            </b><button class="cta-btn"><a href="https://data.unaids.org/publications/fact-sheets01/rwanda_en.pdf">statistics</a></button>
        </div>
        <div class="service-card">
            <img src="43.jpg" alt="Service Card Image" onclick="">
            <a href="https://applications.emro.who.int/dsaf/dsa20.pdf?ua=1">
            <h3>Hypertension</h3></a>
            <p>Describution to diseases</p> <br>
            <center>
             <button class="cta-btn"><a href="https://www.thelancet.com/article/S0140-6736(21)01330-1/fulltext">Statistics on hypertension</a></button></center>
           </div>
    <div class="call-to-action-section">
        <div class="call-to-action-text">
            <h2>Schedule an Appointment Today</h2>
            <p>We are always here to help you.</p>
        </div><button class="cta-btn">
          <a href="https://www.who.int/health-topics/diabetes?gclid=CjwKCAiA1-6sBhAoEiwArqlGPhmF63JzbzO4G-dim4hGzntsJH0NzgC0Z6Ton0jh2TgTjUBNOjS6oxoCcfsQAvD_BwE#tab=tab_1">Schedule Now</a></button> </div>
          <div onclick="message()">
           <center><button class="cta-btn"><a href="contactfull.php">IVUZE</a></button></div>
           </center> 
    </div>
    <hr>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <footer><center>
      &copy;<b><i>2024 PATIENT MANAGEMENT!</i></b> </center>
    </footer>
</body>
</html>
