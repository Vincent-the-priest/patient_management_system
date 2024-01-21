<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Management System - Admin Dashboard</title>
    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.dashboard-container {
    display: flex;
    flex-direction: column;
}

header {
    background-color: #333;
    color: white;
    padding: 1em;
    text-align: center;
}

nav {
    background-color: #f2f2f2;
    padding: 1em;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    display: inline;
    margin-right: 20px;
}

a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

a:hover {
    color: #555;
}
#search-bar {
    background-color: #f2f2f2;
    padding: 10px;
    border-radius: 5px;
}

#search-input {
    width: 15%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

#search-button {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
/* style.css */
#user-management {
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
}

#user-management h2 {
    margin-top: 0;
    font-size: 18px;
    font-weight: bold;
}

.user-list {
    margin-top: 15px;
    /* Add specific styling for the user list elements here */
}

.user-actions {
    margin-top: 15px;
    text-align: right;
}

.user-actions button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 5px;
    cursor: pointer;
}

.user-actions button:hover {
    background-color: #3e8e41; /* Darker green */
}
/* style.css */
#user-management {
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
}

#user-management h2 {
    margin-top: 0;
    font-size: 18px;
    font-weight: bold;
}

.user-list {
    margin-top: 15px;
    /* Add specific styling for the user list elements here */
}

.user-actions {
    margin-top: 15px;
    text-align: right;
}

.user-actions button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 5px;
    cursor: pointer;
}

.user-actions button:hover {
    background-color: #3e8e41; /* Darker green */
}

    </style>
</head>
<body>
    <div class="dashboard-container">
        <header>
            <h1>Dashboard</h1>
        </header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#user-management">User Management</a></li>
                <li><a href="#account-settings">Account Settings</a></li>
            </ul>
        </nav>
        <section id="content">
            <!-- Content of the pages will be loaded dynamically here -->
        </section>
    </div>

    <main>
    <!-- Add the id attribute to your form -->
<form id="search-form">
    <input type="text" id="search-input" placeholder="Search patients...">
    <button type="button" id="search-button">Search</button>
</form>

<script>
    const searchForm = document.getElementById("search-form");
    const searchInput = document.getElementById("search-input");
    const searchButton = document.getElementById("search-button");

    searchButton.addEventListener("click", function() {
        const searchTerm = searchInput.value.trim();

        // Perform AJAX request to your server-side script
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Update the table with the search results
                const resultContainer = document.getElementById("result-container");
                resultContainer.innerHTML = xhr.responseText;
            }
        };

        // Replace 'search.php' with the actual server-side script handling the search
        xhr.open("GET", `search.php?term=${searchTerm}`, true);
        xhr.send();
    });
</script>

</section>
<section id="user-management">
    <h2>User Management</h2>
    <div class="user-list">
        </div>
    <div class="user-actions">
        <button id="add-user">Add User</button>
        <button id="edit-user">Edit User</button>
        <button id="delete-user">Delete User</button>
    </div>
    <script>
fetchUsers();

function fetchUsers() {
}
document.getElementById("add-user").addEventListener("click", addUser);
document.getElementById("edit-user").addEventListener("click", editUser);
document.getElementById("delete-user").addEventListener("click", deleteUser);
    </script>
</section>

<?php
include 'Session.php';
$server = "localhost";
$users = "root";
$pass ="";
$db= "website";
$conn = mysqli_connect($server, $users, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$searchTerm = mysqli_real_escape_string($conn, $_GET['term']);

$sql = "SELECT * FROM Patient WHERE Last_Name LIKE '%$searchTerm%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo "<table border='1'>";
    echo "<tr><th>Patient ID</th><th>Last_Name</th><th>First_Name</th><th>Phone_Number</th><th>Gender</th><th>Actions</th></tr>";

    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . $row['Patient_ID'] . "</td>";
        echo "<td>" . $row['Last_Name'] . "</td>";
        echo "<td>" . $row['First_Name'] . "</td>";
        echo "<td>" . $row['Phone_Number'] . "</td>";
        echo "<td>" . $row['Gender'] . "</td>";
        echo "<td>";
        echo "<a href=\"view.html?id=" . $row['Patient_ID'] . "\">View</a> ";
        echo "|<a href=\"edituser.php?Patient_ID=" . $row['Patient_ID'] . "\">Edit</a>";
        echo "|<a href=\"deactivate.html?id=" . $row['Patient_ID'] . "\">Deactivate</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found";
}

$conn->close();
?>



    <section id="account-settings">
      <!-- Add your account settings code here -->
    </section>

    <section id="total-patients">
      <!-- Add your total number of patients code here -->
    </section>

    <section id="new-patients">
      <!-- Add your new patients code here -->
    </section>

    <section id="upcoming-appointments">
      <!-- Add your upcoming appointments code here -->
    </section>

    <section id="patient-demographics">
      <!-- Add your patient demographics code here -->
    </section>

    <section id="patient-table">
      <!-- Add your patient table code here -->
    </section>

    <section id="sorting-pagination">
      <!-- Add your sorting and pagination code here -->
    </section>

    <section id="recent-activity">
      <!-- Add your recent activity code here -->
    </section>

    <section id="appointment-scheduler">
      <!-- Add your appointment scheduler code here -->
    </section>

    <section id="medical-records">
      <!-- Add your medical records code here -->
    </section>

    <section id="patient-feedback">
      <!-- Add your patient feedback code here -->
    </section>
  </main>
    <script src="script.js"></script>
</body>
</html>
