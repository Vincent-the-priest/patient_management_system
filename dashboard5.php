<?php
include 'Session.php';
error_reporting(E_ALL);
ini_set('display_errors',1);
$server = "localhost";
$users = "root";
$pass ="";
$db= "website";
$conn = mysqli_connect($server, $users, $pass, $db);
if (!$conn) {
    $error="Connection failed: ";
}
$sql = "SELECT * FROM Patient_message";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch data and store in an array
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "No data found";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>
    <style>
        .container {
            display: flex;
        }

        aside {
            width: 15%;
            background-color: #5298db;
            padding: 30px;
            color: rgb(138, 134, 78);
        }
body {
    background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
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
    
}

.user-actions {
    margin-top: 15px;
    text-align: right;
}

.user-actions button {
    background-color: #4CAF50; 
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
    background-color: #3e8e41; 
}
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
    
}

.user-actions {
    margin-top: 15px;
    text-align: right;
}

.user-actions button {
    background-color: #4CAF50; 
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
    background-color: #3e8e41; 
}
.profile-container {
  width: 80px; 
  height: 100px; 
  border-radius: 50%;
  overflow: hidden;
  position: relative; 
}

.profile-image {
  width: 100%;
  height: 95%;
  object-fit: cover; 
}

.profile-container:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 20%;
  height: 60%;
  border: 2px solid white; 
  border-radius: 50%;
}

    </style>
</head>

<body>

<div class="dashboard-container">
        <header>
            <h1>Dashboard</h1>
        </header>
        <nav>
</div>
                <center><button> <a href="home.php">Home </a></button>
                   
               <button><a href="patient.php">Patient </a></button> 
                <button><a href="patientcontact.php" class="btn">Contact</a></button>
                <li><a href="logout.php">Log Out</a></li>
            </center>
            </ul>
        </nav>
        <hr>
        <section id="search-bar">
                    <input type="text" id="search-input" placeholder="Search patients...">
                    <button id="search-button">Search</button>
                    <script>
                        const searchInput = document.getElementById("search-input");
                const searchButton = document.getElementById("search-button");
                
                searchButton.addEventListener("click", () => {
                    const searchTerm = searchInput.value.trim();
                
                    // Perform the search using your server-side language and database
                    // Example using a hypothetical fetchData function:
                    fetchData(searchTerm)
                        .then(data => {
                            // Update the dashboard elements with the filtered results
                        })
                        .catch(error => {
                            console.error("Error fetching data:", error);
                        });
                });
                
                    </script>
                    </section><hr>
        <div class="container">
        <aside>
            <h2>Option</h2>
            <ul>
                <li><button><a href="dashboard1.php">Patient</a></button></li><br>
                <li><button><a href="dashboard4.php">Registration</a></button></li>
                <li><button><a href="dashboard5.php">Nurse Message</a></button></li>
                <li><button><a href="dashboard3.php">Exam patient</a></button></li>
                <li><button><a href="dashboard2.php">Patient Message</a></button></li>
            </ul>
            <div class="profile-container">
  <img src="profile.jpg" alt="Profile Image" class="profile-image">
  
</div>
<?php echo $login_session;?>
        </aside>

<?php
if (!empty($data)) {
   echo" <center>TO nurse</center>";
    echo "<table border='1'>";
    echo "<tr><th>Name of sender</th><th>Phone number</th><th>Message</th></tr>";

    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['Message'] . "</td>";
                    
            echo "</tr>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>
