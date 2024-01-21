<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <script type="text/javascript">
    function message(){
      confirm("Do you need to back on home?");
    }
  </script>
  <style>
  body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  background-image: url(how.jpg);
}

header {
  background-color: #83ddc2;
  padding: 20px;
}

h1 {
  margin: 0;
  text-align: center;
}

main {
  padding: 20px;
}

.contact-info {
  margin-bottom: 40px;
}

.contact-details {
  list-style: none;
  margin: 0;
  padding: 0;
}

.contact-details li {
  margin-bottom: 10px;
}

.contact-details a {
  color: #45a049;
  text-decoration: none;
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
  background-color: #26e0d7;
  padding: 20px;
  text-align: center;
}

.back a{
  text-decoration: none;
}
.back{
  float: right;
}
  </style>
</head>
<body>
  <header>
    <div>
      <img src="logo.png" alt="PMS logo"><div class="back">
        <button onclick="message()"><a href="home.php">HOME</a></button></div>
       
    </div>
    <h1>Contact to employee</h1>
  </header>

  <main>
    <section class="contact-info">
      <h2>Institution Information</h2>
      <p>We're here to help. Feel free to reach out to us with any questions or inquiries.</p>

      <ul class="contact-details">
        <li><i class="fas fa-envelope"></i> <a href="#gmail">instutition email</a></li>
        <li><i class="fas fa-phone"></i> <a href="#number">Institution phone number</a></li>
        <li><i class="fas fa-map-marker-alt"></i> <a href="#">institution address</a></li>
      </ul>
    </section>

    <section class="contact-form">
      <h2>Contact method</h2>
      <p>Please fill out the form below and we'll get back to you as soon as possible.</p>

      <form action="#">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="number">phone number:</label>
        <input type="text" id="number" name="number" required>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Submit</button>
      </form>
    </section>
  </main>
<hr>
  <footer>
    <p>&copy; 2023 <i><b>Patient management</b></i></p>
  </footer>
</body>
</html>
