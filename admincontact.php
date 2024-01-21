<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PM-contact</title>
   <script>
        function message(){
            confirm("Your message was sent successfully!
            Go on home!");
        }
    </script>
  <style>
  
  body {
  font-family: sans-serif;
  margin: 5px;
  padding: 3px;
  background-color: #c3e673;
}

header {
  background-color: #caee8d;
  padding: 10px;
}

h1 {
  margin: 0;
  text-align: center;
}

main {
  padding: 70px;
}

form {
  display: flex;
  flex-direction: column;
  width: 600px;
  margin: 0 auto;
}

label {
  margin-bottom: 5px;
  display: block;
}

input, textarea {
  width: 100%;
  padding: 5px;
  border: 0.5px solid #cbc;
  margin-bottom: 20px;
}

button {
  background-color: #15a059;
  color: blue;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  width: 100px
}

footer {
  background-color: #83dfb4;
  padding: 20px;
  text-align: center;
}
.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 20px;
}

select {
  width: 100px;
  padding: 10px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

#like-button {
  padding: 10px 20px;
  background-color: #2fee38;
  color: rgb(134, 120, 120);
  border: none;
  cursor: pointer;
}
.back a{
  text-decoration: none;
}
.back{
  float: right;
}
.contact{
padding: 3px;
background-color: #1bd663;
}
img{
  width: 120px;
  height: 67px;
}

.footer {
    bottom: 23px;
    width: 1900px;
    height: 70px;
    background-color: #9de0bf;
    text-align: center;
    padding: 10px;
}
.links {
    float: right;
}

.links a {
    margin-left: 15px;
    color: #326f7e;
    text-decoration: none;
}
  </style>
</head>
<body>
  <header><img src="logo.png" alt="PMS logo"><div class="back">
    <button onclick="message()"><a href="home.php">HOME</a></button></div>
   
    <h1>Patient management system</h1>
    <hr>
  </header>

  <main>
    <div class="contact">
     <form action="connectmessage.php" method="POST">
      <h1>Send message to Nurse</h1>
      <label for="name">Name(Amazina):</label>
      <input type="text" id="name" name="name" required>
      <div class="form-group">
                <label for="phone">Phone Number(Nomero):</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

      
      <label for="message">Message(Ubutumwa):</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit" onclick ="message()">OHEREZA</button>
     </form>
   </div>
  </main>
<hr>
<footer class="footer">
  <div class="container">
      <div class="copyright">
          &copy; <span id="currentYear"></span> <i>patient management.All right reserved!</i>
      </div><hr>
      <div class="links">
          <a href="home.html">About</a>
          <a href="telto:0789368709">Whatsapp</a>
          <a href="#">Other</a>
      </div>
  </div>
</footer>
<script>
  const currentYear = new Date().getFullYear();
document.getElementById('currentYear').textContent = currentYear;
</script>
</body>
</html>
