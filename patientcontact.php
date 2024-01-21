<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Contact Us</title>
  <script type="text/javascript">
    function message(){
      confirm("Do you need to back on home?");
    }
  </script>
  <style>
  body {
    background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
  font-family: sans-serif;
  margin: 0;
  padding: 0;

}

header {
  background-color: #f2f2f2;
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
  padding: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

button {
  background-color: #45b419;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
}
.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 20px;
}

select {
  width: 200px;
  padding: 10px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}
.back a{
  text-decoration: none;
}
.back{
  float: right;
}
img{
  height: 65px;
  width: 118px;
}

  </style>
</head>
<body>
  <header><nav><div>
    <div class="back"><button onclick="message()"><a href="home.php">HOME</a></button></div>
    <img src="logo.jpeg" alt="PMS logo"></div>
    <div>
    <h1>Patient management system</h1>
  <hr></div>
  </header>
</nav>
  <main>
    <section class="contact-info">
      <h2></h2>
      <p>For any questions or concerns, please feel free to reach out to us using the following methods:</p>

      <ul class="contact-details">
        <li><i class="fas fa-envelope"></i> <a href="mailto:patientcare@example.com">EMAIL</a></li>
        <li><i class="fas fa-phone"></i> <a href="telto+0791231619">CALL</a></li>
        <li><i class="fas fa-map-marker-alt"></i> <a href="https://www.google.com/maps/place/UR+College+of+Science+and+Technology/@-1.958692,30.0642158,15z/data=!4m6!3m5!1s0x19dca5d5b9897711:0x34e7b1e5cded7867!8m2!3d-1.958692!4d30.0642158!16zL20vMDgxMGJk?entry=ttu">KIGALI - RWANDA</a></li>
      </ul>

      <p>Our patient service hours are:</p>
      [NOT COMPLETED]
    </section>

    <section class="contact-form">
      <h2>Send message to patient</h2>
      <p>Please fill out the form below to send us a message. We will respond to your inquiry as soon as possible.</p>

      <form action="Nursemessage.php" method="POST">
      <div class="form-group">
                <label for="selection">Status:</label>
                <select name="drop_up">
                    <option value="">--select--</option>
                <option value="admin"><b>AIDS</b></option>
                <option value="user">Hypertension</option>
                <option value="public">Diabettes</option>
                <option value="public">ALL</option>
                </select>
            </div>
        <label for="name">Event Name(Event title):</label>
        <input type="text" id="name" name="name" required>
        <label for="phone">Phone Number (Optional):</label>
        <input type="tel" id="phone" name="phone">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="3" required></textarea>
        <button type="submit">Send</button>
      </form>
    </section>
  </main>
  <hr>

  <footer><center>
    <p>&copy; 2024 <i><b>PATIENT MANAGEMENT</b></i></p></center>
  </footer>
</body>
</html>
