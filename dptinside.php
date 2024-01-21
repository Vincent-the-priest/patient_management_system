<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Form</title>
  <style>
  body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
}
.header{
  background-color: #96acc4;
}
.event-form-container {
  width: 600px;
  margin: 50px auto;
  padding: 20px;
  border: 1px solid #ccc;
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

input[type="text"], input[type="date"], textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid #a5b68f;
}

textarea {
  resize: vertical;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
}
header {
  background-color: #f8f9fa;
  padding: 20px;
}
.header-navigation {
  float: right;
}

.header-navigation ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.header-navigation li {
  display: inline-block;
  margin-right: 20px;
}

.header-navigation a {
  color: #333;
  text-decoration: none;
  font-weight: bold;
}

.header-navigation a:hover {
  color: #007bff;
}
.umti a{
  text-decoration: none;
}
.header {
    color: #fff;
    padding: 10px;
    display: flex;
    justify-content: space-between;
}

.profile-icon {
    width: 40px;
    height: 40px;
    background-color: #fff;
    border-radius: 50%;
    cursor: pointer;
}

.user-info {
    display: none;
    align-items: center;
}

.user-info img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 10px;
}

  </style>
</head>
<body>
<header class="header">
<nav class="header-navigation">
<div class="header">
        <div class="profile-icon" id="profileIcon">
        </div>
        <div class="user-info" id="userInfo">
            <!-- The user's name and settings will be displayed here -->
            <script>
              document.addEventListener('DOMContentLoaded', function () {
    const profileIcon = document.getElementById('profileIcon');
    const userInfo = document.getElementById('userInfo');
    const loggedInUser = {
        name: 'Patient_ID',
        profileImage: 'profile.jpg',
    };
    profileIcon.addEventListener('click', function () {
        userInfo.style.display = userInfo.style.display === 'none' ? 'flex' : 'none';
        if (userInfo.style.display === 'flex') {
            userInfo.innerHTML = `
                <img src="${loggedInUser.profileImage}" alt="${loggedInUser.name} profile image">
                <span>${loggedInUser.name}</span>
                <a href="modify_account.php">Modify Account</a>
            `;
        }
    });
});

            </script>
        </div>
    </div>
      <ul>
        <li><a href="patient.php">Patient</a></li>
        <li><a href="contactfull.php">Contact </a></li>
      </ul>
    </nav>
    <?php echo $login_session;?>
  </header><hr>

  <div class="event-form-container">
    <h1>exam event</h1>

    <form action="exam.php" method="POST">
    <div class="form-group">
        <label for="title">Patient ID:</label>
        <input type="text" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="event-title">Event Title:</label>
        <input type="text" id="event-title" name="event-title" required>
      </div>

      <div class="form-group">
        <label for="event-description">Event Description:</label>
        <textarea id="event-description" name="event-description" rows="5" required></textarea>
      </div>

      <div class="form-group">
        <label for="event-start-date">Start Date:</label>
        <input type="date" id="event-start-date" name="event-start-date" required>
      </div>

      <div class="form-group">
        <label for="event-end-date">End Date:</label>
        <input type="date" id="event-end-date" name="event-end-date" required>
      </div>

      <input type="submit" value="Save Exam"><br>
      <button class="umuti"><a href=""><input type="button" value="Take drugs"></a>
    </form>
  </div>

  <script>
    $(document).ready(function() {
      $('#event-start-date').datepicker({
        dateFormat: 'yy-mm-dd'
      });

      $('#event-end-date').datepicker({
        dateFormat: 'yy-mm-dd'
      });
    });
  </script>
  <hr>
</body>
</html>
